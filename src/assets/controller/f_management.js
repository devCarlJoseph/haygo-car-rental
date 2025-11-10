let vehicles = [];
let currentPage = 1;
const rowsPerPage = 10;

function renderTable(data) {
    const $tableBody = $('#vehicleTableBody');
    $tableBody.empty();

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedData = data.slice(start, end);

    if (paginatedData.length === 0) {
        $tableBody.html(`<tr><td colspan="8" class="text-center text-secondary p-4">No vehicles found.</td></tr>`);
        return;
    }

    $.each(paginatedData, function (_, vehicle) {
        $tableBody.append(`
            <tr>    
                <td class="text-center">${vehicle.id}</td>
                <td>
                    <img src="../uploads/vehicles/${vehicle.car_image}" 
                        alt="Car Image" style="width: 70px; height: 50px; object-fit: contain; border-radius: 6px;">
                </td>
                <td>
                    <strong>${vehicle.car_name}</strong><br>
                    <span class="text-muted small">${vehicle.car_description}</span>
                </td>
                <td class="text-center">${vehicle.car_type}</td>
                <td class="text-center">${vehicle.transmission}</td>
                <td class="text-center">${vehicle.seats} Seats • ${vehicle.bags} Bags</td>
                <td class="text-center">₱${parseFloat(vehicle.car_price).toLocaleString()}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-primary editBtn"
                        data-id="${vehicle.id}"
                        data-name="${vehicle.car_name}"
                        data-desc="${vehicle.car_description}"
                        data-type="${vehicle.car_type}"
                        data-trans="${vehicle.transmission}"
                        data-seats="${vehicle.seats}"
                        data-bags="${vehicle.bags}"
                        data-price="${vehicle.car_price}"
                        data-bs-toggle="modal"
                        data-bs-target="#editVehicleModal">Edit</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="confirmDelete(${vehicle.id})">Delete</button>
                </td>
            </tr>
        `);
    });

    renderPagination(data);
}

function renderPagination(data) {
    const totalPages = Math.ceil(data.length / rowsPerPage);
    const $paginationContainer = $('.pagination');
    $paginationContainer.empty();

    $paginationContainer.append(`
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>
        </li>
    `);

    for (let i = 1; i <= totalPages; i++) {
        $paginationContainer.append(`
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link ${i === currentPage ? 'bg-rental-primary border-rental-primary text-white' : 'text-rental-primary'}" 
                    href="#" data-page="${i}">${i}</a>
            </li>
        `);
    }

    $paginationContainer.append(`
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
        </li>
    `);
}

function goToPage(page) {
    currentPage = page;
    applyFilters(); 
}

function applyFilters() {
    const searchValue = $('#search-input').val().toLowerCase();
    const selectedType = $('#type-filter-btn').data('filterValue') || 'All';

    const filtered = vehicles.filter(vehicle => {
        const matchesSearch = vehicle.car_name.toLowerCase().includes(searchValue) || vehicle.car_description.toLowerCase().includes(searchValue);
        const matchesType = selectedType === 'All' || vehicle.car_type === selectedType;
        return matchesSearch && matchesType;
    });

    renderTable(filtered);
}

function setupFilterListeners() {
    $('#search-input').on('input', function () {
        currentPage = 1;
        applyFilters();
    });

    $('.filter-link').on('click', function (e) {
        e.preventDefault();
        const typeValue = $(this).data('filterValue');
        $('#type-filter-btn').text(`Type: ${typeValue}`).data('filterValue', typeValue);
        currentPage = 1;
        applyFilters();
    });

    $(document).on('click', '.pagination .page-link', function (e) {
        e.preventDefault();
        const page = $(this).data('page');
        if (page >= 1) {
            goToPage(page);
        }
    });
}

function handleAddNewVehicle(e) {
    e.preventDefault();

    const newVehicle = {
        id: vehicles.length ? vehicles[vehicles.length - 1].id + 1 : 1,
        car_name: $('#carName').val(),
        car_description: $('#carDescription').val(),
        seats: parseInt($('#seats').val()),
        bags: parseInt($('#bags').val()),
        transmission: $('#transmission').val(),
        car_type: $('#carType').val(),
        car_price: parseFloat($('#carPrice').val()).toFixed(2),
        car_image: $('#carImage').val().split('/').pop().split('.')[0] || 'Car',
    };

    if (!newVehicle.car_name || !newVehicle.car_type || isNaN(newVehicle.seats) || isNaN(newVehicle.bags) || isNaN(parseFloat(newVehicle.car_price))) {
        console.error("Missing or invalid required fields.");
        return;
    }

    vehicles.push(newVehicle);
    currentPage = Math.ceil(vehicles.length / rowsPerPage);
    applyFilters();

    const modalEl = $('#addVehicleModal');
    const modal = bootstrap.Modal.getInstance(modalEl[0]);
    if (modal) modal.hide();
    $('#addNewVehicleForm')[0].reset();
}

$(document).ready(function () {
    renderTable(vehicles);
    setupFilterListeners();
    $('#addNewVehicleForm').on('submit', handleAddNewVehicle);
});
