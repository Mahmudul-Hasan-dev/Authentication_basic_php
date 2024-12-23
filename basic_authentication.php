<?php
// Step 1: Define constants for username and password
define("USERNAME", "admin"); // Predefined username
define("PASSWORD", "password123"); // Predefined password

// Step 2:user input for login

$inputUsername = "admin"; 
$inputPassword = "password123"; 

// Step 3: Check if the credentials match
if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
    echo "Login successful! Welcome, $inputUsername.\n";
} else {
    echo "Login failed! Invalid username or password.\n";
}
?>