<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'nom' => $this->faker->firstName(),
                'prenom' => $this->faker->lastName(),                            
                'email' => $this->faker->unique()->safeEmail(),
                'adresse' => $this->faker->address(),
                
            ];
    }
}
