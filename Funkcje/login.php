<?php 

include ("../Baza/lacze.php");

?>

<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$haslo = addslashes($haslo);
$login = addslashes($login);
$login = htmlspecialchars($login);

    if (!$haslo OR empty($haslo)) {
echo '<p class="alert">Wypełnij pole z hasłem!</p>';
exit;
}

$istnick = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = '$haslo'")); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($istnick[0] == 0) {
    echo 'Logowanie nieudane. Sprawdź pisownię nicku oraz hasła.';}
    else {

$_SESSION['login'] = $login;
$_SESSION['haslo'] = $haslo;

}

$login = $_SESSION['login'];
$haslo = $_SESSION['haslo'];
    if ((empty($login)) AND (empty($haslo))) {
echo '<br>Nie byłeś zalogowany albo zostałeś wylogowany<br><a href="../index.php">Strona Główna</a><br>';
exit;
}

// tresc dla zalogowanego uzytkownika
echo 'Witaj zostałeś/aś pomyślnie zalogowany/a, tutaj umieść ukryta strone tylko dla zalogowanych';
echo '<br><a href="wyloguj.php">Wyloguj mnie</a>';
?>