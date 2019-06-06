<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $IDOficio
 * @property string $TipoIdentificacion
 * @property string $TipoEntidad
 * @property string $Identificacion
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Email
 * @property string $Direccion
 * @property string $PathCurricullum
 *
 * @property \App\Models\Oficio $oficio
 */
class DatosPersonales extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'datos_personales';
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = [
        'ID',
        'TipoIdentificacion',
        'TipoEntidad',
        'Identificacion',
        'IDOficio',
        'Nombres',
        'Apellidos',
        'Email',
        'Direccion',
        'PathCurricullum',
    ];

    public function oficio()
    {
        return $this->belongsTo(\App\Models\Oficio::class, 'IDOficio');
    }
}
