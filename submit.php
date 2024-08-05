<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $country = $_POST['country_name'];
    $phone = $_POST['modal_my_mobile2'];

    // Perform any necessary validation and processing

    // Redirect to the Thank You page
    header("Location: thank-you.html");
    exit();
}
?>
