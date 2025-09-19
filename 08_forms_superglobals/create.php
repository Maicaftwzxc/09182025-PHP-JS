<?php

    $uploadsDir = 'uploads/';
    $contactsFile = 'contacts.json';
    

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
                    $contacts = file_exists($contactsFile) ?
                                json_decode(file_get_contents($contactsFile))
                                : [];

                    $contacts[] = [
                        'name' => $name,
                        "email" => $email,
                        "phone" => $phone,
                        "image" => $imagePath
                    ];

                    file_put_contents($contactsFile,
                    json_encode($contacts, JSON_PRETTY_PRINT));
                    echo "Contact added: $name ($email, $phone)";
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