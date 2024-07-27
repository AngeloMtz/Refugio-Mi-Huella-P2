<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\mascotaController;

    $mascotaController= new mascotaController();

    $MascotasController=$mascotaController->seleccionarMascotas();

?>


<section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Adopta una Mascota</h1>
            <div class="columns is-multiline">
                <?php foreach ($MascotasController as $dato){
                echo '<div class="column is-one-third">';
                    echo '<div class="card">';
                        echo '<div class="card-image">';
                            echo '<figure class="image is-4by3">';
                                echo '<img src="'.$dato["url_img"].'" alt="Imagen de la mascota">';
                            echo '</figure>';
                        echo '</div>';
                        echo '<div class="card-content">';
                            echo '<div class="media">';
                                echo '<div class="media-content">';
                                    echo '<p class="title is-4">'.$dato["nombre"].'</p>';
                                    echo '<p>Raza: '.$dato["Raza"].'</p> <br>';
                                    echo '<p>Descripcion: '.$dato["descripcion"].'</p>';
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="content">';
                                echo '<button class="button is-primary is-fullwidth">Adoptar</button>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>