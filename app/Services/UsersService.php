<?php

namespace App\Services;

use App\Repositories\UsersRepository;
use Exception;

class UsersService
{
    public function __construct ( UsersRepository $user_repository )
    {
        $this->users_repository = $user_repository;   
    }

    public function getUsers ()
    {
        $users = $this->users_repository->getAll();

        if (!$users) {
            throw new Exception("Users not found");
        }

        return $users;
    }

    public function getUser ( $id )
    {
        $user = $this->users_repository->getOne( $id );

        if (!$user) {
            throw new Exception("User not found");
        }

        return $user;
    }

}
