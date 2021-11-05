<!DOCTYPE html>
<html>

<head>
    <title>
        Riepilogo dati
    </title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</head>

<body>
    <?php
        session_start();
        
        echo"
        <div class='card .bg-warning' style='width: 18rem;'>
        <div class='card-header'>
            Esito registrazione
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'>Dati correttamente registrati</li>
        </ul>
        <div class=0'card-footer'>
            <a href='index.php'><button type='button' class='btn btn-light mx-auto'>Light</button></a>
        </div>
      </div>";


    ?>
</body>

</html>