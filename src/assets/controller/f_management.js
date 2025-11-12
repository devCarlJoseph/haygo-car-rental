document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('editBtn')) {
        const button = e.target;

        const id = button.dataset.id;
        const name = button.dataset.name;
        const type = button.dataset.type;
        const desc = button.dataset.desc;
        const trans = button.dataset.trans;
        const seats = button.dataset.seats;
        const bags = button.dataset.bags;
        const price = button.dataset.price;

        const modal = document.getElementById('editVehicleModal');

        modal.querySelector('#edit_id').value = id;
        modal.querySelector('#edit_name').value = name;
        modal.querySelector('#edit_type').value = type;
        modal.querySelector('#edit_desc').value = desc;
        modal.querySelector('#edit_trans').value = trans;
        modal.querySelector('#edit_seats').value = seats;
        modal.querySelector('#edit_bags').value = bags;
        modal.querySelector('#edit_price').value = price;

        const bsModal = new bootstrap.Modal(modal);
        bsModal.show();
    }
});




