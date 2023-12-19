<?php

namespace App\Users\Application\DTO;

use App\Users\Domain\Entity\User;

class UserDTO
{
    public string $ulid;
    public string $email;

    /**
     * @param string $ulid
     * @param string $email
     */
    public function __construct(string $ulid, string $email)
    {
        $this->ulid = $ulid;
        $this->email = $email;
    }

    public static function fromEntity(User $user): self
    {
        return new self($user->getUlid(), $user->getEmail());
    }
}
