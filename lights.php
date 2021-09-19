<?
// TMP solution for now
error_reporting(E_ALL);

require('mqtt.php');
require('configuration.php');

function publish_topics($topic, $message) {

}

if (@$_GET['c'] == 'l_g1_t') {
    $message = '{
    "mode": "white",
    "red": 0,
    "green": 0,
    "blue": 0,
    "gain": 100,
    "brightness": 25,
    "white": 0,
    "temp": 3000,
    "effect": 0,
    "turn": "toggle"
}';

    $mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
    $mqtt->debug = false;
    if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/03x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/04x01/color/0/set', $message, 0);
        $mqtt->close();
    } else {
        echo 'Error connecting to MQTT broker.<br>';
    }
} else if (@$_GET['c'] == 'l_all_t') {
    $message = '{
    "mode": "white",
    "red": 0,
    "green": 0,
    "blue": 0,
    "gain": 100,
    "brightness": 25,
    "white": 0,
    "temp": 3000,
    "effect": 0,
    "turn": "on"
}';

    $mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
    $mqtt->debug = false;
    if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/01x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/02x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/03x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/04x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x03/color/0/set', $message, 0);
        $mqtt->close();
    } else {
        echo 'Error connecting to MQTT broker.<br>';
    }
} else if (@$_GET['c'] == 'l_all_o') {
    $message = '{
    "mode": "white",
    "red": 0,
    "green": 0,
    "blue": 0,
    "gain": 100,
    "brightness": 25,
    "white": 0,
    "temp": 3000,
    "effect": 0,
    "turn": "off"
}';

    $mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
    $mqtt->debug = false;
    if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/01x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/02x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/03x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/04x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x03/color/0/set', $message, 0);
        $mqtt->close();
    } else {
        echo 'Error connecting to MQTT broker.<br>';
    }
} else if (@$_GET['c'] == 'l_all_rtg') {
    $message = '{
    "mode": "white",
    "red": 0,
    "green": 0,
    "blue": 0,
    "gain": 100,
    "brightness": 100,
    "white": 0,
    "temp": 3000,
    "effect": 0,
    "turn": "on"
}';

    $mqtt = new Bluerhinos\phpMQTT($MQTT_HOST, $MQTT_PORT, 'mqtt-forward-php_'.rand());
    $mqtt->debug = false;
    if ($mqtt->connect(true, null, $MQTT_USERNAME, $MQTT_PASSWORD)) {
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/01x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/01x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/02x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/02x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/03x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/03x03/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/1/04x01/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x02/color/0/set', $message, 0);
        $mqtt->publish('shellies/shellycolorbulb/living/2/04x03/color/0/set', $message, 0);
        $mqtt->close();
    } else {
        echo 'Error connecting to MQTT broker.<br>';
    }
} else {

}

?>