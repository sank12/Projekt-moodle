<?php
session_start();
// tutaj kuźwa mamy cały nagłóweczek ze wszystkim. Do każdej podstrony taki ładujemy, jak w dupkę, i jest miło i fajno

// najpierw nasza baza dupych, znaczy danych
include ("../Baza/lacze.php");


// robimy wylogowanie
if (isset($_GET['wyloguj']))
{
    session_destroy(); // usuneicie sesji
    header("Location: index.php");
}


// potem cały html leci
?>
<!doctype html>

<html>
  
  <head>
    <title>Moodle!</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    .odstep{
      height: 15px;
    }
    </style>
    
    <style>
    body{
        background-image: url('../zdjecia/tlo3.png');
        padding: 20px ;
        color: white;
      }
      
  </style>
  
  </head>
  
  <body>
  <div class="odstep"></div>   
  <div class="container">
      <div class="row">

       <div class="col-md-8">
           <a href="../index.php"><img src="http://www.jpg.aq.pl/s/3454.jpg" width="600" height="100"></a>
        </div>
        <div class="col-md-4">
          
            
                
                        <a href="../index.php" class="btn btn-block btn-success btn-lg">Wróć</button>

                 
            <a class="btn btn-success btn-block" >Witaj uczniu o loginie <b><?=$_SESSION['login']?></b></a><br>
                 
          
           
            <br>
            
          
            
            
        </div>
      </div>