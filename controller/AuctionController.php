<?php

class AuctionController
{
    public function addAuction()
    {
        $itemModel = new Item();

        $itemTitles = $itemModel->selectItem();

        include '../' . VIEW_DIRECTORY . '/add_auction.php';
    }

    public function addAuctionPost()
    {
        $auctionModel = new Auction();

        $response = $auctionModel->addAuction($_POST);

        if ($response === true) {
            $message = ['type' => 'successfull', 'message' => 'L\'enchère a été ajoutée avec succès.'];
        } else {
            $message = ['type' => 'error', 'message' => 'Echec de l\'ajout de l\'enchère.'];
        }

        include '../' . VIEW_DIRECTORY . '/add_auction.php';
    }

    public function showAuction()
    {
        $auctionModel = new Auction();
        $itemTitle = $auctionModel->getItemTitle();

        $auctionModel = new Auction();
        $date = $auctionModel->getDate();

        $auctionModel = new Auction();
        $username = $auctionModel->getUsername();

        $auctionModel = new Auction();
        $registeredUser = $auctionModel->getRegisteredUser();

        include '../' . VIEW_DIRECTORY . '/auction.php';
    }

}
