<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;

class UserService
{
    public function __construct ( UserRepository $usuario_repository )
    {
        $this->usuario_repository = $usuario_repository;   
    }

    public function getUsuario ( $codigo_usuario )
    {
        $usuario = $this->usuario_repository->get( (int) $codigo_usuario );

        if (!$usuario) {
            throw new Exception("Usuário não encontrado");
        }

        return $usuario;
    }

}
