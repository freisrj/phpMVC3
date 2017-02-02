<?php

/*
https://tableless.com.br/entendendo-o-padrao-mvc-na-pratica/

Seguimos algumas regras da PSR-4: primeiro registramos um namespace no composer.json que vai até o 
diretório src/App. Toda classe tem um namespace e o App do começo indica o diretório que registramos 
(src/App). O Mvc é o diretório seguinte (ficando src/App/Mvc) e a classe tem o mesmo nome do arquivo 
(src/App/Mvc/Controller.php). Com isso podemos carregar as classes dinamicamente.
*/


   require 'vendor/autoload.php';
   $controller = new App\Mvc\Controller();

   $controller->index();