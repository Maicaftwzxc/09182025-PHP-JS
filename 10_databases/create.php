<?php

$pdo = require 'db.php';

    $uploadsDir = 'uploads/';
    

   if ($_SERVER["REQUEST_METHOD"] == "POST") { //accept and validate data
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); //to avoid any hacking on a website
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
  
            if ($name && $email && $phone && isset($_FILES['image'])) {

                //ENSURE THE UPLOADS DIRECTORY EXISTS
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0777, true);
                }
                $imageName = time() . "_" . basename($_FILES["image"]["name"]);
                $imagePath = $uploadsDir . $imageName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone,image)
                    VALUES (:name, :email, :phone, :image)");
                    echo "Contact added: $name ($email, $phone)";
                    $stmt->execute([
                        ':name' =>$name,
                        ':email' =>$email,
                        ':phone' =>$phone,
                        ':image' =>$imagePath, //save the image file name to the database

                    ]);
                } else {
                    echo "Image upload failed";
                }
                
                
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
<form action="" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required>
    <br>

    <label>Email:</label>
    <input type="text" name="email" required>
    <br>

    <label>Phone:</label>
    <input type="text" name="phone" required>
    <br>

    <label>Contact Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>

    <button type="submit">Add Contact</button>

</form>
</body>
</html>