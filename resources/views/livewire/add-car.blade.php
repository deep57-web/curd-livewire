<div class="container">
    <div class="card">
        <div class="card-header">
             <div class="row">
                <div class="col">
                    <h2>Laravel 11.x + Livewire 3.x CRUD</h2>
    

                </div>
                <div class="col">

                    <a href="/cars" wire:navigate class="btn btn-success btn-sm float-end">Car List</a>
                </div>
             </div>

                </div>
        <div class="card-body">

            
        </div>
        <div class="card-body">
            <form wire:submit="savecar"> {{-- Savecar is the function that will save our car to database. let's create this --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Car Name</label>
                        <input type="text" wire:model="car_name" class="form-control" name="car_name" id="car_name" placeholder="Enter Car Name">
                        @error('car_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="brand" class="form-label">Car Brand</label>
                        <input type="text" wire:model="brand" class="form-control" name="brand" id="brand" placeholder="Enter Car Brand">
                        @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Engine Capacity</label>
                        <input type="number" wire:model="capacity" class="form-control" name="capacity" id="capacity" placeholder="Enter Engine Capacity">
                        @error('capacity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fuel_type" class="form-label">Fuel Type</label><br>
                        <select name="fuel_type" wire:model="fuel_type" id="fuel_type" class="for
                        m-select">
                            <option value="">Select Fuel Type</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Electricity">Electricity</option>
                        </select>
                        @error('fuel_type')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                   <button type="submit" class="btn btn-success btn-sm">Save</button>
            </form>
        </div>
    </div>
   
</div>
