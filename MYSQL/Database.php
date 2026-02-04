<?php
//Aufgabe:
//Schreiben Sie die Klasse "Database". Die Klasse Database soll eine Kindklasse der PDO-Klasse sein. 
//Programmieren Sie die Methoden aus dem nachfolgenden Interface. 

interface DatabaseInterface {
    /**
     * Trägt einen Datensatz ein
     * @param string $table Tabelle
     * @param array $data Datenarray, die Schlüssel sind die Spaltennamen 
     */
    public function insert($table, array $data);
    /**
     * Löscht einen oder mehrere Datensätze
     * @param string $table Tabelle
     * @param string $where Where-Klausel
     */
    public function delete($table, $where);
    /**
     * Aktualisiert einen Datensatz
     * @param string $table Tabelle
     * @param array $data Datenarray, die Schlüssel sind die Spaltennamen
     * @param string $where Where-Klausel
     */
    public function update($table, array $data, $where);
    /**
     * Liefert alle Datensätze einer Tabelle zurück (Hinweis: Methode fetchAll() nutzen)
     * @param string $table Tabelle
     * @return array Assoziatives Result-Array
     */
    public function get($table);
    /**
     * Liefert bestimmte Datensätze einer Tabelle zurück (Hinweis: Methode fetchAll() nutzen)
     * @param string $table Tabelle
     * @param string $where Where-Klausel
     * @return array Assoziatives Result-Array
     */
    public function getWhere($table, $where);
}

class Database extends PDO implements DatabaseInterface {
    
    public function delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        return $this->exec($query);
    }

    public function get($table): array {
        $query = "SELECT * FROM $table";
        $stmt  = $this->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWhere($table, $where): array {
        $query = "SELECT * FROM $table WHERE $where";
        $stmt  = $this->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, array $data) {
        // INSERT INTO news (title,slug,text) VALUES (:title,:slug,:text)
        foreach ($data as $key => $value) {
            $cols[] = $key;
            $placeholder[] = ':'.$key;
            $values[] = $value;
        }
        $query = "INSERT INTO $table (".implode(',',$cols).") VALUES (".implode(',',$placeholder).")";
        $stmt = $this->prepare($query);
        foreach ($values as $key => $value) {
            $stmt->bindParam($placeholder[$key], $values[$key]);
        }
        return $stmt->execute();
    }

    public function update($table, array $data, $where) {
        // UPDATE news SET title=:title,slug=:slug WHERE id=18
        foreach ($data as $key => $value) {
            $set[] = $key.'=:'.$key;
            $placeholder[] = ':'.$key;
            $values[] = $value;
        }
        $query = "UPDATE $table SET ". implode(',', $set)." WHERE $where";
        $stmt = $this->prepare($query);
        foreach ($values as $key => $value) {
            $stmt->bindParam($placeholder[$key], $values[$key]);
        }
        return $stmt->execute();
    }

}
