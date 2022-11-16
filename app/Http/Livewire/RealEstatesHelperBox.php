<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RealEstatesHelperBox extends Component
{

    public $city_name;
    public $city_code;


    public $city_id;
    public $neighborhood_name;

    public $property_type_id;
    public $property_type_name;

    public $property_status_id;
    public $property_status_name;


    public function render()
    {
        return view('livewire.real-estates-helper-box');
    }

    public function saveCity()
    {
    }

    public function neighborhoodSave()
    {
    }

    public function propertyStatusSubmit()
    {
    }

    public function propertyTypeSubmit()
    {
    }
}
