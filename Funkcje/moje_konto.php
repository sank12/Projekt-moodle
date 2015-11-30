<?php
include ("naglowek.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Info o moim koncie</h1>



$_SESSION['ranga']=$r['typ'];
         $_SESSION['imie'] = $r['imie'];
         $_SESSION['nazwisko'] = $r['nazwisko'];
         $_SESSION['email'] = $r['email'];
         
         
         
         <hr>
         <?php
         echo "Imie cwela: ";
         echo $_SESSION['imie'];
         
         
         
         ?>