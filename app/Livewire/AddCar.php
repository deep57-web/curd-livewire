<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class AddCar extends Component
{
    public $car_name = '';
    public $brand = '';
    public $capacity = '';
    public $fuel_type = '';

    public function savecar()
    {
        $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'capacity' => 'required|integer',
            'fuel_type' => 'required',
        ]);
    
        try {
            Car::create([
                'car_name' => $this->car_name,
                'brand' => $this->brand,
                'capacity' => $this->capacity,
                'fuel_type' => $this->fuel_type,
            ]);
    
            // Corrected redirect method
            return redirect('/cars'); // Remove 'navigate:true'
        } catch (\Exception $e) {
            dd($e); // For debugging
        }
    }
    

    public function render()
    {
        return view('livewire.add-car');
    }
}
