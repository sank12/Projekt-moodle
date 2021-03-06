<!doctype html>

<html>
  
  <head>
    <title>Moodle!</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
      .odstep {
        height: 15px;
      }
    </style>
    <style>
      body {
        background-image: url('zdjecia/tlo.jpg');
        padding:15px;
        background-color:#DFF;
      }
    </style>
  </head>
  
  <body>
    <div class="odstep"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <img src="http://www.jpg.aq.pl/s/3454.jpg" width="600" height="100">
        </div>
        <div class="col-md-4">
          <p class="text-center"><b><i>Zalogowano pomyslnie</i></b></p>
          <div id="dolny">
           <div id="gorny">
            <button type="button" name="przypomnij" class="btn btn-block btn-warning btn-sm">Zmien haslo</button>
          </div>
          <div id="dolny">
            <button type="button" name="przypomnij" class="btn btn-block btn-danger btn-sm">Wyloguj</button>
          </div>
        </div>
      </div>
    </div>
    <div class="odstep"></div>
    <div class="odstep"></div>
    <div class="container">
      <h1 class="text-center">Moje kursy</h1>
      <table class="table">
        <tbody>
          <tr>
            <td>przykaladowy kurs</td><td><button type="button" name="przypomnij">Wypisz sie</button>
          </tr>
        </tbody>
      </table>
      <h1 class="text-center">Inne kursy</h1>
      <table class="table">
        <tbody>
          <tr><td>jakis przykladowy kurs</td><td><button type="button" name="przypomnij">Zapisz sie</button></td></tr>
            <tr><td>inny przyklad</td><td><button type="button" name="przypomnij">Zapisz sie</button></tr>
            <tr><td>za darmo dla kazdego</td><td><button type="button" name="przypomnij">Zapisz sie</button></tr>
            <tr><td>trzeba to trzeba</td><td><button type="button" name="przypomnij">Zapisz sie</button></tr>
        </tbody>
      </table>
    </div>
  </body>

</html>