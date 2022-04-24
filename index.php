<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="conteiner">
        <main class="container">
            <div class="bg-light p-5 rounded">
              <h1>SWAPI</h1>
              <h2>The Star Wars API</h1>
              <h3>(what happened to swapi.co?)</h3>
              <code>Aqui iremos realizar o uso da comunicação e manipulação com a API SWAPI</code>
              <br/>
              <br/>

            <?php

               //Conectando à API.
               $url = "https://swapi.dev/api/people/";
               $ch  = curl_init($url);//Usando a funlçao curl para interpretar a url.
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
               $resultado = json_decode(curl_exec($ch));//Transformando dados recebido num formato json

               //Percorrendo o array resultado
               foreach ($resultado -> results as $ator) {
                   echo "Nome: ".$ator->name."<br/>";
                   echo "Altura: ".$ator->height."<br/>";
                   foreach ($ator->films as $filme) {
                    echo "Filme : ".$filme."<br/>";
                    }
                   echo "<hr>";
               }

            ?>

            </div>
          </main>
    </div>
    <br>


   
</body>
</html>