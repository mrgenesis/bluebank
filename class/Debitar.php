<?php

class Debitar extends Transf
{

    // A implemantação obriga o uso de dos parametros obrigatórios
    // http://php.net/manual/en/language.oop5.abstract.php
    public function dados($id, $CPF, $conta, $agencia, $valor) {
        echo 'Debitar';
    }
}
