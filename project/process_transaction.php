<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];
    $num_travelers = $_POST['num_travelers'];

    /

    
    $booking_data = "Destination: $destination\n";
    $booking_data .= "Departure Date: $departure_date\n";
    $booking_data .= "Return Date: $return_date\n";
    $booking_data .= "Number of Travelers: $num_travelers\n";

    
    $file_path = "bookings.txt"; // Path to the file where bookings will be saved
    file_put_contents($file_path, $booking_data, FILE_APPEND | LOCK_EX);

    

    // Redirect the user to a confirmation page
    header("Location: confirmation.php");
    exit();
}
?>