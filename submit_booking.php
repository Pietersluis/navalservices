<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $passengers = $_POST["passengers"];
    $preferred_date = $_POST["preferred_date"];
    $preferred_time = $_POST["preferred_time"];
    $hour = $_POST["hour"];
    $message = $_POST["message"];
    $special_requests = implode(", ", $_POST["special_requests"]);

    $to = "sluis.pieter@gmail.com";
    $subject = "Booking Request from $name";
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Phone: $phone\n";
    $message_body .= "Number of Passengers: $passengers\n";
    $message_body .= "Preferred Date: $preferred_date\n";
    $message_body .= "Preferred Time: $preferred_time\n";
    $message_body .= "Number of Hours: $hour\n";
    $message_body .= "Additional Comments: $message\n";
    $message_body .= "Special Requests: $special_requests\n";

    if (mail($to, $subject, $message_body)) {
        echo "Booking request sent successfully. We will contact you shortly.";
    } else {
        echo "Sorry, there was an error sending your booking request. Please try again later.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>