let vehicles = [{
    id: 1,
    car_name: 'Toyota Camry (2023)',
    car_type: 'Sedan',
    car_description: 'Reliable and comfortable mid-size sedan.',
    seats: 5,
    bags: 2,
    transmission: 'Automatic',
    car_price: '75.00',
    car_image: 'Toyota'
}, // Using car_name for placeholder text
{
    id: 2,
    car_name: 'BMW 3 Series (2024)',
    car_type: 'Luxury',
    car_description: 'Sporty sedan with premium features and performance.',
    seats: 5,
    bags: 3,
    transmission: 'Automatic',
    car_price: '150.00',
    car_image: 'BMW'
},
{
    id: 3,
    car_name: 'Ford Transit Van (2022)',
    car_type: 'Van',
    car_description: 'High capacity van ideal for groups or cargo.',
    seats: 12,
    bags: 8,
    transmission: 'Automatic',
    car_price: '120.00',
    car_image: 'Van'
},
{
    id: 4,
    car_name: 'Tesla Model Y (2024)',
    car_type: 'Electric',
    car_description: 'All-electric, long-range SUV with cutting-edge tech.',
    seats: 5,
    bags: 4,
    transmission: 'Automatic',
    car_price: '135.00',
    car_image: 'Tesla'
},
{
    id: 5,
    car_name: 'Nissan Rogue (2021)',
    car_type: 'SUV',
    car_description: 'Compact SUV perfect for family travel.',
    seats: 5,
    bags: 3,
    transmission: 'Automatic',
    car_price: '85.00',
    car_image: 'Nissan'
},
{
    id: 6,
    car_name: 'Audi Q5 (2023)',
    car_type: 'Luxury',
    car_description: 'Premium compact crossover with Quattro AWD.',
    seats: 5,
    bags: 3,
    transmission: 'Automatic',
    car_price: '160.00',
    car_image: 'Audi'
},
];

let nextVehicleId = vehicles.length > 0 ? Math.max(...vehicles.map(v => v.id)) + 1 : 1;
let currentTypeFilter = 'All';
let currentSearchTerm = '';


// --- 2. RENDERING FUNCTIONS ---

/**
 * Renders the filtered vehicle list to the table body.
 * @param {Array<Object>} filteredList The list of vehicles to display.
 */
function renderTable(filteredList = vehicles) {
    const tableBody = document.getElementById('vehicleTableBody');
    const totalCountElement = document.getElementById('vehicle-count');
    const showingCountElement = document.getElementById('showing-count');
    let html = '';

    if (filteredList.length === 0) {
        // Colspan updated to 6
        html = `<tr><td colspan="6" class="text-center p-4 text-secondary">No vehicles match your current search and filter criteria.</td></tr>`;
    } else {
        filteredList.forEach(vehicle => {
            // Placeholder image URL generation using vehicle name as text
            const imageText = vehicle.car_image.split(' ')[0] || 'Car';
            const imageUrl = `https://placehold.co/100x60/AB8B7D/ffffff?text=${encodeURIComponent(imageText)}`;

            html += `
                        <tr>
                            <td class="px-3 py-3">
                                <img src="${imageUrl}" 
                                     alt="${vehicle.car_name}" 
                                     class="img-fluid rounded-3 shadow-sm" 
                                     style="max-width: 100px; height: auto; min-width: 80px;">
                            </td>
                            <td class="px-3 py-3">
                                <p class="mb-0 fw-medium text-dark">${vehicle.car_name}</p>
                                <p class="mb-0 small text-secondary">${vehicle.car_description}</p>
                            </td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">${vehicle.car_type}</td>
                            <td class="px-3 py-3 text-sm text-secondary">
                                <i class="bi bi-person-fill me-1"></i>${vehicle.seats} Seats <br>
                                <i class="bi bi-briefcase-fill me-1"></i>${vehicle.bags} Bags <br>
                                <i class="bi bi-gear-fill me-1"></i>${vehicle.transmission}
                            </td>
                            <td class="px-3 py-3 text-lg fw-bold text-success">$${vehicle.car_price}</td>
                            <td class="px-3 py-3">
                                <button class="action-btn" title="Edit Details"><i class="bi bi-pencil-square"></i></button>
                                <button class="action-btn text-danger" title="Remove Vehicle" onclick="removeVehicle(${vehicle.id})"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    `;
        });
    }

    tableBody.innerHTML = html;
    totalCountElement.textContent = vehicles.length;
    showingCountElement.textContent = `Showing ${filteredList.length} of ${vehicles.length} vehicles`;
}

/**
 * Removes a vehicle from the list (client-side only).
 * @param {number} id The ID of the vehicle to remove.
 */
function removeVehicle(id) {
    // Using a custom confirmation message box instead of alert/confirm
    const isConfirmed = window.confirm(`Are you sure you want to remove the vehicle with ID ${id} from the catalog?`);

    if (isConfirmed) {
        vehicles = vehicles.filter(v => v.id !== id);
        applyFilters(); // Re-filter and re-render
    }
}


// --- 3. FILTERING AND SEARCHING LOGIC ---

/**
 * Applies the current search term and type filter to the vehicle list.
 */
function applyFilters() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase().trim();
    currentSearchTerm = searchTerm;

    const filtered = vehicles.filter(vehicle => {
        // 1. Search filter (on name and description)
        const searchMatch = vehicle.car_name.toLowerCase().includes(searchTerm) ||
            vehicle.car_description.toLowerCase().includes(searchTerm);

        // 2. Type filter
        const typeMatch = currentTypeFilter === 'All' || vehicle.car_type === currentTypeFilter;

        return searchMatch && typeMatch;
    });

    renderTable(filtered);
}

/**
 * Sets up event listeners for the type filter and search bar.
 */
function setupFilterListeners() {
    // Search Input Listener
    document.getElementById('search-input').addEventListener('keyup', applyFilters);

    // Type Filter Dropdown Listeners
    document.querySelectorAll('#type-filter-menu .filter-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            currentTypeFilter = this.getAttribute('data-filter-value');
            document.getElementById('type-filter-btn').textContent = `Type: ${currentTypeFilter}`;
            applyFilters();
        });
    });
}


// --- 4. MODAL / ADD VEHICLE LOGIC ---

/**
 * Handles the submission of the "Add New Vehicle" form.
 * @param {Event} e The form submit event.
 */
function handleAddNewVehicle(e) {
    e.preventDefault();

    const newVehicle = {
        id: nextVehicleId++,
        car_name: document.getElementById('carName').value,
        car_description: document.getElementById('carDescription').value,
        seats: parseInt(document.getElementById('seats').value),
        bags: parseInt(document.getElementById('bags').value),
        transmission: document.getElementById('transmission').value,
        car_type: document.getElementById('carType').value,
        car_price: parseFloat(document.getElementById('carPrice').value).toFixed(2),
        car_image: document.getElementById('carImage').value.split('/').pop().split('.')[0] || 'Car', // Use a simple name for placeholder generation
    };

    // Simple validation check
    if (!newVehicle.car_name || !newVehicle.car_type || isNaN(newVehicle.seats) || isNaN(newVehicle.bags) || isNaN(parseFloat(newVehicle.car_price))) {
        console.error("Missing or invalid required fields.");
        return;
    }

    vehicles.push(newVehicle);
    applyFilters(); // Re-render table

    // Close the modal and reset the form
    const modalElement = document.getElementById('addVehicleModal');
    const modal = bootstrap.Modal.getInstance(modalElement);
    if (modal) {
        modal.hide();
    }
    document.getElementById('addNewVehicleForm').reset();
}

/**
 * Initialization function called on page load.
 */
window.onload = function () {
    // 1. Initial render of the table
    renderTable(vehicles);

    // 2. Setup filtering and searching event handlers
    setupFilterListeners();

    // 3. Setup form submission handler
    document.getElementById('addNewVehicleForm').addEventListener('submit', handleAddNewVehicle);
}