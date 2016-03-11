<?php
namespace App\Http\Controllers;

use Cron\Tests\DayOfWeekFieldTest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Owner;
use Illuminate\Support\Facades\Redirect;
use Psy\Exception\RuntimeException;
use App\Car;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index')->with('owners', $owners);
    }

    public function create(Request $request)
    {
        return view('owners.add');
    }

    public function store(Request $request)
    {
        $owner = new Owner();
        $owner->firstname = $request->get('firstname');
        $owner->lastname = $request->get('lastname');
        $owner->birth = $request->get('birth');
        $owner->save();

        return redirect('owners/index');
    }

    public function edit($id)
    {
        $owner = Owner::find($id);

        return view('owners.edit')->with('owner', $owner);
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->firstname=$request->get('firstname');
        $owner->lastname=$request->get('lastname');
        $owner->birth=$request->get('birth');
        $owner->save();

        return redirect('owners/index');
    }

    public function delete(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->delete();

        return redirect('owners/index');
    }

    public function view(Request $request, $id)
    {
        $cars = Car::where('owner_id', $id)->get();

        return view('owners/view')->with('cars', $cars);
    }

    public function createCar(Request $request, $id)
    {
        $ownerid = $id;
        return view('owners/car')->with('ownerid', $ownerid);
    }

    public function storeCar(Request $request, $id)
    {
        $car = new Car();
        $car->model = $request->get('model');
        $car->mark = $request->get('mark');
        $car->manufacture = $request->get('manufacture');
        $car->num = $request->get('num');
        $car->owner_id = $id;
        $car->save();

        return redirect('owners/index');
    }
}