<?php

namespace App\Livewire;

use Livewire\Component;

class AddCar extends Component
{

    public $car_name = '';
    public $brand = '';
    public $capacity = '';
    public $fuel_type = '';

    public function savecar(){
    $this->validate([
        'car_name' => 'required',
        'brand' => 'required',
        'capacity' => 'required',
        'fuel_type' => 'required',
    ]);



    }
    public function render()
    {
        return view('livewire.add-car');
    }
}
