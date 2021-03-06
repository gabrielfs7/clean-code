<?php

namespace GSoares\CleanCode\Service\Account;

use GSoares\CleanCode\Entity\Account;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
interface SaverInterface
{

    /**
     * @param Account $account
     * @return Account
     */
    public function save(Account $account);
}
