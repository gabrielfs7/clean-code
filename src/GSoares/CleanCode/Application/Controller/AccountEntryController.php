<?php

namespace GSoares\CleanCode\Application\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class AccountEntryController extends AbstractController
{
    /**
     * @param Request $request
     */
    public function listAction(Request $request)
    {
        exit('>>>>>: ' . __CLASS__);
    }
}