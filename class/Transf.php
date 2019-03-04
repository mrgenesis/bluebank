<?php
abstract class Transf
{
    // Apenas define os parametros obrigatórios
    // http://php.net/manual/en/language.oop5.abstract.php
    abstract protected function dados($id, $CPF, $conta, $agencia, $valor);

}