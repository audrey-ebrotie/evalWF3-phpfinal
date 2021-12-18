<?php

class ItemController
{
    public function showItem()
    {
        $itemModel = new Item();

        $item = $itemModel->getItem(base64_decode($_GET['id']));

        include '../' . VIEW_DIRECTORY . '/item.php';
    }

    public function addItem()
    {

        include '../' . VIEW_DIRECTORY . '/add_item.php';
    }

    public function addItemPost()
    {
        $itemModel = new Item();
        $response = $itemModel->addItem($_POST);

        if ($response === true) {
        $message = ['type' => 'successfull', 'message' => 'Le jeu a été ajouté avec succès.'];
        }
            
        else {
        $message = ['type' => 'error', 'message' => 'Vous devez renseigner tous les champs.'];
        }
        
    include '../' . VIEW_DIRECTORY . '/add_item.php';   
    }      
}



