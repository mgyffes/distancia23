<?php

/**
 * Esta clase implementa una calculadora con dos métodos, multiplicar y dividir
 * @author Moises
 * @version 1.0.2
 */
class Calculadora
{
    /**
     * @var integer $num1 primer número de la operación
     */
    private $num1;

    /**
     * @var integer $num2 segundo número de la operación
     */
    private $num2;

    /**
     * Constructor de la clase Calculadora
     * 
     * @access public
     * @param integer $num1 primer número de la operación
     * @param integer $num2 segundo número de la operación
     * @return void
     */
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    /**
     * Método get del primer número
     * 
     * @access public
     * @return integer $num1 primer número de la operación
     */
    public function getNum1(){
        return $this->num1; 
    }

    /**
     * Método get del segundo número
     * 
     * @access public
     * @return integer $num2 segundo número de la operación
     */
    public function getNum2(){
        return $this->num2; 
    }

    /**
     * Método de la multiplicación de dos números enteros.
     * 
     * @version 1.0
     * @access public 
     * @return integer suma del resultado de la multiplicación.
     */
    public function Multiplicar()
    {
        return $this->num1 * $this->num2;
    }

    /**
     * Método de la división entre dos números enteros.
     * 
     * @version 1.0
     * @access public 
     * @return integer suma del resultado de la multiplicación.
     */
    function Dividir()
    {
        return $this->num1 / $this->num2;
    }
}

$calculo = new Calculadora(45,3);

$resMultiplicacion = $calculo->Multiplicar();
$resDivision = $calculo->Dividir();

echo "El resultado de la multiplicación entre ".$calculo->getNum1()." x ".$calculo->getNum2()." es: ".$resMultiplicacion;
echo "<br>El resultado de la división ".$calculo->getNum1()." / ".$calculo->getNum2()." es: ".$resDivision;

?>