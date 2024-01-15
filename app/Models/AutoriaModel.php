<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoriaModel extends Model
{
    protected $table = 'autoria';
    protected $primaryKey = 'nomeAutoria';
    protected $allowedFields = ['nomeAutoria'];
}
