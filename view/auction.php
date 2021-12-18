<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionboard - Détail d'une enchère</title>
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/style.css"; ?>">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Détail de l'enchère - <?php echo ($itemTitle[0]['title']); ?></h1>
        <div class="row">
            <div>
                <p>Object de l'enchère : <?php echo ($itemTitle[0]['title']); ?></p>
                <p class="auction_dates">Date de l'enchère : <?php echo ($date[0]['date']); ?></p>
                <p>Nombre d'utilisateurs inscrits : <?php echo ($registeredUser[0]['registered_users']); ?></p>
                <p>Nom du gagant : <?php echo ($username[0]['username']); ?></p>
            </div>
        </div>
    </main> 
    <?php include 'includes/footer.php'; ?>
</body>
</html>