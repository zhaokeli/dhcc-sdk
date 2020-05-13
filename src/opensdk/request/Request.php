<?php

namespace dhcc\opensdk\request;

abstract class Request
{
    protected $params = [

    ];

    abstract public function getApiName(): string;
    
    public function getParams()
    {
        return $this->params;
    }

}