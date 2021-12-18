<?php

class Model {

    public function connect() {
        $bdd = new PDO('mysql:host=' . HOST_DATABASE . ';dbname=' . NAME_DATABASE . ';charset=utf8',
            USER_DATABASE,
            PASSWORD_DATABASE,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );

        return $bdd;
    }
}