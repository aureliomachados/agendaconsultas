<?php

namespace Database\Factories;

use App\Models\Consulta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consulta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paciente' => $this->faker->word,
        'endereco' => $this->faker->word,
        'telefone' => $this->faker->word,
        'especialidade' => $this->faker->word,
        'prioridade' => $this->faker->word,
        'observacao' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
