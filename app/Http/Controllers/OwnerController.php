<?php
namespace App\Http\Controllers;

use Cron\Tests\DayOfWeekFieldTest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Owner;

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

        return redirect('/index');
    }

    public function edit($id)
    {
        $owner=Owner::find($id);

        return view('owners.edit')->with('owner',$owner);
    }

    public function update(Request $request,$id)
    {
        $owner=Owner::find($id);
        $owner->firstname=$request->get('firstname');
        $owner->lastname=$request->get('lastname');
        $owner->birth=$request->get('birth');
        $owner->save();

        return redirect('/index');
    }
}