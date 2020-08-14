<?php
    session_start();
    if(!isset($_SESSION['error'])){
    $_SESSION['error']="";
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="author" content="Michał Knapczyk" />
    <meta name="description" content="Moje porfolio" />
    <meta name="keywords" content="HTML,CSS,ZSE,PORTFOLIO,KNAPCZYK" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="shortcut icon" type="image/png" href="style/img/favicon.png" />
    <title>M. K. | Kontakt</title>
  </head>
  <body>
    <div id="main">

      <div id="top">

        <div class="logo">
          <p>Michał Knapczyk</p>
        </div>

        <div class="panel">
          <ul>
            <a href="index.html"><li>O mnie</li></a>
            <a href="projects.html"><li>Projekty</li></a>
            <a href="contact.php"><li>Kontakt</li></a>
          </ul>
        </div>

      </div>

      <div id="content">

        <div class="left">
          <h1>Formularz kontaktowy</h1>
          <p>
            Masz pytanie lub ofertę? Skontaktuj się ze mną poprzez formularz:
          </p>
        </div>

        <div class="left">

          <form method="post" action="send.php">
            <input
              type="email"
              name="email"
              placeholder="Twój adres email"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
              required
            /><br />
            <input type="text" name="temat" placeholder="Temat" /><br />
            <textarea
              placeholder="Twoja wiadomość ..."
              name="tresc"
              pattern=".{2,}"
              required
            ></textarea
            ><br />
            <button type="reset">Wyczyść &#10007;</button>
            <button type="submit">Wyślij &#10003;</button>
          </form>

          <span>
            <?php
                echo $_SESSION['error'];
                if($_SESSION['error']!=""){
                    session_destroy();
                }
            ?>
          </span>

        </div>

      </div>

      <footer>
        <p><a href="#main">Powrót do góry strony</a></p>
        <p>&copy; 2020</p>
      </footer>

    </div>
  </body>
</html>