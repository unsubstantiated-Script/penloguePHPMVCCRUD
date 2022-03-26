<?php
class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Allows us to write queries
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Return an array
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return a specific row as an object
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get's the row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}





// // grabbing Post stuff
// if (isset($_POST['save'])) {
//     $pen_brand = filter_input(INPUT_POST, 'pen-brand');
//     $pen_name = filter_input(INPUT_POST, 'pen-name');
//     $pen_color = filter_input(INPUT_POST, 'pen-color');
//     $nib = filter_input(INPUT_POST, 'nib');
//     $filling_mech = filter_input(INPUT_POST, 'filling-mech');
//     $ink_brand = filter_input(INPUT_POST, 'ink-brand');
//     $ink_color = filter_input(INPUT_POST, 'ink-color');
//     $date_filled = filter_input(INPUT_POST, 'date-filled');

//     //echo nl2br("$pen_brand \n $pen_name \n $pen_color \n $nib \n $filling_mech \n $ink_brand \n $ink_color \n $date_filled");
//     $query = "INSERT INTO pendata(penBrand, penName, penColor, nib, fillingMech, inkBrand, inkColor, dateFilled) VALUES(:pen_brand,:pen_name, :pen_color, :nib, :filling_mech, :ink_brand, :ink_color, :date_filled)";
//     $statement = $db->prepare($query);
//     $statement->bindValue(':pen_brand', $pen_brand);
//     $statement->bindValue(':pen_name', $pen_name);
//     $statement->bindValue(':pen_color', $pen_color);
//     $statement->bindValue(':nib', $nib);
//     $statement->bindValue(':filling_mech', $filling_mech);
//     $statement->bindValue(':ink_brand', $ink_brand);
//     $statement->bindValue(':ink_color', $ink_color);
//     $statement->bindValue(':date_filled', $date_filled);
//     $statement->execute();
//     $statement->closeCursor();
// };
