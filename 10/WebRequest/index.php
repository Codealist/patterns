<?php

$process = new AuthenticateRequest( new StructureRequest( new LogRequest( new MainProcess())));

$process->process(new RequestHelper());