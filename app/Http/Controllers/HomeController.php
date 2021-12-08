<?php

namespace App\Http\Controllers;

use App\Tables\UsersTable;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function users(): View
    {
        $table = (new UsersTable())->setup();

        return view('users.index', compact('table'));
    }
}
