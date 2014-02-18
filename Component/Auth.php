<?php

namespace Itlized\Bundle\SocialBundle\Component;

use \Hybrid_Auth;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class Auth extends Hybrid_Auth
{
    /**
     * @param $configs
     * @param Router $router
     */
    public function __construct($configs, Router $router)
    {
        $configs['base_url'] = $router->generate($configs['routing'], array(), $router::ABSOLUTE_URL);
        parent::__construct($configs);
    }
} 