<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $id_libro
 * @property $id_usuario
 * @property $fecha_prestamo
 * @property $fecha_devolucion
 *
 * @property Devolucione[] $devoluciones
 * @property Libro $libro
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'id_libro' => 'required',
		'id_usuario' => 'required',
		'fecha_prestamo' => 'required',
		'fecha_devolucion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_libro','id_usuario','fecha_prestamo','fecha_devolucion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devoluciones()
    {
        return $this->hasMany('App\Models\Devolucione', 'id_prestamos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'id_libro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    

}
