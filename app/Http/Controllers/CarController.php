<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carsdata = Car::all();
        return view("cars", compact('carsdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("carspages.addnewcar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'avaliable' => 'required'

        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('carsImages'), $imageName);
        }        

        $car = new Car();
        $car->name = $request->input("name");
        $car->model = $request->input("model");
        $car->year = $request->input("year");
        $car->price = $request->input("price");
        $car->image = $imageName;
        $car->avaliable = $request->input("avaliable");

        $car->save();
        return redirect('/dashboard/cars')->with("success", "Car added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $car1 = Car::find($id);
        return view("carspages.cardetails", compact('car1'));
    }

    
    public function edit(int $id)
    {
        $car3 = Car::findOrFail($id);
        return view("carspages.carupdate", compact("car3"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'avaliable' => 'required' // Corrected field name to 'available'
        ]);

        $car = Car::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('carsImages'), $imageName);
            $car->image = $imageName;
        }

        $car->name = $request->input("name");
        $car->model = $request->input("model");
        $car->year = $request->input("year");
        $car->price = $request->input("price");
        $car->avaliable = $request->input("avaliable"); // Corrected field name to 'available'

        $car->save();

        return redirect('/dashboard/cars')->with("success", "Car updated successfully");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carf = Car::findOrFail($id);
        $carf->delete();
        return redirect('/dashboard/cars/')->with('success', 'Employé a été supprimé avec succès');
    }
}
