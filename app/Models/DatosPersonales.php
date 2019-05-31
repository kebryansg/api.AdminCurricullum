<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $TipoIdentificacion
 * @property string $Identificacion
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Email
 * @property string $Direccion
 * @property string $PathCurricullum
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
        'Identificacion',
        'Nombres',
        'Apellidos',
        'Email',
        'Direccion',
        'PathCurricullum',
    ];
}
