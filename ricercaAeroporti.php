<?php
$db = new PDO("mysql:host=localhost;dbname=ItEsercizio21", "root", "");
$query = $db->prepare("SELECT a.nome, a.via, a.citta FROM aeroporti as a WHERE a.nazione = :nazione");
$query->bindParam(":nazione", $_POST['nomeNazione'], PDO::PARAM_STR);
$query->execute();
$aeroporti = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT-Esercizio-21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
    <div class="container text-center position-absolute top-50 start-50 translate-middle" style="max-width: 800px;">
        <div class="row row-cols-1">
            <div class="col">
                <h1>Aeroporti in <?php echo $_POST['nomeNazione'] ?></h1>
                <table class="table table-striped">
                    <thead>
                        <th>Nome</th>
                        <th>Citta</th>
                        <th>Via</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aeroporti as $aeroporto) {
                            echo '<tr>
                        <td>' . $aeroporto['nome'] . '</td>
                        <td>' . $aeroporto['citta'] . '</td>
                        <td>' . $aeroporto['via'] . '</td>
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>