<?php

$dsn = 'mysql:host=localhost;dbname=crudolies';
$username = 'root';
$password = 'hosehead';


try {
    $db = new PDO($dsn, $username, $password);
    // Useful for testing...
    //echo "Connected successfully";
} catch (PDOException $err) {
    $error_message = 'Database Error: ';
    $error_message .= $err->getMessage();
    echo $error_message;
    exit();
};





// grabbing Post stuff
if (isset($_POST['save'])) {
    $pen_brand = filter_input(INPUT_POST, 'pen-brand');
    $pen_name = filter_input(INPUT_POST, 'pen-name');
    $pen_color = filter_input(INPUT_POST, 'pen-color');
    $nib = filter_input(INPUT_POST, 'nib');
    $filling_mech = filter_input(INPUT_POST, 'filling-mech');
    $ink_brand = filter_input(INPUT_POST, 'ink-brand');
    $ink_color = filter_input(INPUT_POST, 'ink-color');
    $date_filled = filter_input(INPUT_POST, 'date-filled');

    //echo nl2br("$pen_brand \n $pen_name \n $pen_color \n $nib \n $filling_mech \n $ink_brand \n $ink_color \n $date_filled");
    $query = "INSERT INTO pendata(penBrand, penName, penColor, nib, fillingMech, inkBrand, inkColor, dateFilled) VALUES(:pen_brand,:pen_name, :pen_color, :nib, :filling_mech, :ink_brand, :ink_color, :date_filled)";
    $statement = $db->prepare($query);
    $statement->bindValue(':pen_brand', $pen_brand);
    $statement->bindValue(':pen_name', $pen_name);
    $statement->bindValue(':pen_color', $pen_color);
    $statement->bindValue(':nib', $nib);
    $statement->bindValue(':filling_mech', $filling_mech);
    $statement->bindValue(':ink_brand', $ink_brand);
    $statement->bindValue(':ink_color', $ink_color);
    $statement->bindValue(':date_filled', $date_filled);
    $statement->execute();
    $statement->closeCursor();
};
