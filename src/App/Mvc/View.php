<?php

/*
View exibe os dados. Só isso.

View não é só o HTML, mas qualquer tipo de retorno de dados, como PDF, Json, XML, o retorno dos dados do 
servidor RESTFull, os tokens de autenticação OAuth2, entre outro. Qualquer retorno de dados para uma 
interface qualquer (o navegador, por exemplo) é responsabilidade da view. A view deve saber renderizar os 
dados corretamente, mas não precisa saber como obtê-los ou quando renderizá-los.
*/

   namespace App\Mvc;
   class View
   {
      public function render($str)
      {
         echo 'esse é o texto recebido: '.$str;
      }
   }