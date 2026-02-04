<?php

namespace system;

require_once 'DatabaseInterface.php';

class Database extends \PDO implements DatabaseInterface {
    
    public function __construct() {
        $cfg = Config::getInstance();
        // $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
        $dsn = $cfg->get('adapter').':host='.$cfg->get('host')
                .';dbname='.$cfg->get('dbname').';charset='.$cfg->get('charset');
        $username = $cfg->get('username');
        $password = $cfg->get('password');
        parent::__construct($dsn, $username, $password);
    }
    
    public function delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        return $this->exec($query);
    }

    public function get($table): array {
        $query = "SELECT * FROM $table";
        $stmt  = $this->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getWhere($table, $where): array {
        $query = "SELECT * FROM $table WHERE $where";
        $stmt  = $this->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
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
