<?php

namespace App\Models;

use CodeIgniter\Model;

class DiscoModel extends Model
{
    protected $table = 'discos';
    protected $primaryKey = 'nome';
    protected $allowedFields = ['nome', 'autoria', 'genero', 'lancamento'];
}
