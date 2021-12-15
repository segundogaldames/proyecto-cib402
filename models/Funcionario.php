<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';
    protected $fillable = ['rut','nombre','email','rol_id','especialidad_id'];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }
}
