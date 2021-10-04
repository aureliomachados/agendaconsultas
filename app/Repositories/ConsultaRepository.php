<?php

namespace App\Repositories;

use App\Models\Consulta;
use App\Repositories\BaseRepository;

/**
 * Class ConsultaRepository
 * @package App\Repositories
 * @version April 26, 2021, 2:25 pm UTC
*/

class ConsultaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'paciente',
        'endereco',
        'telefone',
        'especialidade',
        'prioridade',
        'observacao'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Consulta::class;
    }
}
