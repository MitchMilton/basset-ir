<?php

namespace Basset\Models;

use Basset\Models\Contracts\IDFInterface;
use Basset\Models\Contracts\WeightedModelInterface;
use Basset\Metric\CosineSimilarity;

/**
 * Robertson-Sparck's IDF
 *
 * @author Jericko Tejido <jtbibliomania@gmail.com>
 */


class IdfSpackRobertson extends BaseIdf implements WeightedModelInterface, IDFInterface
{

    public function __construct($base = parent::E)
    {
        parent::__construct($base);
        $this->metric = new CosineSimilarity;
    }
    
    /**
     * @param  int $tf
     * @param  int $docLength
     * @param  int $docUniqueLength
     * @return float
     */
    public function score($tf, $docLength, $docUniqueLength)
    {
        $df = $this->getDocumentFrequency();
        return $df > 0 ? log((($this->getNumberOfDocuments() + 1)/$df), $this->getBase()) : 0;

    }


}