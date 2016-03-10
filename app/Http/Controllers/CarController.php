<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Car;
use App\Owner;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $owners = Owner::all();

        return view('cars.index')->with('cars',$cars)->with('owners',$owners);
    }

    public function create(Request $request)
    {
        $owners = Owner::all();

        return view('cars.add')->with('owners',$owners);
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->model = $request->get('model');
        $car->mark = $request->get('mark');
        $car->manufacture = $request->get('manufacture');
        $car->num = $request->get('num');
        if ($request->get('owner') == "") {
            $car->owner_id=null;
        } else {
            $car->owner_id=$request->get('owner');
        }
        $car->save();

        return redirect('cars/index');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        $owners = Owner::all();

        return view('cars.edit')->with('car',$car)->with('owners',$owners);
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->model=$request->get('model');
        $car->mark=$request->get('mark');
        $car->manufacture=$request->get('manufacture');
        $car->num=$request->get('num');
        if ($request->get('owner') == "") {
            $car->owner_id=null;
        } else {
            $car->owner_id=$request->get('owner');
        }
        $car->save();

        return redirect('cars/index');
    }

    public function delete(Request $request, $id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect('cars/index');
    }
}
