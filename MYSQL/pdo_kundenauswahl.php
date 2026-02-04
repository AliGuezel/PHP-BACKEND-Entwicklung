<form action="pdo_kundenauswahl.php" method="post">
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

    if($name && $zahl1 && $zahl2) {
        try {
            $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
            $username = 'root';
            $password = '';

            $pdo = new PDO($dsn, $username, $password);
            $pdo->beginTransaction();
            $query = "INSERT INTO Kundenauswahl VALUES (NULL,:name,:zahl)";
            $stmt = $pdo->prepare($query);
            $zahl = $zahl1;
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':zahl', $zahl, PDO::PARAM_INT);
            $stmt->execute();
            $zahl = $zahl2;
            $stmt->execute();
            $pdo->commit();
        } catch (PDOException $e) {
            $pdo->rollBack();    
        }
    } else {
        echo "Alle Felder müssen ausgefüllt werden";        
    }
}


