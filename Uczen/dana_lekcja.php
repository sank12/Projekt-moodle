<?php
include ("naglowek.php");

 ?>
<div style="color: black" id="z_lista_lekcji_lewa" class="col-md-9">
    <div class="thumbnail">
    <?php
// plik wyświetla daną lekcję (czyli temat i zawartosć)

    // sprawdzamy, czy istenieje $_GET[id]
    if (!isset($_GET['id']))
    {
        echo "Nie podano zmiennej ID";
        return;
    }
    
    // kilka zmiennych globalnych
    $id = $_GET['id'];

    
    // wyświetlenie zawartości danej lekcji
    $wynik_kurs_nazwa = mysql_query("SELECT * FROM `lekcje` WHERE id_lekcji={$id}");
    $nr = 0;
    // zmienne ułatwiające operowanie na kodzie
    $id_lekcji = $id;
    $id_uzytkownika = $_SESSION['id_usera'];
    
    while ($r = mysql_fetch_assoc($wynik_kurs_nazwa)) 
    {
        // wyświetlenie tematu
        echo "<h3><small>Temat:</small> {$r['temat']} </h3>";
        echo '<hr><br>';
        // wyświetlenie treści
        echo '<p>'.$r['tresc'].'</p>';
        
        echo '<br><br>';
        // dane z plikiem
        
        echo '<br><br>';
   
   {
             // sprawdzenie czy chcemy usunąć odpowiedz
            if (isset($_GET['usun']) && $_GET['usun']=="tak")
            {   // usuwanie odpowiedzi
                 odp_uczen_usun($_SESSION['id_usera'], $id); 
                 komunikat("Odpowiedź usunięto", "success");
            }
            
            // sprawdzenie czy wysyłamy odpowiedź
            if (isset($_POST['tresc']) && $_POST['tresc']!="")
            {   // dodanie odpowiedzi              
                upload_odp_tekst($_SESSION['id_usera'], $id, $_POST['tresc']);
                komunikat("Odpowiedź dodano", "success");
            }
            else if (isset($_POST['tresc']) && $_POST['tresc']=="")
            {
                komunikat("Wypełnij polę odpowiedzi", "danger");
            }
         
        }
    
        // link powrotny. Dodatkowo mamy wartość id_kursu. Id_kursu przechowuje id kursu do którego należy dana lekcja
        // aby móc poprawnie wrócić, musimy ja przechowywać a potem zwrócić w linku
        $link = "lista.php?v=tresc/u_kursy/lista_lekcji&id={$_GET['id_kursu']}";
        echo '<br><hr><a class="btn btn-default" href="'.$link.'" role="button">Powrót do listy tematów</a></td>';
    }  
?>
</div>
</div>
