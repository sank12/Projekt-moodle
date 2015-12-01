<?php
include ("naglowek.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Info o moim koncie</h1>


         
         
         <hr>
         <?php
         echo "<br>Imię: ";
         echo $_SESSION['imie'];
         echo "<br>Nazwisko: ";
         echo $_SESSION['nazwisko'];
         echo "<br>Ranga: ";
         echo $_SESSION['ranga'];
         echo "<br>Email: ";
         echo $_SESSION['email'];
         
         
         
         ?>