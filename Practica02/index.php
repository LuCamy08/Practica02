<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 02</title>
    <LINK rel = "stleysheet" href = "css/fondos.css">
</head>
<body text="lime" bgcolor="black">
    <img src="ittg.png"
        width="90"
        height="90"
        >

        <?php
            echo "<br><H4><b>Alumna:</b> Guadalupe del Carmen Torres Vicente<br></H4>";
            echo "<b>Grupo:<b> S8A";

            echo "<center><u><b><br><H3>EJEMPLO DE HERENCIA<br></b></center></u></H3>";

            echo "<br>POSICIÓN DEL ANIMAL<br>";

            class animal{
                //atributos -> abstracción
                public $posicion = false;
                public $tamaño;
                public $color;
            
                public function estado(){
                    if( $this->posicion)
                    echo "el animal está corriendo<br>";
                    else
                    echo "El animal está parado<br>";
                }

                public function comenzar(){
                    if($this->posicion){
                        echo "Cuidado, animal suelto<br>";
                    } else{
                        echo "el animal está saliendo<br>";
                        $this->posicion = true;
                    }
                }
            }

            $animal = new animal();
            $animal->estado();
            $animal->comenzar();
            $animal->estado();

            echo "<br>POSICIÓN DEL LEÓN<br>";

            class leon extends animal{

            }
            $leon = new leon();
            $leon->estado();

            echo "<br>POSICIÓN DEL LEOPARDO<br>";

            class leopardo extends animal{
            }

            $leopardo = new leopardo();
            $leopardo -> comenzar();
            $leopardo->estado();

            echo "<center><u><b><br><H3>EJEMPLO DE POLIMORFISMO<br></b></center></u></H3>";
            echo "UTILIZANDO LA INFORMACIÓN DE LA CLASE -ANIMAL-<br>";

            echo "<br>ACTIVIDAD DEL ELEFANTE<br>";

            class elefante extends animal{

                public function comenzar(){
                    echo "El elefante comenzó su día barritando <br>";
                }

            }
            $elefante = new elefante();
            $elefante -> comenzar();

            echo "<center><u><b><br><H3>EJEMPLO DE ENCAPSULAMIENTO<br></b></center></u></H3>";
    
            class Alumno{
                private $nombre;
                private $correo;
                private $semestre;

                public function setNombre($nombre){
                    $this->nombre = $nombre;
                }

                public function setCorreo($correo){
                    $this->correo = $correo;
                }

                public function setSemestre($semestre){
                    $this->semestre = $semestre;
                }

                public function getNombre(){
                    return $this->nombre;
                }

                public function getCorreo()
                {
                    return $this->correo;
                }

                public function getSemestre()
                {
                    return $this->semestre;
                }

                public function mostrar(){                    
                    echo 'Los datos del alumno son: <br> Nombre: '.$this->getNombre().' <br> Correo '.$this->getCorreo(). ' <br> Semestre '.$this->getSemestre();
                }

            }
            $alumno = new Alumno();
            $alumno->setNombre('Guadalupe del Carmen');            
            $alumno->setCorreo('luCamy@gmail.com');
            $alumno->setSemestre('8°');

            $alumno->mostrar();

            
        ?>

</body>
</html>