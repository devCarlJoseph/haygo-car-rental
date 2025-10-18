$(function () {
  // Show popup
  $("#newVehicleBtn").click(function () {
    $("#overlay, #car-file").fadeIn(300);
  });

  // Hide popup (both cancel and submit)
  $("#cancelBtn, #addCarBtn").click(function (e) {
    e.preventDefault();
    $("#overlay, #car-file").fadeOut(300);
  });

  // Hide if clicking outside the form
  $("#overlay").click(function () {
    $("#overlay, #car-file").fadeOut(300);
  });
});
