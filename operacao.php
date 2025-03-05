<?php
class Operacao {
    
    public static function somar($a, $b) {
        return $a + $b;
    }

    public static function subtrair($a, $b) {
        return $a - $b;
    }

    public static function multiplicar($a, $b) {
        return $a * $b;
    }

    public static function dividir($a, $b) {
        
        if ($b == 0) {
            return "A divisão está por 0, erro";
        }
        return $a / $b;
    }
}
?>
