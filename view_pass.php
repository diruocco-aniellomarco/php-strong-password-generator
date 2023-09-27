<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title> Pass </title>
</head>
<body>
    <div class="text-center">
        <?php if($_SESSION['pass'] != ''): ?>
            <div class="text-center">
                <p>La sua password è: </p>
                <p class=' text-danger'><?php echo $_SESSION['pass'] ?></p>
            </div>        
        <?php endif?>
        <form action="./index.php">
            <button>Tona indietro</button>
        </form>

    </div>

</body>
</html>