<?php

abstract class ProcessRequest
{
    abstract function process(RequestHelper $req);
}

class MainProcess extends ProcessRequest
{
    function process(RequestHelper $req)
    {
        print __CLASS__ .  " : proceeding request <br/>";
    }
}

abstract class DecorateProcess extends ProcessRequest
{
    protected $process_request;

    public function __construct(ProcessRequest $pr)
    {
        $this->process_request = $pr;
    }
}

