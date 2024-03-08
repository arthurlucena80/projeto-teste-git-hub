<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
      
  
      
        <input type="text"placeholder="digite seu nome">
        <hr>
        Primeiro Nota: <input name="num1" type="text"><br>
        <hr>
        Segundo nota: <input name="num2" type="text"><br>
        <hr>
        <input type="submit" name="operacao" value="+">
        <input type="submit" name="operacao" value="/">  


    </form>
    
    <?php
   

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
    if($op == '+')
       $c = $a + $b;
    else
       $d = $c/3;
       
       echo "O resultado da operacao;: $d";
   }

    
