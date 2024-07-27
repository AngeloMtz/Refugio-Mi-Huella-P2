<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\infoController;

    $infoController= new infoController();

    $consulta=$infoController->seleccionarInfo();

?>
<?php foreach ($consulta as $dato){
echo '<section class="section">';
    echo '<div class="container">';
      echo '<h1 class="title">Sobre Nosotros</h1>';
      echo '<div class="columns">';
        echo'<div class="column is-half">';
          echo '<figure>';
            echo '<img src="'.$dato['logo'].'" alt="Refugio de Animales" width="600px">';
          echo '</figure>';
        echo '</div>';
        echo '<div class="column is-half">';
          echo '<h2 class="subtitle">Nuestra Misión</h2>';
           echo '<p>' .$dato['mision']. '</p>';
           echo '<br>';
           echo '<h2 class="subtitle">Nuestra Visión</h2>';
           echo '<p>' .$dato['vision']. '</p>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</section>';
}
?>