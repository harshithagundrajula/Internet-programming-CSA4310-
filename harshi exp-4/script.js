window.onload = function () {
  const urlParams = new URLSearchParams(window.location.search);
  const trainName = urlParams.get("train");

  if (trainName) {
    document.getElementById("train").value = trainName;
  }

  document.getElementById("trainForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const booking = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      phone: document.getElementById("phone").value,
      train: document.getElementById("train").value,
      seat: document.getElementById("seat").value,
    };

    localStorage.setItem("trainBooking", JSON.stringify(booking));
    window.location.href = "confirmation.html";
  });
};
