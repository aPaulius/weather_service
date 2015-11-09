<?php

namespace NFQ\WeatherBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WeatherService extends Controller
{
    public function getForLocation($latitude, $longitude)
    {
        $forecastCall = 'https://api.forecast.io/forecast/49ae888acf33e60575c75ba7fb098150/';
        $forecastCall .= $latitude;
        $forecastCall .= ',';
        $forecastCall .= $longitude;

        $json = file_get_contents($forecastCall);

        $obj = json_decode($json);
        $currentWeatherF = $obj->currently->temperature;
        $currentWeatherC = round(($currentWeatherF - 32) * (5/9)) . ' degrees Celcius outside of NFQ.';
        return new Response($currentWeatherC);
    }
}
