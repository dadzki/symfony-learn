<?php

namespace App\Users\Application\Query\FindUserByEmail;

use App\Shared\Application\Query\QueryHandlerInterface;
use App\Users\Application\DTO\UserDTO;
use App\Users\Domain\Repository\UserRepositoryInterface;

class FindUserByEmailHandler implements QueryHandlerInterface
{
    private UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function __invoke(FindUserByEmailQuery $query): ?UserDTO
    {
        $user = $this->userRepository->findByEmail($query->email);
        if (!$user) {
            return null;
        }

        return UserDTO::fromEntity($user);
    }
}
