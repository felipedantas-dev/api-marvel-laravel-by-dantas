<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $table = 'tb_usuario';

    protected $fillable = [
        'cd_usuario',
        'nm_usuario',
        'pw_senha',
        'ds_usuario',
        'nm_completo_usuario',
        'ds_email',
        'cd_telefone',
        'cd_status',
        'ic_acesso',
        'im_foto',
        'path_file'
    ];

}