<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    //Datos para el seeder
    private $nombre= ["Proyecto 10","Proyecto 9","Proyecto 7","Seminario S3"];
    private $tipo=["proyecto","proyecto","proyecto","seminario"];
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Seleccionamos un proyecto/seminario de forma aleatoria
        $clave= array_rand($this->nombre);
        return [
            'nombre' => $this->nombre[$clave],
            'tipo' => $this->tipo[$clave]
        ];
    }
}
