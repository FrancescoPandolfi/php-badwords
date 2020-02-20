<?php

  $badword = $_GET['badword'];
  $author = $_GET['author'];

  $paragrafo = "Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l'odore di treno che resta anche dopo che tutti i treni sono partiti, l'odore speciale delle stazioni dopo che è partito l'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d'averci passato una vita, entrando e uscendo da questo bar, passando dall'odore della pensilina all'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell'attesa, l'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.";

  $paragrafo_nuovo = str_replace($badword, '***', $paragrafo);

$img = "https://www.dropbox.com/s/owh054xczqtxkm4/bs.gif?raw=1";
$alt = "immagine";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Badword</title>
  </head>
  <body>
    <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>">
    <p data-author="<?php echo $author; ?>"><?php echo $paragrafo; ?></p>
    <p>Lunghezza paragrafo: <?php echo strlen($paragrafo); ?></p>

    <p><?php echo $paragrafo_nuovo; ?></p>
    <p>Lunghezza paragrafo: <?php echo strlen($paragrafo_nuovo); ?></p>
  </body>
</html>


<!-- Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.-->
