<?php

class Item extends Model {
    
    public function getItems() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT * FROM item');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getItem(int $id) {
        $bdd = $this->connect();

        $query = $bdd->prepare('SELECT * FROM item WHERE id = :id');

        $response = $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }

    public function addItem(array $dataItem) {
        $bdd = $this->connect();

        $query = $bdd->prepare('INSERT INTO item (title, min_bid) VALUES (:title, :min_bid)');

        $response = $query->execute($dataItem);

        return $response;
    }

    public function selectItem() {
        $bdd = $this->connect();

        $query = $bdd->query("SELECT id, title FROM item");

        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        return $response;
    }

    public function getOwnerName() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT username, id FROM user WHERE id IN (SELECT owner_id FROM item)');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}