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
        <h1>
            Ciao
        </h1>
        <h3>Inserisci la parola da censurare e il contenuto.</h3>
    </header>
   <main>
   <form action="censored.php" method='POST'>
        <div class="mb-3">
                <span>Censura</span>
                <input class="form-control" name='word' />
            </div>
            <div>
                <span>Contenuto</span>
                <textarea class="form-control" name='content'></textarea>
            </div>
            <div class="text-center py-4" >
            <button class="btn btn-primary w-100">Invia</button>
            </div>
            
        </form>
   </main>
    </div>
  </body>
</html>