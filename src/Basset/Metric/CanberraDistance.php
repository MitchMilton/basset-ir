<?php

declare(strict_types=1);

namespace Basset\Metric;


/**
 * @see https://en.wikipedia.org/wiki/Canberra_distance
 *
 * @author Jericko Tejido <jtbibliomania@gmail.com>
 */
class CanberraDistance extends Metric implements VSMInterface, DistanceInterface
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param  array $a
     * @param  array $b
     * @return float
     */
    public function dist(array $a, array $b): float
    {

        $sum = 0;
        $uniqueKeys = $this->getAllUniqueKeys($a, $b);

        foreach ($uniqueKeys as $key) {
            if (!empty($a[$key]) && !empty($b[$key])){
                $num = abs($a[$key] - $b[$key]);
                $denom = $a[$key] + $b[$key];
                $sum += ($denom > 0) ? $num/$denom : 0  ;
            }
        }

        return $sum;

    }


}
