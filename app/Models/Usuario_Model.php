<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuario_Model extends Model
{
    protected $table = 'info_usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'pass','perfil_id','baja','usuario'];

    
}