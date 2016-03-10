<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        $owners=Owner::all();
        return view('owners.index')->with('owners',$owners);
    }
}