<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Food;
use App\Models\Region;
use App\Models\ThingsToDo;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('regions', compact('regions'));
    }
    public function kandy()
    {
        $attractions = Attraction::where('region_id', 1)->first(); 
        $thingsToDo = ThingsToDo::where('region_id', 1)->first();
        $foods = Food::where('region_id', 1)->get();
        return view('kandy.kandy', compact('attractions','thingsToDo','foods'));
    }
    public function downSouth()
    {
        $attractions = Attraction::where('region_id', 2)->first();
        $thingsToDo = ThingsToDo::where('region_id', 2)->first();
        $foods = Food::where('region_id', 2)->get(); 
        return view('down-south.down-south', compact('attractions','thingsToDo','foods'));
    }
    public function nuwaraEliya()
    {
        $attractions = Attraction::where('region_id', 3)->first();
        $thingsToDo = ThingsToDo::where('region_id', 3)->first(); 
        $foods = Food::where('region_id', 3)->get();
        return view('Nuwara-eliya.Nuwara-eliya', compact('attractions','thingsToDo','foods'));
    }
    public function ella()
    {
        $attractions = Attraction::where('region_id', 4)->first();
        $thingsToDo = ThingsToDo::where('region_id', 4)->first();
        $foods = Food::where('region_id', 4)->get(); 
        return view('ella.ella', compact('attractions','thingsToDo','foods'));
    }
    public function sigiriyaDambulla()
    {
        $attractions = Attraction::where('region_id', 5)->first();
        $thingsToDo = ThingsToDo::where('region_id', 5)->first();
        $foods = Food::where('region_id', 5)->get(); 
        return view('sigiriya.sigiriya', compact('attractions','thingsToDo','foods'));
    }
    public function anuradhapura()
    {
        $attractions = Attraction::where('region_id', 7)->first();
        $thingsToDo = ThingsToDo::where('region_id', 7)->first();
        $foods = Food::where('region_id', 7)->get(); 
        return view('Anuradhapura.Anuradhapura', compact('attractions','thingsToDo','foods'));
    }
    public function trincomaleeNilaveli()
    {
        $attractions = Attraction::where('region_id', 8)->first();
        $thingsToDo = ThingsToDo::where('region_id', 8)->first();
        $foods = Food::where('region_id', 8)->get(); 
        return view('Trincomalee.Trincomalee', compact('attractions','thingsToDo','foods'));
    }
    public function arugamBayEastCoast()
    {
        $attractions = Attraction::where('region_id', 6)->first();
        $thingsToDo = ThingsToDo::where('region_id', 6)->first();
        $foods = Food::where('region_id', 6)->get(); 
        return view('Arugam Bay.Arugam Bay', compact('attractions','thingsToDo','foods'));
    }

    public function colombo()
    {
        $attractions = Attraction::where('region_id', 9)->first();
        $thingsToDo = ThingsToDo::where('region_id', 9)->first();
        $foods = Food::where('region_id', 9)->get(); 
        return view('Colombo.Colombo', compact('attractions','thingsToDo','foods'));
    }

    public function jaffna()
    {
        $attractions = Attraction::where('region_id', 10)->first();
        $thingsToDo = ThingsToDo::where('region_id', 10)->first();
        $foods = Food::where('region_id', 10)->get(); 
        return view('Jaffna.Jaffna', compact('attractions','thingsToDo','foods'));
    }
    
}
