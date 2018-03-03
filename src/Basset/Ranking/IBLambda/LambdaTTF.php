<?php

namespace Basset\Ranking\IBLambda;



class LambdaTTF extends Lambda implements IBLambdaInterface
{

	public function __construct()
    {
    	parent::__construct();
    }
    
    public function getLambda(){

        return ($this->getTermFrequency()+1) / ($this->getNumberOfDocuments()+1);

    }

}