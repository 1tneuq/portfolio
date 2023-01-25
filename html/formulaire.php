<html>
<body>
  <?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_GET["email"];
    $to = "quentlaco12@gmail.com";
    $subject = "Contact via Formulaire";
    $message = $_GET["subject"];
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a bien été envoyé, ";
    echo $_GET["firstname"];
    echo ":)";
    header('Location: https://dwarves.iut-fbleau.fr/~lacombe/PORTFOLIO/html/');
  ?>

</body>
</html>
