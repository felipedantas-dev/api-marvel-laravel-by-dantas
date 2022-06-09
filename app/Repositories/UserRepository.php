<?php

namespace App\Repositories;

use App\Models\Usuario;


class UserRepository
{

    public function get ( $codigo_usuario )
    {
        $data = Usuario::where('cd_usuario', $codigo_usuario)->first();
        
        if (!empty($data)) {
            $data->toArray();
        }

        return $data;
    }

}
