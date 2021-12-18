<?php

class HomeController
{
    public function showHome()
    {       
        $userModel = new User();
        $users = $userModel->getUsers();

        $itemModel = new Item();
        $items = $itemModel->getItems();

        $itemModel = new Item();
        $ownerNames = $itemModel->getOwnerName();

        $auctionModel = new Auction();
        $dates = $auctionModel->getDate();

        $auctionModel = new Auction();
        $usernames = $auctionModel->getUsername();

        $auctionModel = new Auction();
        $itemTitles = $auctionModel->getItemTitle();

        $auctionModel = new Auction();
        $registeredUsers = $auctionModel->getRegisteredUser();
        
        // $auctionModel = new Auction();
        // $auctionId = $auctionModel->getAuctionId(base64_decode($_GET['id']));

        $max = max(sizeof($dates), sizeof($usernames), sizeof($itemTitles));

        include '../' . VIEW_DIRECTORY . '/index.php';
    }

}