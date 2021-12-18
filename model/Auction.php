<?php

class Auction extends Model {
    
    public function getDate() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT date FROM auction');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsername() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT username FROM `user` WHERE id IN ( SELECT winner_id FROM auction )');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getItemTitle() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT title, id FROM item WHERE id IN (SELECT item_id FROM auction)');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRegisteredUser() {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT registered_users FROM auction');

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addAuction(array $dataAuction) {
        $bdd = $this->connect();

        $query = $bdd->prepare('INSERT INTO auction (item_id, date) VALUES (:item_id, :date)');

        $response = $query->execute($dataAuction);

        return $response;
    }
    
    public function getAuctionId(int $id) {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT id FROM auction WHERE id = :id');

        $response = $query->execute([
            'id' => $id
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

}