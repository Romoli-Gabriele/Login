<!DOCTYPE html>
<html>

<head>
    <title>
        Riepilogo dati
    </title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</head>

<body>
    <?php

    echo "
    <br>
        <div class='card bg-secondary  bg-gradient mx-auto' style='width: 35rem; color:white;'>
    <div class='card-header'>
        Modulo di iscrizione
    </div>
    <ul class='list-group list-group-flush'>
        <li class='list-group-item bg-secondary' style='color:white;'>
                <div class='row mb-3'>
                    <label for='inputSurname' class='col-sm-4 col-form-label'>Cognome:</label>
                    <div class='col-sm-7'>
                        <b>$_POST[surname]</b>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='inputName' class='col-sm-4 col-form-label'>Nome:</label>
                    <div class='col-sm-7'>
                    <b>$_POST[name]</b>
                    </div>
                </div>
                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-4 pt-0'>Sesso:</legend>
                    <div class='col-sm-7'>
                        <div class='form-check'>
                            <b>$_POST[genere]</b>
                        </div>
                    </div>
                </fieldset>
                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-4 pt-0'>Nazionalità</legend>
                    <div class='col-sm-7'>
                    <b>$_POST[nazionalita]</b>
                    </div>
                </fieldset>
                <fieldset class='row mb-3'>
                    <legend class='col-form-label col-sm-4 pt-0'>Patente:</legend>
                    <div class='col-sm-7 offset-sm-1'>
                    <b>$_POST[patente]</b>
                    </div>
                </fieldset>
                <div class='row mb-3'>
                    <label for='inputEmail' class='col-sm-4 col-form-label'>e-Mail:</label>
                    <div class='col-sm-7'>
                    <b>$_POST[mail]</b>
                    </div>
                </div>
        </li>
        <li class='card-header'>
            <a  href='index.php'><button class='btn btn-secondary' >Correggi</button></a>
            <button class='btn btn-success' onclick='Registra' >Registra</button>
        </li>
    </ul>
        </div>
        ";
    session_start();
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["genere"] = $_POST["genere"];
    $_SESSION["nazionalita"] = $_POST["nazionalita"];
    $_SESSION["patente"] = $_POST["patente"];
    $_SESSION["mail"] = $_POST["mail"];
    $_SESSION["password"] = $_POST["password"];

    echo $_SESSION["surname"];
    ?>
</body>

</html>