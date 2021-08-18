<?
// TMP solution for now
error_reporting(E_ALL);

require('mqtt.php');
require('configuration.php');

$mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
$mqtt->debug = true;
if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
    $mqtt->publish('testtopic', 'test message 1', 2);
    $mqtt->close();
} else {
    echo 'Error connecting to MQTT broker.<br>';
}
?>