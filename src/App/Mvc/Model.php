<?php

/*

Model é onde fica a lógica da aplicação. Só isso.

Vai disparar um e-mail? Validar um formulário? Enviar ou receber dados do banco? Não importa. 
A model deve saber como executar as tarefas mais diversa, mas não precisa saber quando deve ser feito, 
nem como mostrar estes dados.
*/

   namespace App\Mvc;
   class Model
   {
      public function getText($str = 'Olá mundo!')
      {
         return $str;
      }
   }