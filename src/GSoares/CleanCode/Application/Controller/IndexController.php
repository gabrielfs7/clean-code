<?php

namespace GSoares\CleanCode\Application\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class IndexController
{
    /**
     * @param Request $request
     */
    public function indexAction(Request $request)
    {
        exit('TEST...');
    }
}