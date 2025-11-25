<!DOCTYPE html>
<html lang="hr">
<head>
    <title>Bootstrap u PHP-u - LAB7 Zadatak 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-4">
    <h1 class="text-primary mb-4">Ovo je bootstrap stranica</h1>
    <p class="lead">Ovo je neki paragraf unutar Bootstrap container-a.</p>

    <div class="card mt-4">
        <div class="card-header bg-info text-white">
            Primjer forme uređene Bootstrapom
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="ime">Ime</label>
                    <input type="text" class="form-control" id="ime" name="ime"
                           placeholder="Unesite ime">
                </div>

                <div class="form-group">
                    <label for="poruka">Poruka</label>
                    <textarea class="form-control" id="poruka" name="poruka"
                              rows="3" placeholder="Unesite poruku"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Pošalji</button>
            </form>
        </div>
    </div>

    <?php
    if (!empty($_POST['ime']) || !empty($_POST['poruka'])) {
        echo '<div class="alert alert-success mt-3">';
        echo 'Zaprimljeno: <strong>' . htmlspecialchars($_POST['ime'] ?? '') . '</strong> - ';
        echo htmlspecialchars($_POST['poruka'] ?? '');
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
