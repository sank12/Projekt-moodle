<?php
// dołączenie nagłówka
include ("naglowek.php"); // wymagany na początku KAZDEGO pliku
?>

<?php 
 
    // sprawdzamy, czy formularz został wysłany
    if (isset($_GET['wyslano']) && $_GET['wyslano']=="tak")
    {   // sprawdzamy poprawność pól
        if (isset($_POST['nazwa']) && $_POST['nazwa']!="" && isset($_POST['klucz']) && $_POST['klucz']!="")
        {
            // wszystko jest poprawnie wypełnione, można dodawac kurs do bazy
            if(mysql_query("INSERT INTO kursy (id_zalozyciela, nazwa, klucz_dostepu, stan) VALUES ('{$_SESSION['id_usera']}','{$_POST['nazwa']}','{$_POST['klucz']}', 'dobry')")===TRUE)
            
            { echo ("działa blble");
               
                
                return;
            }
        }
        else
        {   // nie wypełniono wszystkich pól, komunikat o błędzie
            komunikat("Wypełnij wszystkie pola","danger");
        }
    }
?>

<h3>Tworzenie nowego kursu<hr></h3>
<form action="stworz.php?wyslano=tak" method="post" accept-charset="utf-8" >
  <div class="form-group">
    <label>Nazwa kursu</label>
    <input type="nazwa" class="form-control" id="exampleInputEmail1" placeholder="Wpisz nazwę nowego kursu" name="nazwa">
  </div>
  <div class="form-group ">
    <label>Klucz dostępu</label>
    <input type="klucz" class="form-control" id="exampleInputEmail1" placeholder="" name="klucz">
  </div>
  <button type="submit" class="btn btn-default">Dodaj kurs</button>
</form>