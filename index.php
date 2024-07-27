<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session-start.php";

    if(isset($_GET['views'])){
        $url=explode("/",$_GET['views']);
    }else{
        $url=["login"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once "./app/views/inc/head.php";
?>
</head>
<body>
<?php 
    
    use app\controllers\viewsController;

    $viewsController = new viewsController();
    $vista=$viewsController->obtenerVistasControlador($url[0]);

    if($vista == "login" || $vista == "404") {
        require_once "./app/views/content/".$vista."-view.php";
     }
     else {
      if ($vista == "./app/views/content/dashboardAdmin-view.php" || $vista == "./app/views/content/crudslider-view.php"){
         require_once "./app/views/inc/navbarAdmin.php";
         require_once $vista;
         require_once "./app/views/inc/footer.php";
      }else {
         require_once "./app/views/inc/navbar.php";
         require_once $vista;
         require_once "./app/views/inc/footer.php";
      }
     }
     require_once "./app/views/inc/script.php";
?>
</body>
</html>