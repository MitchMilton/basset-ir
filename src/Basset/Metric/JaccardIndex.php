<?php

declare(strict_types=1);

namespace Basset\Metric;


/**
 * @see http://en.wikipedia.org/wiki/Jaccard_index
 *
 * @author Jericko Tejido <jtbibliomania@gmail.com>
 */
class JaccardIndex extends Metric implements VSMInterface, SimilarityInterface
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
    public function similarity(array $a, array $b): float
    {
        $A = array_fill_keys($a,1);
        $B = array_fill_keys($b,1);

        $intersect = count(array_intersect_key($A,$B));
        $union = count(array_fill_keys(array_merge($a,$b),1));

        return $intersect/$union;
    }

}
