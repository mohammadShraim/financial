<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\PointOfSales\PointOfSale;
use App\Models\Users\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var PointOfSale
     */
    private $pointOfSale;

    /**
     * Create a new controller instance.
     *
     * @param User $user
     * @param PointOfSale $pointOfSale
     */
    public function __construct(User $user, PointOfSale $pointOfSale)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->pointOfSale = $pointOfSale;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $users = $this->user->whereHas('PointOfSale', function ($query){
            $query->where('status', '!=', PointOfSale::$Blocked);
        })->with('PointOfSale')->get();

        if (Helper::isAdmin()){
            $pointOfSales = $this->pointOfSale->where('status', '!=', PointOfSale::$Blocked)->get();
        }

        return view('home');
    }
}
