<?php
$routes = [
    '/accueil' => 'HomeController@showHome',
    '/enchere' => 'AuctionController@showAuction',
    '/ajout/objet/valide' => 'ItemController@addItemPost',
    '/ajout/objet' => 'ItemController@addItem',
    '/ajout/utilisateur/valide' => 'UserController@addUserPost',
    '/ajout/utilisateur' => 'UserController@addUser',
    '/ajout/enchere/valide' => 'AuctionController@addAuctionPost',
    '/ajout/enchere' => 'AuctionController@addAuction',
];
