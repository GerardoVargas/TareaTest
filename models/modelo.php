<?php
    class Service 
    {

        private $servicio;
        private $db;

        public function __construct() 
        {
            $this->servicio = array();
            $this->db = new PDO('mysql:host=localhost;dbname=mvc_ejemplo', "root", "");
        }

        private function setNames() 
        {
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getServicios() 
        {

            self::setNames();
            $sql = "SELECT id, nombre, precio, descrip FROM servicio";
            foreach ($this->db->query($sql) as $res) 
            {
                $this->servicio[] = $res;
            }
            return $this->servicio;
            $this->db = null;
        }

        public function setServicio($nombre, $precio, $descrip) 
        {

            self::setNames();
            $sql = "INSERT INTO servicio(nombre, precio, descrip) VALUES ('" . $nombre . "', '" . $precio . "','" . $descrip . "',)";
            $result = $this->db->query($sql);

            if ($result) 
            {
                return true;
            }
            else 
            {
                return false;
            }
        }

        public function update($id)
        {
            $sql = "UPDATE servicio SET nombre=$nombre, precio=$precio, descrip=$descrip WHERE id=('" .$id. "')";
            $result = $this->db->query($sql);
            if($result)
            {
                echo "<script type=\"text/javascript\">
                        alert('Datos Actualizados');
                        window.location.href = '/index';  
                      </script>";
                return true;
            }
            else
            {
                echo 'Error: No se pudo actualizar';
                return false;
            }
        }

        public function delete($id)
        {
            $sql = "DELETE FROM servicio WHERE id =('".$id."')";
            $result = $this->db->query($sql);
            if($result)
            {
                echo "<script type=\"text/javascript\">
                        
                        alert('¿Está seguro que desea eliminar este elemento?');
                        alert('El id " .$id. " fue eliminado.');
                        window.location.href = '/index';  
                      </script>";
                return true;
            }
            else
            {
                echo 'Error: No se pudo eliminar el id ' .$id. '.';
                return false;
            }
        }
    }
?>
