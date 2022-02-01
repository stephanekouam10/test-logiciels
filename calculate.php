<?php

class Calcul
{
    function Division($val1, $val2)
    {
        if($val2 == 0) {
            throw new Exception("Division par 0 impossible !");
        }
        return $val1/$val2;
    }


}


?>