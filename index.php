<!DOCTYPE html>
<html>

<head>
    <title>
        Login Menu
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <br>
    <div class="card bg-primary  bg-gradient mx-auto" style="width: 25rem; color:white;">
        <div class="card-header">
            Modulo di iscrizione
        </div>
        <ul class="list-group list-group-flush">
            <form method="POST" action="riepilogo.php">
                <li class="list-group-item bg-primary" style="color:white;">

                    <div class="row mb-3">
                        <label for="inputSurname" class="col-sm-4 col-form-label">Cognome:</label>
                        <div class="col-sm-7">
                            <input type="text" style="width: 12rem; margin: 0" class="form-control" name="surname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-4 col-form-label">Nome:</label>
                        <div class="col-sm-7">
                            <input type="text" style="width: 12rem; margin: 0" class="form-control" name="name">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-4 pt-0">Sesso:</legend>
                        <div class="col-sm-7">
                            <div class="form-check">
                                <input class="" type="radio" name="genere" id="gridRadios1" value="Maschile"
                                    checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Maschile
                                </label>
                                <input class="" type="radio" name="genere" id="gridRadios2" value="Femminile">
                                <label class="form-check-label" for="gridRadios2">
                                    Femminile
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-4 pt-0">Nazionalità</legend>
                        <div class="col-sm-7">
                            <select class="form-select"  style="width: 12rem; margin: 0" aria-label="Default select example" name="nazionalita">
                                <option selected value="Italiana">Italiana</option>
                                <option value="Americana">Americana</option>
                                <option value="Spagnola">Spagnola</option>
                                <option value="Francese">Francese</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-4 pt-0">Patente:</legend>
                        <div class="col-sm-7 offset-sm-1">
                            <input class="" type="checkbox" id="gridCheck1" name="patente" value="categ. A">
                            <label class="form-check-label" for="gridCheck1">
                                cat. A
                            </label>
                            <input class="" type="checkbox" id="gridCheck2" name="patente" value="categ. B">
                            <label class="form-check-label" for="gridCheck2" >
                                cat. B
                            </label>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-4 col-form-label">e-Mail:</label>
                        <div class="col-sm-7">
                            <input type="email"  style="width: 12rem; margin: 0" class="form-control" id="inputMail" name="mail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-4 col-form-label">Password:</label>
                        <div class="col-sm-7">
                            <input type="password"  style="width: 12rem; margin: 0" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>




                </li>
                <li class="card-header">
                    <button type="reset" class="btn btn-secondary">Annulla</button>

                    <button type="submit" class="btn btn-danger">Conferma</button>
                </li>
            </form>
        </ul>
    </div>

</body>

</html>