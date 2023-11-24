<?php
// Stwórz klasę CashMachine która odwzorowywała bankomat i będzie:
// zawierała bezargumentowy konstruktor
// zawierała przechowywała
#[AllowDynamicProperties] class CashMachine
{
    private $aktualnyStanKonta;
    private $historiaPrzelewow[];
$array
    function __construct()
    {
        $this->aktualnystankonta = $this->aktualnyStanKonta;
    }/**
 * @return mixed
 */public static function getHistoriaPrzelewow()
{
    return self::$historiaPrzelewow;
}/**

 */public static function setHistoriaPrzelewow($historiaPrzelewow): void
{
    self::$historiaPrzelewow[] = $historiaPrzelewow;
}



    public function wyplata($ile)
    {
        $this->aktualnyStanKonta -= $ile;
        $this->historiaPrzelewow[] += $this->aktualnyStanKonta;
    }
    public function wplata($ile)
    {
        $this->aktualnyStanKonta += $ile;
        $this->historiaPrzelewow[] += $this->aktualnyStanKonta;
    }

}
