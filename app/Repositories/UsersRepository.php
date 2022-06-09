<?php

namespace App\Repositories;

use App\Models\Users;


class UsersRepository
{

    public function getAll ()
    {
        $data = Users::get();
        
        if (!empty($data)) {
            $data->toArray();
        }

        return $data;
    }

    public function getOne ( $id )
    {
        $data = Users::where('cd_usuario', $id)->first();
        
        if (!empty($data)) {
            $data->toArray();
        }

        return $data;
    }

}
