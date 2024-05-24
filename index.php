<?php

if(isset($_GET["email"])) {
    if(empty($_GET["email"])) {
        $error = "Inserisci email";
    } 
}

$email = $_GET["email"];
?>
<?php require_once __DIR__ . "/partials/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
        <?php echo $error ?>
        </div>
        <?php } ?>
    <form class="form-floating container mt-5 pe-3" action="index.php" method="POST">
        <input type="text" class="form-control" name="email" placeholder="name@example.com" value="test@example.com">
        <label for="floatingInputValue ps-5">Scrivi la tua mail</label>
        <button type="submit" class="btn btn-primary mt-3">Accedi</button>
    </form>
    <div class="container mt-3 alert alert-danger">

    <?php check_dot_snail($email)
    ?>

    </div>
</body>
</html>