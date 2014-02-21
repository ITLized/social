<?php

namespace Itlized\Bundle\SocialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SocialController extends Controller
{
    /**
     * Action to handle social connect request
     *
     * @param Request $request
     * @param $provider
     */
    public function connectAction(Request $request,$provider)
    {
        $this->preProcess($request);
        /** @var \Hybrid_Auth $hybridAuth */
        $hybridAuth = $this->get('hybridauth');
        $adapter = $hybridAuth->authenticate($provider);
        return $this->postProcess($request, $adapter);
    }

    /**
     * End point action to communicate with social networks
     */
    public function authAction()
    {
        \Hybrid_Endpoint::process();
    }

    /**
     * Things to do BEFORE connecting.
     * Extend this class then overwrite this method to implement your own logic
     *
     * @param Request $request
     */
    protected function preProcess(Request $request)
    {

    }

    /**
     * Things to do AFTER connected.
     * Extend this class then overwrite this method to implement your own logic
     *
     * @param Request $request
     * @param \Hybrid_Provider_Adapter $adapter
     */
    protected function postProcess(Request $request, \Hybrid_Provider_Adapter $adapter)
    {
        $user = $adapter->getUserProfile();
        print_r($user);
        die;
    }
}
