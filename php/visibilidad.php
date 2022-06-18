<?php
/* Visibilidad de Atributos y Métodos: en el lenguaje de progrmación PHP se puede definir
varios tipos de visibilidad para los Atributos (variables) y métodos (funciones), las cuales 
en especificon son tres (03), a continuación se describen los tipos de visibilidad: 

 -Pública: los métodos que tienen esta visibilidad puden ser accedidos
desde cualquier parte del programa informático y son accedidos por $this->.

 -Protegida:Los elementos que tienen esta visibilidad limitan el acceso solo a la
clase que los define y a las clases que heredan de la clase padre.

-Privada: Los elementos que tienen esta visibilidad limitan el acceso únicamente
a la clase que los define y no puede heredar.

    Para Usar estos tipos de visibilidad se debe anteponer a la declaracaión la palabra
la palabra reservada: public, protected o private como se puede notar en el siguiente ejemplo.
*/

//Definición del Objeto Padre:
Class C_padre
{
 /*Atributios de la Clase:*/
    public    $varPublic;    //<- Variable Pública.
    protected $varProtected; //<-Variable Protegida.
    private   $varPrivate;   //<-Variable Privada.
    const     Const_cedulaP = '16075795'; //<-Cosntante: el atributo no llevan el simbolo de $

 /*Métodos:*/

    protected function __construct()
    {
        /*El constructor de una clase se usa para colocar cualquier inicialización 
        del objeto requiera antes de usarse, es decir, es posible que necesitr realizar
        varias tareas de inicalización como dar valor a cada atributo definido por el
        desarrollador, puede recibir datos, pasados como parametros para inicializarlos
        según sea el caso. Ejemplo:*/

         $this->varPublic = "Soy un atributo Público";       //<- Variable Pública.
         $this->varProtected = "Soy un atributo Protegido";  //<-Variable Protegida.
         $this->varPrivate = " Soy un atributo Privado";     //<-Variable Privada.
        //echo"<script type='text/javascript'>alert('Hola Mundo desde C_Padre!')</script>";
    }   

    public function imprimeAtributos()
    {
        echo "Mostrado desde el Padre:<br><ul>";
        echo "<li>".$this->varPublic."</li>";
        echo "<li>".$this->varProtected."</li>";
        echo "<li>".$this->varPrivate."</li></ul>";
    }

    protected function AlertScript()
    {
        echo "<script type='text/javascript'>alert('Soy el C_Padre:".$this->varPublic."')</script>";
    }

    public function __destruct()
    {
        exit();
    }
}

/*Instanciación de la Clase Padre*/
   // $Objeto = new C_padre();
    //$Objeto->imprimeAtributos();


//-----------------------------------------------------------[Definición del Objeto Hija]

Class C_hija extends C_padre
{
    /* Nota: La paralabra reservada extends da el acceso a la herencia de la clase padre, y la
    la clase hija hereda los atributos y métodos, cabe destacar que los elementos publicos
    y protegidos del padre pueden ser redeclarados en la clase hija y los declarados protegidos
    no se pueden redeclarar.
    */
    
    /*Atributos:*/
        public $varNomHija;
        public $varApeHija;
        const Const_cedulaH = "24987789";
     
    /*Métodos:*/
    public function __construct()
    {
        //Llamada de una función heredada desde el Padre.
        parent::__construct();
        
        //Acá una muestra de la nota anterior:
         $this->varProtected = "Soy una Variable Protegida Redefinida";
         $this->varPublic = "Soy una Variable Pública Redefinida";
         //Usando el constructor como el inicializador que es reasignamos los valores de los atributos heredados del padre según su visibilidad.
        

    }

    /*Los metodos Getter y Setter son usados para emcapsular informacion (ocultar)
    ya que los atributos de una clase no deberian ser accedidos directamente desde el exterior
    si no, por medio de métodos que manipulen los atributos.
    */
    public function set_varNomHija()//<-Settter: modifica el valor del atributo
    {
        $this->varNomHija = "Oriana";
    }

    function imprimirAtributos()
    {
        //Llamadas de funcines heredadas desde el Padre:
        parent::imprimeAtributos();//<-LLamada de una función en C_padre.
       
        echo "Mostrado desde Hija:<br><ul>";
        echo "<li>".$this->varPublic."</li>";
        echo "<li>".$this->varProtected."</li>"; 
        
        self::mostrarConstantes(); 
        parent::AlertScript();
        $this->ArlertScript2();
    }

    public static function ArlertScript2()
    {
        echo "<script type='text/javascript'>alert('ALERTA 2!')</script>";  
    }
    public static function mostrarConstantes()
    {
        echo "<li>Cedula Padre: ".parent::Const_cedulaP."</li>";//<-Acceso al valor de la constante Padre.
        echo "<li>Cedula Hija: ".self::Const_cedulaH."</li>";//<-Acceso al valor de la constante Hija.
    }

    public function get_varNomHija()//<-Getter: devuelve el valor asignado al atributo.
    {
        return $this->varNomHija;
    }

     function __destruct()
    {
        /*Se invoca cuando todas las referencias a un objeto sean removimidas o cuando el
        objeto explicitamente destuido, es decir, es el encargado de realizar tareas de
        finalización y cuando ya no es el objeto referenciado libera espacio de memoria ram.
        */
        //parent::__destruct();
        exit();
    }

}

//Instanciación de la Clase Hija:

    $ObjetoHija = new C_hija();
    $ObjetoHija->__construct();
    $ObjetoHija->set_varNomHija();
    $ObjetoHija->imprimirAtributos();
    $varA = $ObjetoHija->get_varNomHija();
    echo'<li>Nombre Hija:'.$varA."</li></ul>";
    $ObjetoHija->__destruct(); 

    //$ObjetoHija->$varPublic;//Genera Error!.
    // $Objeto->$varPrivate;//Genera Error!
    //$Objeto->$varPrivate;//Genera Error!



/*
Nota. se debe hacer notar que los atributos y metodos miembrso de una clase sólo se puden 
referenciar de acuerdo a las reglas de visibilidad antes mencionadas, el uso de las mismas 
dependen de las necesidades del programa informático que se va a desarrollar y del criterio 
del desarrollador de Software.

                                                            Atte. Ing. Asdrubal Corales.
*/
?>

<br>
<a  href="../index.php">Volver</a>