<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'password',
    ];

    /**
     * Obtém a senha para a autenticação.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
}
