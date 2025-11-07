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

document.querySelectorAll('.editBtn').forEach(button => {
    button.addEventListener('click', function () {
        document.getElementById('edit_id').value = this.dataset.id;
        document.getElementById('edit_name').value = this.dataset.name;
        document.getElementById('edit_desc').value = this.dataset.desc;
        document.getElementById('edit_type').value = this.dataset.type;
        document.getElementById('edit_trans').value = this.dataset.trans;
        document.getElementById('edit_seats').value = this.dataset.seats;
        document.getElementById('edit_bags').value = this.dataset.bags;
        document.getElementById('edit_price').value = this.dataset.price;
    });
});

function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this vehicle?")) {
        window.location = "../actions/delete_vehicle.php?id=" + id;
    }
}