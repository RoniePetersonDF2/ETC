<?php

class Calculadora
{
    # atributos de classe com tipos
    private float $x;
    private float $y;

    # parâmetroes de métodos com tipos
    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    # retorno de métodos com tipos
    public function somar():float
    {
        return $this->x + $this->y;
    }

    # retorno de métodos com tipos
    public function subtrair():float
    {
        return $this->x - $this->y;
    }

    # retorno de métodos com tipos
    public function multiplicar():float
    {
        return $this->x * $this->y;
    }

    # retorno de métodos com tipos
    public function dividir():float
    {
        if($this->y < 0) {
            echo "Operação não pode ser realizada. Divisão por zero.";
            exit;
        }
        return $this->x / $this->y;
    }
}