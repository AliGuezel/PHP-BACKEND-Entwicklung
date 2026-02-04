<form action="mysqli_kundenauswahl.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <select name="zahl1">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <option><?= $i ?></option> 
        <?php endfor; ?>        
    </select>
    <select name="zahl2">
        <?php for ($i = 11; $i <= 20; $i++): ?>
            <option><?= $i ?></option> 
        <?php endfor; ?>        
    </select>
    <input type="submit" name="senden" value="Eintragen">
</form>
<?php
if (isset($_POST["senden"])) {
    $name = trim($_POST["name"]);
    $zahl1 = $_POST["zahl1"];
    $zahl2 = $_POST["zahl2"];

    try {
        if($name && $zahl1 && $zahl2) {
            $driver = new mysqli_driver();
            $driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'test';

            $mysqli = new mysqli($hostname, $username, $password, $database);
            $mysqli->begin_transaction();
            $query = 'INSERT INTO Kundenauswahl VALUES (null,?,?)';
            $stmt  = $mysqli->prepare($query);
            $zahl = $zahl1;
            $stmt->bind_param('si', $name, $zahl);
            $stmt->execute();
            $zahl = $zahl2;
            $stmt->execute();
            $mysqli->commit();
        } else {
            echo 'Alle Felder müssen ausgefüllt werden';          
        }
    } catch (mysqli_sql_exception $e) {
       $mysqli->rollback();
    }
}
?>

