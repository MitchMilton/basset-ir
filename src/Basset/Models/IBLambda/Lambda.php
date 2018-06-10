<?php

declare(strict_types=1);

namespace Basset\Models\IBLambda;

use Basset\Models\WeightedModel;

abstract class Lambda extends WeightedModel
{

	public function __construct()
    {
    	parent::__construct();
    }
    
    abstract protected function getLambda(): float;

}