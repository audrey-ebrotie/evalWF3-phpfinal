<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctionboard - Ajouter une enchère</title>
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_DIRECTORY . "css/add_style.css"; ?>">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>

    <?php if (isset($message)) {?>
        <p class='<?php echo $message['type']; ?>'><?php echo $message['message'] ?></p>
    <?php }?>

        <h1>Ajouter une enchère</h1>

        <form action="<?php echo BASE_DIRECTORY . '/ajout/enchere/valide'; ?>" method="post">
            
            <div>
                <label for="title">Sélectionnez un objet</label>
                <select name="item_id" id="item_id">
                <?php 
                    for($i=0; $i < sizeof($itemTitles); $i++) {
                        ?> 
                        <option value="<?php echo($itemTitles[$i]["id"]) ?>"><?php echo($itemTitles[$i]["title"]) ?></option>
                        <?php
                        }
                        ?>
                </select>

                <label for="date">Date de l'enchère</label>
                <input type="date" name="date" id="date" col="80" row="4" min="<?php echo date('Y-m-d'); ?>" />
                
                <input type="submit" value="Ajouter">
            </div>

        </form>
    
    </main> 
    <?php include 'includes/footer.php';?>
</body>
</html>