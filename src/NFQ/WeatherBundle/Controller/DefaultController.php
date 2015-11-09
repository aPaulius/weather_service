<?php

namespace NFQ\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="_test")
     * @Template()
     */
    public function testAction()
    {
        $weatherService = $this->get("nfq.weather");
        $weather = $weatherService->getForLocation(56, 25);

        return $weather;
    }
}
