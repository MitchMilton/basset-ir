<?php

declare(strict_types=1);

namespace Basset\Metric;

/**
 * @see https://en.wikipedia.org/wiki/Euclidean_distance
 *
 * @author Jericko Tejido <jtbibliomania@gmail.com>
 */

class EuclideanDistance extends Metric implements VSMInterface, DistanceInterface
{

    /**
     * @param  array $a
     * @param  array $b
     * @return float
     */
    public function dist(array $a, array $b): float
    {

        $r = array();
        foreach ($a as $k=>$v) {
            $r[$k] = $v;
        }
        foreach ($b as $k=>$v) {
            if (isset($r[$k]))
                $r[$k] -= $v;
            else
                $r[$k] = $v;
        }
        
        return sqrt(
            array_sum(
                array_map(
                    function ($x) {
                        return $x*$x;
                    },
                    $r
                )
            )
        );

    }

}
