<?php
/**
 * Created by PhpStorm.
 * User: KebryanSG
 * Date: 06/06/2019
 * Time: 11:06
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Descripcion
 * @property string $Estado
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 */
class Oficio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oficio';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'ID',
        'Descripcion',
        'Estado',
    ];


    public function datospersonales()
    {
        return $this->hasMany(\App\Models\DatosPersonales::class, 'IDOficio');
    }
}