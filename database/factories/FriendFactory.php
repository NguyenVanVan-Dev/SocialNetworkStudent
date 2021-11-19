<?php

namespace Database\Factories;
use App\Models\Friend;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class FriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Friend::class;
    public function definition()
    {
        return [
            'id_userFrom' => 101,
            'id_userTo' => rand(1,100),
            'status' => 'Accepted',
            'accepted' => 'No', 
        ];
    }
}
