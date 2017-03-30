<?php

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

interface BinaryComponentInterface extends MessageComponentInterface {
    function onBinaryMessage(ConnectionInterface $from, $msg);
}

