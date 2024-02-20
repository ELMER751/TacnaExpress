<?php

class Cliente {
        
		private $id;
		private $nom_raz;
		private $nom;
		private $a_p;
		private $a_m;
        private $razon_social;
        private $telefono;
        private $credito;
		private $con;

		public function conectar_db($cn){
			$this->con = $cn;

		}

		public function sanitize($var) {
			$valor = mysqli_real_escape_string($this->con, $var);
			return $valor;
		}
		
		public function listaclintes(){
			$sql = "SELECT * FROM clientes";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

        public function busca($id){
			$sql = "SELECT * FROM clientes where RUC_DNI=$id";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}
		public function buscar($buscar){
			$sql = "SELECT * FROM camiones WHERE MARCA LIKE CONCAT('%', '$buscar', '%');";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_array($res );
			return $return ;
		}
		public function nuevo_camion($ID,$PLACA,$MARCA,$CER,$CON,$CAR){
			$sql = "insert into camiones(CODIGO,PLACA,MARCA,CERTIFICADO,CONFIGURACION_VEHICULAR,CARGA_MAXIMA) values ('$ID','$PLACA','$MARCA','$CER','$CON',$CAR)";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	
		public function modifica_camion($ID,$PLACA,$MARCA,$CER,$CON,$CAR){
			$sql = "update camiones set
			PLACA='$PLACA',
			MARCA='$MARCA',
			CERTIFICADO='$CER', 
			CONFIGURACION_VEHICULAR='$CON',
			CARGA_MAXIMA=$CAR 
			where CODIGO='$ID'";
			
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}

		}	
			
		public function borrar($id){
			$sql = "DELETE FROM camiones WHERE CODIGO=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
    }