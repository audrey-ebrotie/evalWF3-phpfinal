<?php

class User extends Model
{

    public function getUsers()
    {
        $bdd = $this->connect();

        $query = $bdd->query('SELECT * FROM user');

        return $query->fetchAll();
    }

    public function getUser(int $id)
    {
        $bdd = $this->connect();

        $query = $bdd->prepare('SELECT * FROM user WHERE id = :id');

        $response = $query->execute([
            'id' => $id,
        ]);

        return $query->fetch();
    }

    public function addUser(array $dataUser)
    {
            $bdd = $this->connect();

            $query = $bdd->prepare('INSERT INTO user (email, username) VALUES (:email, :username)');

            $response = $query->execute($dataUser);

            return $response;
            }
}
