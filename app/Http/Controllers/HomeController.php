<?php

namespace App\Http\Controllers;

use App\Models\CentrePoint;
use App\Models\Space;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $centrePoint = CentrePoint::get()->first();
        $spaces = Space::get();
        return view('home',[
            'spaces' => $spaces,
            'centrePoint' => $centrePoint
        ]);
    }
}
