<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email',
        'password_hash',
        'role',
        'nombre',
        'empresa_id',
        'activo',
        'created_at',
        'updated_at'
    ];

    // Fechas automáticas
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Reglas de validación del Modelo
    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[usuarios.email,id,{id}]',
        'password_hash' => 'required',
        'role'          => 'required|in_list[admin,empresa,operador,visitante]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique'   => 'El correo electrónico ya se encuentra registrado.',
            'valid_email' => 'Ingrese una dirección de correo electrónico válida.'
        ]
    ];

    /**
     * Busca un usuario activo por su dirección de correo electrónico.
     *
     * @param string $email
     * @return array|null
     */
    public function findActiveByEmail(string $email)
    {
        return $this->where('email', $email)
                    ->where('activo', 1)
                    ->first();
    }
}
