<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\sliderController;

    $sliderController= new sliderController();

    $consulta=$sliderController->seleccionarSlider();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css"> 
    
    <style>    
       table.dataTable thead, table.dataTable tfoot {
           background-color: hsl(171, 100%, 41%);                  
       }
       .table thead th, .table tfoot th{ 
           color: hsl(0, 0%, 96%);
        }
    </style>
    
  </head>
  <body>
  
<div class="container is-fullhd">

<article class="tile is-child notification is-info">
   <p class="title">Datatables estilo Bulma</p>
</article>
<table id="example" class="table is-striped is-hoverable" style="width:100%">
    <thead>
        <tr >
            <th>ID</th>
            <th>URL IMAGEN</th>
            <th>TEXTO</th>
            <th>ESTATUS</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        <?php foreach ($consulta as $imagen):{  ?>
        <tr>
            <td><?php echo $imagen['slider_id'] ?></td>
            <td><img src="<?php echo $imagen['slider_url'] ?>" alt="" width="250px"></td>
            <td><?php echo $imagen['slider_alt'] ?></td>
            <td><?php echo $imagen['status'] ?></td>
            <td><input type="button" value="editar"  class="button is-primary" width="20px" height="20px">
            <input type="button"  value="eliminar" class="button is-red" width="20px" height="20px"></td>
        </tr>
        <?php } endforeach; ?>

        
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>URL IMAGEN</th>
            <th>TEXTO</th>
            <th>ESTATUS</th>
            <th>ACCIONES</th>
        </tr>
    </tfoot>
</table>


</div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bulma.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

  </body>
</html>