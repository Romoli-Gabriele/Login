<!DOCTYPE html>
<html>

<head>
    <title>
        Benvenuto
    </title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</head>

<body>
    <?php
    session_start();
    if($_SESSION["mail"]== $_POST["email"] && $_SESSION["password"]== $_POST["password"]){
        echo'<h1>Log-in avvenuto con successo</h1>';
        session_destroy();
    }else{
        echo'<h1>Email o password sbagliate</h1>
        <br>
        <a href="index.php">Torna al Log-in</a>
        ';

    }
    ?>

</body>
</html>