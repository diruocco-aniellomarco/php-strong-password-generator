<?php 

include __DIR__.'./functions.php';
    // Lista caratteri da usare in versione unica stringa
    $charsList = 'A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z 0 1 2 3 4 5 6 7 8 9 ! @ # $ % ^ & * ( )';
    
    // creo un array dove in ogni indice ci sarà un carattere
    $character = explode(" ", $charsList);
    // var_dump($character);
    session_start();
    $_SESSION['pass'] ='';
    $pass_request = !empty($_GET['passChars']);
    
    if($pass_request){
        $requestNumChars = (int)$_GET['passChars'];
        
        $_SESSION['pass'] = gen_pass($requestNumChars, $character);
        if($_SESSION['pass']) {
            header('Location: ./view_pass.php');
        }
    };
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header ">
                <h2>Crea una password</h2>
                <p>Di quanti caratteri vuoi che sia?</p>
                <p>puoi scegliere un numero da 5 a 15</p>
            </div>
            <div class="card-body">
                
                <form>
                <label for="passChars"></label>
                <!-- se c'è una richiesta get, allora assegna al valore il valore della richiesta  -->
                <input 
                    type="number" 
                    name="passChars" id="passChars" 
                    min="5" max="15" step="1" 
                    value="<?php echo ($pass_request) ? $requestNumChars : '10' ?>">
                <!-- se c'è una richiesta get, allora nel pulsante verrà scritto "genera nuova mail"  -->
                <button><?php echo ($pass_request) ? 'Genera nuova mail' : 'Crea mail' ?></button>
                
                </form>
            </div>
        </div>
        <!-- <?php if($_SESSION['pass'] != ''): ?>
        <div class="text-center">
            <p>La sua password è: </p>
            <p><?php echo $_SESSION['pass'] ?></p>
        </div>        
        <?php endif?> -->
    </div>
    
</body>
</html>