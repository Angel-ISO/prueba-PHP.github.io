<?php 
    namespace Models;
    class Campers{
        protected static $conn;
        protected static $columnsTbl=['id_camper','camper_name','camper_apellido','DateBorn','id_city'];
       
        private $id_camper;

        private $camper_name;

        private $camper_apellido;

        private $DateBorn;
        private $id_city;
        public function __construct($args=[]){
            $this -> id_camper  = $args['id_camper'] ?? '' ;
            $this -> camper_name = $args['camper_name'] ??'';
            $this -> camper_apellido = $args['camper_apellido'] ?? '' ;
            $this -> DateBorn = $args['date_born'] ??'';
            $this->id_city = $args['id_city'] ?? '';
        }
        public function saveData($data){
            $delimiter = ":";
            $dataBd = $this->sanitizarAttributos();
            $valCols = $delimiter . join(',:',array_keys($data));
            $cols = join(',',array_keys($data));
            $sql = "INSERT INTO campers ($cols) VALUES ($valCols)";
            $stmt= self::$conn->prepare($sql);
            try {
                $stmt->execute($data);
                $response=[[
                    'id_camper' => self::$conn->lastInsertId(),
                    'camper-name'=> $data['camper_name'],
                    'camper_apellido'=> $data['camper_apellido'],
                    'DateBorn' => $data['DateBorn'],
                    'id_region' => $data['id_region']
                ]];
            }catch(\PDOException $e) {
                return $sql . "<br>" . $e->getMessage();
            }
            return json_encode($response);
        }

        public function deleteData($id){
            $sql = "DELETE FROM campers where id_camper = :id";
            $stmt= self::$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }




        public function loadAllData(){
            $sql = "SELECT id_camper,camper_name,camper_apellido,date_born,id_city, FROM cities";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute();
            $campers = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $campers;
        }
        
        public static function setConn($connBd){
            self::$conn = $connBd;
        }
        public function atributos(){
            $atributos = [];
            foreach (self::$columnsTbl as $columna){
                if($columna === 'id_camper') continue;
                $atributos [$columna]=$this->$columna;
             }
             return $atributos;
        }
        public function sanitizarAttributos(){
            $atributos = $this->atributos();
            $sanitizado = [];
            foreach($atributos as $key => $value){
                $sanitizado[$key] = self::$conn->quote($value);
            }
            return $sanitizado;
        }
    }

?>