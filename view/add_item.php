<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionboard - Ajouter un objet</title>
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/add_style.css"; ?>">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
    
    <?php if (isset($message)) {?>
        <p class='<?php echo $message['type']; ?>'><?php echo $message['message'] ?></p>
    <?php }?>

        <h1>Ajouter un objet</h1>
        <form action="<?php echo BASE_DIRECTORY . '/ajout/objet/valide'; ?>" method="post">
            <div>
                <label for="title">Nom de l'objet</label>
                <input type="text" name="title" id="title" required>

                <label for="min_bid">Mise minimum €</label>
                <input type="number" name="min_bid" id="min_bid" col="80" row="4" min="2" max="20" required></input>
                
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </main> 
    <?php include 'includes/footer.php';?>
</body>
</html>