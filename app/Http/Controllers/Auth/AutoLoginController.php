<?php namespace App\Http\Controllers;

class AutoLoginController extends Controller
{
  /**
   * Create a new controller instance.
   * DashboardHotelController constructor.
   */
  public function __construct() {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   * @return \Illuminate\Http\Response
   */
  public function load() {

      return view('login');
  }
}