<?php

include ("naglowek.php");

// tutaj są opcje dla tych co są zalogowani

if (!@isset($_SESSION['zalogowany']) && @$_SESSION['zalogowany'] != 1)
{
   echo "<h1> nie jestes zalogowany, wypierdalaj ;)</h1>";
   return;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>


<h1>Zalogowany jestes</h1>
Tutaj są jakieś rzeczy co się wyświetlają dla zalogowanych użytkowników (wszystkich)