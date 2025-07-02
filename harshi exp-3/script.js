document.getElementById('ticketForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let seat = document.getElementById('seat').value;

    localStorage.setItem('ticketDetails', JSON.stringify({
        name: name,
        email: email,
        phone: phone,
        seat: seat
    }));

    window.location.href = 'confirmation.html';
});
