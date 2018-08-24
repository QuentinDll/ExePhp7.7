<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <p>
        <?php
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender']) && !empty($_POST['file'])){
            $_FILES['userfile']['name'];
            echo  $_POST['gender'] ." ". $_POST['firstname'] ." ". $_POST['lastname'] ." a envoyer ". $_POST['file'];
        }else{
        ?>
        </p>
        <form action="index.php" method="post">
            <label for="firstname">Nom: </label>
            <input type="text" name="firstname" id="firstname" /><br />
            
            <label for="lastname">Prénom: </label>
            <input type="text" name="lastname" id="lastname" /><br />
            
            <label for="gender">Genre</label>
            <select name="gender" id="gender">
                <option selected disabled>Genre</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select><br />
            
            <label for="file">Fichier: </label>
            <input type="file" id="file" /><br />
            
            <input type="submit" name="submit" value="Send" />
        </form>
        <p>
        <?php
        }
        // fermeture du else aprés le form pour le cacher si 
        ?>
        </p>
    </body>
</html>
