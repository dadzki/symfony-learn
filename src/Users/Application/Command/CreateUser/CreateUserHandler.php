<?php

namespace App\Users\Application\Command\CreateUser;

use App\Shared\Application\Command\CommandHandlerInterface;
use App\Users\Domain\Factory\UserFactory;
use App\Users\Domain\Repository\UserRepositoryInterface;

class CreateUserHandler implements CommandHandlerInterface
{
    private UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param CreateUserCommand $command
     * @return string ID созданного пользователя
     */
    public function __invoke(CreateUserCommand $command): string
    {
        $user = (new UserFactory())->create($command->email, $command->password);

        $this->userRepository->add($user);

        return $user->getUlid();
    }
}
