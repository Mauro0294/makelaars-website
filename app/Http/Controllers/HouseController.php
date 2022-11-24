<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::all();
        $maxId = House::max('id');

        return view('index', ['houses' => $houses, 'maxId' => $maxId]);
    }
    public function houseDetails()
    {
        $house = House::find(request('id'));
        return view('housedetails', ['house' => $house]);
    }
}
?>