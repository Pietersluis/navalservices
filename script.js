document.addEventListener("DOMContentLoaded", function () {
    // Get references to the button and the booking form
    var bookButton = document.getElementById("bookButton");
    var bookingForm = document.getElementById("bookingForm");

    // Add a click event listener to the button
    bookButton.addEventListener("click", function () {
        // Toggle the visibility of the booking form
        if (bookingForm.style.display === "none" || bookingForm.style.display === "") {
            bookingForm.style.display = "block";
        } else {
            bookingForm.style.display = "none";
        }
    });
});