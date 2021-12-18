<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionboard - Ajouter un utilisateur</title>
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/add_syle.css"; ?>">
</head>
<body>
    <?php include 'includes/header.php';?>
    <main>

    <?php if (isset($message)) {?>
        <p class='<?php echo $message['type']; ?>'><?php echo $message['message'] ?></p>
    <?php }?>
    
        <h1>Ajouter un utilisateur</h1>
        <form action="<?php echo BASE_DIRECTORY . '/ajout/utilisateur/valide'; ?>" method="post">
            <div>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username">
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <input type="submit" value="Ajouter">
            </div>
        </form>
    </main>
    <?php include 'includes/footer.php';?>
</body>
</html>