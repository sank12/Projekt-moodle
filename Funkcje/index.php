<?php
// dołączenie nagłówka
include ("naglowek.php"); // wymagany na początku KAZDEGO pliku

// ten plik to formularz do logowania
// jeśli ktoś  jest zalogowany to przenosi go automatycznie do pluku zalogowany.php

if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1)
{
   header("Location: zalogowany.php");
    return;
}


?>


<?php

// LOGOWANIE
if (isset($_GET['wyslano']) && $_GET['wyslano']=="tak")
{
@$login = $_POST['login'];
@$haslo = $_POST['haslo'];

$liczba_bledow = 0;
    if (!isset($_POST['haslo']) || $haslo=="" || !isset($_POST['login'])) {
echo '<p class="alert bg-danger">Wypełnij pole z hasłem!</p>';
$liczba_bledow++;
    }

if ($liczba_bledow==0)
{
$istnick = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = '$haslo'")); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($istnick[0] == 0) {
    echo 'Logowanie nieudane. Sprawdź pisownię nicku oraz hasła.';}
    else {

$_SESSION['login'] = $login;
$_SESSION['haslo'] = $haslo;
$_SESSION['zalogowany'] = 1;
$zapytanie = mysql_query("SELECT * FROM uzytkownicy WHERE `login` = '{$_POST['login']}' AND `haslo` = '{$_POST['haslo']}'");

     while($r = mysql_fetch_assoc($zapytanie)) {
         // odczytanie danych z bazy
         $_SESSION['ranga']=$r['typ'];
         echo "aaaaaaaaaaaaa";
     }
     
    
     }

}

// jeśli zalogowano, to przenosimy do zalogowanych userow
if (@$_SESSION['zalogowany'] == 1)
{
    header("Location: zalogowany.php");
    return;
}

    if ((empty($login)) AND (empty($haslo))) {
echo '<br>Nie byłeś zalogowany albo zostałeś wylogowany<br><a href="index.php">Strona Główna</a><br>';
}

}



?>

      <div class="row">
        <div class="col-md-6">
            <h1>Logowanie:</h1>
             <form method="POST" action="index.php?wyslano=tak">
          


<table cellpadding="0" cellspacing="0" width="180">

<tr><td><br></td></tr>
<tr><td width="50">Login:</td><td><input type="text" name="login" maxlength="32"></td></tr>
<tr><td width="50">Hasło:</td><td><input type="password" name="haslo" maxlength="32"></td></tr>

</table>

          <div id='l_button_lewy'><button type="submit" name="submit" class="btn btn-info btn-block ">Zaloguj</button></div>
           </form>
            <div id='l_button_prawy'><a href="" class="btn  btn-block">Przypomnij haslo</a></div>
        </div>
         
        <div class="col-md-5">
          <h1>Witaj na moodle!</h1>
         
         <p>Enter your paragraph text here.Enter your paragraph text here.Enter your paragraph text here.
              Enter your paragraph text here.Enter your paragraph text here.Enter your paragraph text here.
              Enter your paragraph text here.Enter your paragraph text here.Enter your paragraph text here.
              Enter your paragraph text here.Enter your paragraph text here.Enter your paragraph text here. 
              nter your paragraph text here.Enter your paragraph text here. nter your paragraph text here.
              Enter your paragraph text here. nter your paragraph text here.Enter your paragraph text here.
              nter your paragraph text here.Enter your paragraph text here.nter your paragraph text here.
              Enter your paragraph text here.nter your paragraph text here.Enter your paragraph text here.
          Enter your paragraph text here.Enter your paragraph text hereEnter your paragraph text here.Enter your paragraph text here
          Enter your paragraph text here.Enter your paragraph text hereEnter your paragraph text here.Enter your paragraph text here
          Enter your paragraph text here.Enter your paragraph text hereEnter your paragraph text here.Enter your paragraph text here
          </p>
        </div>
      </div>

  </body>

</html>