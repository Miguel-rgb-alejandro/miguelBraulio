<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucione
 *
 * @property $id
 * @property $id_prestamos
 * @property $fecha_devolucion_real
 *
 * @property Prestamo $prestamo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Devolucione extends Model
{
    
    static $rules = [
		'id_prestamos' => 'required',
		'fecha_devolucion_real' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_prestamos','fecha_devolucion_real'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prestamo()
    {
        return $this->hasOne('App\Models\Prestamo', 'id', 'id_prestamos');
    }
    

}
