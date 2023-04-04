<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];

  // Validate the form data
  if (empty ($name) || empty($email) || empty($password) || empty($confirm_password) || empty($birthdate) || empty($gender) || empty($country)) {
    echo 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email format.';
    } elseif ($password != $confirm_password) {
    echo 'Passwords do not match.';
    } else {
    // Save the form data to the database or send an email notification
    // This is just an example - actual code will depend on your specific needs
    // You should also sanitize and validate the input to prevent SQL injection attacks or other security vulnerabilities
    $message = "Name: $name\nEmail: $email\nPassword: $password\nBirthdate: $birthdate\nGender: $gender\nCountry: $country";
    mail('lionlim1111@gmail.com', 'New Registration', $message);
    echo 'Registration Successful.';
    }
    }
?>
