<?php

namespace Basset\Metric;

class LorentzianDistanceTest extends \PHPUnit_Framework_TestCase
{
    public function testLorentzianDistance()
    {
        $sim = new LorentzianDistance();
        $A = array("my" => 1,"name" => 2,"is" => 3,"john" => 4);
        $e = array();

        $this->assertEquals(
            0,
            $sim->dist($A,$A),
            "The distance of a set with itself is 0"
        );

        $this->assertEquals(
            0,
            $sim->dist($A,$e),
            "The distance of any set with the empty set is 0"
        );

    }
}