<?php

    if (isset($_GET['name'])) {

        $contactsFile = 'contacts.json'; //USED TO SEE IF THE NAME EXISTS INSIDE GET
        $contacts = file_exists($contactsFile) ? json_decode(file_get_contents
        ($contactsFile), true) : []; //WHERE TO READ AGAIN CONTACT INFO

        //REMOVE THE CONTACT BY NAME (will use array to filter)
        $contacts = array_filter($contacts, fn($c) => $c["name"] !==$_GET ["name"]);
        
        file_put_contents($contactsFile
        , json_encode($contacts, JSON_PRETTY_PRINT));
        echo "Contact Deleted";
    
    
    }




?>