#include "dht.h"
const int dht_apin = A1;
const int sensor_pin = A0; 
dht DHT;
 
void setup(){
 
  Serial.begin(9600);
 
}
 
void loop(){
  
    DHT.read11(dht_apin);
    float moisture_percentage;
    int sensor_analog;
    sensor_analog = analogRead(sensor_pin);
    moisture_percentage = ( 100 - ( (sensor_analog/1023.00) * 100 ) );
    Serial.println(moisture_percentage);
    Serial.println(DHT.humidity);
    Serial.println(DHT.temperature); 
    delay(5000);
}
