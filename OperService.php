<?php
class OperService{
    public function getResult($num1,$num2,$oper){
        switch ($oper){
            case "+":
                return $num1+$num2;
                break;
            case "-":
                return $num1-$num2;
                break;
            case "*":
                return $num1*$num2;
                break;
            case "/":
                return $num1/$num2;
                break;
        }
    }
}