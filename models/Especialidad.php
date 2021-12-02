<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';
    protected $fillable = ['nombre'];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }
}
