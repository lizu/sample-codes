<?php
$pid    = getmypid();
$server = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REP);
$server->bind("tcp://127.0.0.1:5555");

error_log("i am $pid");

while (true){
    $mes = $server->recv();
    error_log("[$mes]");
    $server->send("OK");
}
