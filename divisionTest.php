<?php
require ("calculate.php");
use PHPUnit\Framework\TestCase;

class divisionTest extends TestCase
{
    public function testDiviserOK()
    {
        $calcul = new Calcul();
        $result = $calcul->Division(10, 5);
        
        $this->assertEquals(2, $result);
    }

    public function testDiviserParZero()
    {

        $calcul = new Calcul();
        try {
            $result = $calcul->Division(10, 0);
            $this->fail("Ca aurait du planter");
        } catch (Exception $ex) {
                $this->assertEquals($ex->getMessage(),"Division par 0 impossible !", "Pas la bonne valeur");

        }
    }

}

    
?>    