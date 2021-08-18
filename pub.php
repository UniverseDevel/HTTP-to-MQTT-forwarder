<?php
require('mqtt.php');
//require('config.php');

if (!isset($_GET['b']) || !isset($BROKER[$_GET['b']])) {
    throw new Exception('Broker is not provided or such broker does not exist.');
}

if (!isset($_GET['t'])) {
    throw new Exception('Topic is not provided.');
}

if (!isset($_GET['p'])) {
    throw new Exception('Payload is not provided.');
}

require('mqtt.php');
require('configuration.php');

$mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
$mqtt->debug = true;
if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
    $mqtt->publish('testtopic', 'test message 1', 1);
    $mqtt->close();
} else {
    echo 'Error connecting to MQTT broker.<br>';
}
?>