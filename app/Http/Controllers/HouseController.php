<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        $houses = $this->getAllHouses();
        $maxId = $this->getMaxId();

        return view('welcome', ['houses' => $houses, 'maxId' => $maxId]);
    }
    private function getAllHouses()
    {
        $houses = House::all();
        return $houses;
    }
    private function getMaxId()
    {
        $maxId = House::max('id');
        return $maxId;
    }
}
?>