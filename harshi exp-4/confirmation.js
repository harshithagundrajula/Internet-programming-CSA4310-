window.onload = function () {
  const booking = JSON.parse(localStorage.getItem("trainBooking"));

  if (!booking) {
    document.getElementById("ticketInfo").textContent = "No booking found.";
    return;
  }

  document.getElementById("ticketInfo").innerHTML = `
    <strong>Name:</strong> ${booking.name}<br>
    <strong>Email:</strong> ${booking.email}<br>
    <strong>Phone:</strong> ${booking.phone}<br>
    <strong>Train:</strong> ${booking.train}<br>
    <strong>Seat Preference:</strong> ${booking.seat}<br>
  `;
};
