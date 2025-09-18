<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") { //accept and validate data
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); //to avoid any hacking on a website
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
  
            if ($name && $email && $phone) {
                echo "Contact added: $name ($email, $phone)";
            } else {
                echo "Invalid input!";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="text" name="email" required>

    <label>Phone:</label>
    <input type="text" name="phone" required>

    <label>Contact Image:</label>
    <input type="file" name="image" accept="image/*" required>

    <button type="submit">Add Contact</button>

</form>
</body>
</html>