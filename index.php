<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT-Esercizio-21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
    <div class="container text-center position-absolute top-50 start-50 translate-middle" style="max-width: 500px;">
        <div class="row row-cols-1">
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <form action="ricercaAeroporti.php" method="POST">
                            <div class="form-floating mb-3">
                                <input name="nomeNazione" type="text" class="form-control" id="nomeNazione">
                                <label for="nomeNazione">Inserisci il nome della nazione</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Cerca</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="ricercaPerGiorno.php" method="POST">
                            <div class="form-floating mb-3">
                                <input name="dataPartenza" type="date" class="form-control" id="dataPartenza">
                                <label for="dataPartenza">Inserisci la data della partenza</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Cerca</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>