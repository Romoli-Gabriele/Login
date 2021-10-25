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
    <div class="card bg-primary  bg-gradient mx-auto" style="width: 40rem; color:white;">
        <div class="card-header">
            Modulo di iscrizione
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-primary" style="color:white;">
                <form method="POST" action="">
                    <div class="row mb-3">
                        <label for="inputSurname" class="col-sm-2 col-form-label">Cognome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSurname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Sesso:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Maschile
                                </label>
                                <input class="" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Femminile
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Nazionalità</legend>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Italiana</option>
                                <option value="1">Americana</option>
                                <option value="2">Spagnola</option>
                                <option value="3">Francese</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Patente:</legend>
                        <div class="col-sm-9 offset-sm-1">
                            <input class="" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                cat. A
                            </label>
                            <input class="" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                cat. B
                            </label>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">e-Mail:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputMail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </form>



            </li>
            <li class="card-header">
                <button type="reset" class="btn btn-secondary">Annulla</button>
                
                <button type="submit" class="btn btn-danger">Conferma</button>
            </li>
        </ul>
    </div>

</body>

</html>