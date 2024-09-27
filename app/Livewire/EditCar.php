<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car; // Import the Car model

class EditCar extends Component
{
    public $is_flash_showing = false;
    public $car_id;
    public $car_data;
    public $car_name;
    public $brand;
    public $capacity;
    public $fuel_type;

    public function mount($id)
    {
        $this->car_id = $id;
        // Retrieve the car data using the model
        $this->car_data = Car::where('id', $id)->first();

        if ($this->car_data) {
            $this->car_name = $this->car_data->car_name;
            $this->brand = $this->car_data->brand;
            $this->capacity = $this->car_data->engine_capacity;
            $this->fuel_type = $this->car_data->fuel_type;
        }
    }

   


        public function update()
{
    $this->validate([
        'car_name' => 'required',
        'brand' => 'required',
        'capacity' => 'required|integer',
        'fuel_type' => 'required',
    ]);

    try {
        Car::where('id', $this->car_id)->update([
            'car_name' => $this->car_name,
            'brand' => $this->brand,
            'capacity' => $this->capacity, // Use the correct column name
            'fuel_type' => $this->fuel_type,
        ]);
        $this->is_flash_showing = true;
        
        //$this->redirect('/cars',navigate:true);
        //return redirect()->to('/cars');
    } catch (\Exception $th) {
        dd($th); // Debug any errors
    }

        // if ($this->car_data) {
        //     $this->car_data->update([
        //         'car_name' => $this->car_name,
        //         'brand' => $this->brand,
        //         'engine_capacity' => $this->capacity,
        //         'fuel_type' => $this->fuel_type,
        //     ]);
        // }

        // session()->flash('message', 'Car updated successfully!');
    }

    public function render()
    {
        return view('livewire.edit-car');
    }
}
