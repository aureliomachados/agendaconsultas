<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Consulta
 * @package App\Models
 * @version April 26, 2021, 2:25 pm UTC
 *
 * @property string $paciente
 * @property string $endereco
 * @property string $telefone
 * @property string $especialidade
 * @property string $prioridade
 * @property string $observacao
 */
class Consulta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'consultas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'paciente',
        'endereco',
        'telefone',
        'especialidade',
        'prioridade',
        'observacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paciente' => 'string',
        'endereco' => 'string',
        'telefone' => 'string',
        'especialidade' => 'string',
        'prioridade' => 'string',
        'observacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente' => 'required',
        'endereco' => 'required',
        'especialidade' => 'required',
        'prioridade' => 'required'
    ];

    
}
