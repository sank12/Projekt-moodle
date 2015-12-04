<?php

include ("naglowek.php");

// tutaj są opcje dla tych co są zalogowani

if (!@isset($_SESSION['zalogowany']) && @$_SESSION['zalogowany'] != 1)
{
   echo "<h1>Zaloguj się!</h1>";
   return;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>


<h1>Jesteś zalogowany!</h1>
<p>Twoje logowanie przebiegło pomyślnie, teraz w pełni korzystać z naszych usług.
</p>
