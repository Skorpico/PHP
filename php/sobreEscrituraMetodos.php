<?php

class Estudiante
{
    //Atributos:
    protected $nombre = "Asdrubal Jose Corales Perez";
    protected $fechaNac ="13 Abril 1983";
    protected $sexo = "Masculino";
    protected $IDEstudiante = "ASCOR83-INFORMATIC";
    protected $inscrito;
    public $msn;

     public function inscribirse()
     {
         $this->inscrito = true;
         $this->set_msn();
     }

     public function set_msn(){ $this->msn = $this->inscrito;}
     public function get_msn(){ return $this->msn; }
}

class EstPregrado extends Estudiante//<-------------------------[INICIO CLASE EstPregrado]
{
    
    public function inscribirse()
    {
        parent::inscribirse();
        $booleano = parent::get_msn();

        if($booleano == true)
        {
             echo "<strong>Se isncribió el estudiante de pregrado:</strong><br>";
             echo "<ul>";
             echo"<li>IDEstudiante:<strong>".$this->IDEstudiante."</strong></li>";
             echo"<li>Nombre: ".$this->nombre."</li>";
             echo"<li>Fecha Nac:".$this->fechaNac."</li>";
             echo"<li>Sexo:".$this->sexo."</li>";
             echo"<li>Estado de Inscripción: ".$booleano."</li>";
             echo "</ul>";
        }else{
                echo "No esta regístrado en pregrado!";
            }
    }
}//<-----------[FIN DE LA CLASE EstPregrado]

class EstPostgrado extends Estudiante//<--------------------------[INICIO CLASE EstPostgado]
{
    private $agnoGraduacion;
    private $carreraPregrado;
    protected $IDEstudiante;

    public function __construct()
    {
        $this->agnoGraduacion = 2008;
        $this->carreraPregrado= "Ing. Informática";
        $this->IDEstudiante = "ING08INFORMATIC";
    }

    public function inscribirse()
    {
        $this->__construct();
        echo "<strong>Datos del Estudiante de Postagrado:</strong><br><ul>";
        echo "<li>ID estudiante: <strong>".$this->IDEstudiante."</strong></li>";
        echo "<li>Año de graduación: ".$this->agnoGraduacion."</li>";
        echo "<li>Carrera: ".$this->carreraPregrado."</li>";
        echo "</ul>";
        parent::inscribirse();
        $this->__destruct();

    }


    public function __destruct(){ exit; }//Destructor de la Clase EstPostgrado
}//<-----------------------------------------------------------[Fin de la Clase EstPostgrado]


//Instanciación del Objeto de Pregrado:
$ObjEstPre = new EstPregrado();
$ObjEstPre->inscribirse();

echo "<hr>";

//Instanciacion del Objeto Estdiante de Post Grado:
$ObjEstPostG = new EstPostgrado();
$ObjEstPostG->inscribirse();


?>

<a  href="../index.php">Volver</a>