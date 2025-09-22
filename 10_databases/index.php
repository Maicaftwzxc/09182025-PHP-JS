<?php

  $pdo = require 'db.php';
    $contacts = [];
    if ($pdo) {
    //Query to fetch all contacts
    $stmt = $pdo->query("SELECT * FROM contacts");

    //Fetch all results as associative arrays
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <a href="create.php">Create new contact</a>

<ul>
    <?php foreach ($contacts as $contact): ?>
        <li>
            <img src="<?php echo $contact['image']; ?>" height="150">
            <?php echo "{$contact['name']} - {$contact['email']} - {$contact['phone']}
            "; ?>
            <a href="delete.php? name=<?php echo $contact['name']?>">
                Delete
            </a>
        </li>
    <?php endforeach; ?>           

</ul>
</body>
</html>