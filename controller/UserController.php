<?php

class UserController
{
    public function showUser()
    {
        $userModel = new User();

        $user = $userModel->getUser(base64_decode($_GET['id']));

        include '../' . VIEW_DIRECTORY . '/user.php';
    }

    public function addUser()
    {

        include '../' . VIEW_DIRECTORY . '/add_user.php';
    }

    public function addUserPost()
    {
            if (!empty($_POST['username']) && !empty($_POST['email'])) {
                $userModel = new User();
                $response = $userModel->addUser($_POST);

            if ($response === true) {
                $message = ['type' => 'successfull', 'message' => 'Le joueur a été ajouté avec succès.'];
            } else {
                $message = ['type' => 'error', 'message' => 'Echec de l\'ajout du joueur.'];
            }

        } else {
            $message = ['type' => 'error', 'message' => 'Tous les champs doivent obligatoirement être renseignés.'];
        }

        include '../' . VIEW_DIRECTORY . '/add_user.php';
    }

}
