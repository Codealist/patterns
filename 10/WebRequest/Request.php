<?php

class RequestHelper {}

class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . " : registering the request <br/>";
        $this->process_request->process($req);
    }
}

class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . " : authentication the request <br/>";
        $this->process_request->process($req);
    }
}

class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . " : structuring the data of request <br/>";
        $this->process_request->process($req);
    }
}