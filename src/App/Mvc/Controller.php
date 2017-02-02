<?php


/*
O controller diz quando as coisas devem acontecer. Só isso.

É usado para intermediar a model e a view de uma camada. 
Por exemplo, para pegar dados da model (guardados em um banco) e exibir na view (em uma página HTML), 
ou pegar os dados de um formulário (view) e enviar para alguém (model). Também é responsabilidade do 
controller cuidar das requisições (request e response) e isso também inclui os famosos middlewares 
(Laravel, Slim Framework, Express, Ruby on Rails, etc.). O controller não precisa saber como obter os 
dados nem como exibi-los, só quando fazer isso.
*/

   namespace App\Mvc;

   class Controller
   {
      //os métodos públicos de um Controller são chamados de actions.
      public function index()
      {
         $model = new Model;
         $view = new View;
         $view->render($model->getText());
      }
   }