<?php

namespace App\Users\Application\Query\FindUserByEmail;

use App\Shared\Application\Query\QueryInterface;

class FindUserByEmailQuery implements QueryInterface
{
    public $email;

    /**
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }


}
