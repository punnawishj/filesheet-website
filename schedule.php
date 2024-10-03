
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $to = "admin@filesheet.com"; // Your email
    $subject_line = "New 1-on-1 Booking Request";
    $message = "Subject: $subject\nPreferred Date: $date\nPreferred Time: $time";
    
    // Send email
    if (mail($to, $subject_line, $message)) {
        echo "Booking request sent successfully.";
    } else {
        echo "Failed to send booking request.";
    }
}
?>
