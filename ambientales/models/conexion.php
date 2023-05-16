<?php
    class Conectar extends PDO{
        private $hostBD='localhost';
        private $nombreBD='guaumiau';
        private $usuarioBD='root';
        private $passwordBD='';
        //Contraseña de la base de datos en 000webhost
        //UO3a=>$Y8mogMlnQ
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';
                dbname='.$this->nombreBD.';charset=utf8',$this->
                usuarioBD,$this->passwordBD,array(PDO::ATTR_ERRMODE
                =>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                echo '<script>console.log('.$e.');
                 </script>';
                exit;
                
            }
        }
    }
?>