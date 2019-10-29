<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>Store</title>
    </head>
    <body class="container">
        <form action="index.php">
            <?php
                include 'dbconnexion.php';
                $firstname= $_POST['firstname'];
                $lastname =$_POST['lastname'];
                $email= $_POST['email'];
                $tel= $_POST['tel'];
                $cnx->exec("INSERT INTO students (firstname,lastname,email,tel) VALUES ('$firstname','$lastname','$email','$tel')");
                echo "Ajout effectuée avec succées !! " ;
                echo' <button type="submit" class="btn btn-primary" >revenir page index</button>';
            ?>
        </form>
    </body>
</html>