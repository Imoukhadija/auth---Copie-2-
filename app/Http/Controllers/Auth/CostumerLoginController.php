<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class CostumerLoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest:costumer,costumer/dashboard')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.costumer.login');
    }
    protected function guard()
    {
        return \Auth::guard("costumer");
    }
}
