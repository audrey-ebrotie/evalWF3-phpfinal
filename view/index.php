<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionboard - Accueil</title>
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/style.css"; ?>">
    <script type="text/javascript" src="../public/js/index.js" defer></script>
</head>
<body>
    <?php include 'includes/header.php';?>
    <main>
        
    <h1>Tous les objets</h1>
        <div class="row">
        
            <table>
                <thead>
                    <th>Nom de l'objet</th>
                    <th>Propriétaire de l'objet</th>
                    <th>Mise minimum</th>
                </thead>
            <tbody>
                    <?php foreach ($items as $item) {?>
                        <tr>
                            <td><a href="<?php echo BASE_DIRECTORY . '/item?id=' . base64_encode($item['id']); ?>"><?php echo ($item['title']); ?></td>
                            <td>
                            
                            <?php 

                            foreach ($ownerNames as $ownerName) {
                                if($item['owner_id'] === $ownerName['id']){
                                echo htmlspecialchars($ownerName['username'] ?? NULL );     
                            }
                                } ?>
                            </td>

                            <td><?php echo htmlspecialchars($item['min_bid'] . ' €' ); ?></td>
                        </tr>
                    <?php }?>
            </tbody>
            </table>

        </div>
    
        <h1>Toutes les enchères</h1>
        <div class="row">
        
            <table>
                <thead>
                    <th>Nom de l'objet</th>   
                    <th>Date de l'enchère</th>
                    <th>Nombre de participants</th>
                    <th>Nom du gagnant</th>
                </thead>
            <tbody>
                    
            <?php
        for ($i=0; $i<3; $i++) {
            ?>
            <tr>
                <td><a href="<?php echo BASE_DIRECTORY . '/auction?id=' . base64_encode($auctionId['id']); ?>"><?php echo ($itemTitles[$i]['title']) ?? NULL; ?></td>
                <td class="auction_dates"><?php echo ($dates[$i]['date']) ?? NULL; ?></td>
                <td><?php echo ($registeredUsers[$i]['registered_users']) ?? NULL; ?></td>
                <td><?php echo ($usernames[$i]['username']) ?? NULL; ?></td>
            </tr>
            <?php
        }
        ?>

            </tbody>
            </table>

        </div>

        <h1>Tous les utilisateurs</h1>
        <div class="row">
        
            <table>
                <thead>
                    <th>Nom de l'utilisateur</th>
                    <th>Adresse email</th>
                </thead>
            <tbody>
                    <?php foreach ($users as $user) {?>
                        <tr>
                            <td><?php echo ($user['username']); ?></td><a href="<?php echo BASE_DIRECTORY . '/user?id=' . base64_encode($user['id']); ?>">
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                        </tr>
                    <?php }?>
            </tbody>
            </table>
            </div>

    </main>
    <?php include 'includes/footer.php';?>
</body>
</html>