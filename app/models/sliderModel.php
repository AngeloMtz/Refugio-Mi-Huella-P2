<?php namespace app\models;

use \PDO;

if (file_exists(__DIR__."../../config/server.php")){

    require_once __DIR__."../../config/server.php";
}

class sliderModel extends mainModel {
    private $table = 'slider';
    public $id;
    public $url;
    public function extraerRegistro(int $id){
        $consulta = "SELECT * FROM slider WHERE slider_id="strval($id);
        $sql = $this->conectar()->prepare($consulta);
        $sql->execute();
        return $sql; 
    }
}
?>