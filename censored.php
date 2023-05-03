<?php
    $notEmpty = false;
    $lenght = 0;
    if(!empty($_POST['word']) && !empty($_POST['content'])){
        $notEmpty = true;
        $content = $_POST['content'];
        $word = $_POST['word'];
        $length = strlen($content);
    };
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bad Words</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>
    <div class="wrapper container d-flex flex-column justify-content-center align-items-center">
    <header class="text-center pb-5">
        <?php if ($notEmpty): ?>
            <h1>Ecco i tuoi risultati</h1>
        <?php else: ?>
            <h1  class="text-danger">Errore</h1>
        <?php endif ?>
    </header>
   <main>
   <?php if ($notEmpty): ?>
            <span>Lunghezza della stringa: <?php echo $length ?></span>
        <?php else: ?>
            <span>Inserisci un paragrafo e una parola da censurare.</span>
        <?php endif ?>
  
        <?php if ($notEmpty): ?>
           <div>
            <span><?php if ($notEmpty) echo 'Contenuto censurato:'?> </span>
            <p><?php  echo str_replace($word, '***', $content); ?></p>
           </div>
        <?php endif ?>
        <div class="text-center mt-3">
            <a class="btn btn-primary" href='index.php'>Torna alla home</a>
        </div>
   </main>
    </div>
  </body>
</html>