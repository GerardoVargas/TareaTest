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
            $sql = "SELECT id, nombre, precio FROM servicio";
            foreach ($this->db->query($sql) as $res) 
            {
                $this->servicio[] = $res;
            }
            return $this->servicio;
            $this->db = null;
        }

        public function setServicio($nombre, $precio) 
        {

            self::setNames();
            $sql = "INSERT INTO servicio(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
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
            self::setNames();
            $sql = "UPDATE servicio SET nombre=$nombre, precio=$precio WHERE id=('" .$id. "')";
        }

        public function delete($id)
        {
            self::setNames();
            $sql = "DELETE * FROM servicio WHERE id = ('" .$id. "')";
            $result = $this->db->query($sql);
            if($result == false)
            {
                echo 'Error: No se pudo eliminar el id ' .$id. '.';
                return false;
            }
            else
            {
                return true;
            }
        }
    }
?>
