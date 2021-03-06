<?php

namespace Basset\Metric;

class MotykaSimilarityTest extends \PHPUnit_Framework_TestCase
{
    public function testMotykaSimilarity()
    {
        $sim = new MotykaSimilarity();
        $A = array("my" => 1,"name" => 2,"is" => 3,"john" => 4);
        $B = array("this" => 5,"your" => 6,"cousin" => 7,"john" => 4);
        $e = array();

        $this->assertEquals(
            0.5,
            $sim->similarity($A,$A),
            "The similarity of a set with itself is 0.5"
        );

        $this->assertEquals(
            0,
            $sim->similarity($A,$e),
            "The similarity of any set with the empty set is 0"
        );

    }
}