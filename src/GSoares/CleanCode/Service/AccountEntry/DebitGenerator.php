<?php

namespace GSoares\CleanCode\Service\AccountEntry;

use GSoares\CleanCode\Entity\AccountEntry;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class DebitGenerator extends AbstractGenerator
{

    /**
     * @param AccountEntry $accountEntry
     * @param $amount
     * @return AccountEntry
     */
    public function generate(AccountEntry $accountEntry, $amount)
    {
        // TODO: Validate account balance
        // TODO: Implement generate() method.
    }
}
