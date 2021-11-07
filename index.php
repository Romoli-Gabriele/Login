<!DOCTYPE html>
<html>

<head>
    <title>
        Login
    </title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</head>

<body>
    <div class="mx-auto card" style="width: 25rem;">
    <h1 class="mx-auto">Log-in</h1>
    <form action="benvenuto.php" method="POST">
        <div class="col-sm-7 mx-auto">
            <input class="form-control" type="email" name="email" placeholder="*Email"><br>
        </div>
        <div class="col-sm-7 mx-auto">
            <input class="mx-auto form-control" type="password" name="password" placeholder="*Password">
        </div>
        <br>
        <div class="mx-auto">
        <button class="mx-auto" type="submit">Log-in</button>
        </div>
    </form>
    <br>
    <p class="mx-auto">Non hai un account? <a href="registrati.php">Registrati</a></p>
    </div>
    

</body>
</html>