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
        <title>index</title>
    </head>
    <body class="container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Telephone</th>
                <th colspan="2">Autres actions</th>
            </tr>
            <?php
                include 'dbconnexion.php';
                while($bdd = $rep -> fetch()){
                    echo '<tr><td>';
                    echo $bdd['id'];
                    echo '</td><td>';
                    echo $bdd['firstname'];
                    echo '</td><td>';
                    echo $bdd['lastname'];
                    echo '</td><td>';
                    echo $bdd['email'];
                    echo '</td><td>';
                    echo $bdd['tel'];
                    echo '</td><td>';
                    echo '<form action="edit.php" method="POST"><button name="edit" class="btn btn-primary" value="'.$bdd['id'].'">Editer</button></form>';
                    echo '</td><td>';
                    echo '<form action="delete.php" method="POST"><button name="delete" class="btn btn-primary" value="'.$bdd['id'].'">Supprimer</button></form>';
                    echo '</td></tr>';
                }
            ?>
        </table>
        <a class="btn btn-primary" href="create.php">Créer un nouveau</a>
    </body>
</html>