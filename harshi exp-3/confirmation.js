window.onload = function() {
    let ticketDetails = JSON.parse(localStorage.getItem('ticketDetails'));

    if (ticketDetails) {
        document.getElementById('ticketDetails').innerHTML = `
            <strong>Name:</strong> ${ticketDetails.name} <br>
            <strong>Email:</strong> ${ticketDetails.email} <br>
            <strong>Phone:</strong> ${ticketDetails.phone} <br>
            <strong>Seat:</strong> ${ticketDetails.seat} <br>
        `;
    } else {
        window.location.href = 'index.html';
    }
};
