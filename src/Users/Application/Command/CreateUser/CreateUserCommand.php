<?php

namespace App\Users\Application\Command\CreateUser;

use App\Shared\Application\Command\CommandInterface;

class CreateUserCommand implements CommandInterface
{
    public $email;
    public $password;

    /**
     * @param $email
     * @param $password
     */
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }


}
