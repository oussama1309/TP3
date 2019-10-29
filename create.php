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
        <title>Create</title>
    </head>
    <body class="container">
        <form action="store.php" method="post">
            <div class="form-group">
                <label for="firstname">First Name : </label>
                <input type="text" class="form-control" name="firstname" id="firstname"><br>
                <label for="lastname">Last name :</label>
                <input type="text" class="form-control" name="lastname" id="lastname"><br>
                <label for="email">E-mail :</label>
                <input type="text" class="form-control" name="email" id="email"><br>
                <label for="tel">Telephone : </label>
                <input type="tel" class="form-control" name="tel" id="tel"><br>
                <input type="submit"  class="btn btn-primary" value="Ajouter">
                <input type="reset" class="btn btn-primary" value="Effacer">
            </div>
        </form>
    </body>
</html>