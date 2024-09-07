<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
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
     * Fetch user
     * (You can extract this to repository method).
     *
     * @param  $username
     * @return mixed
     */

    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return Response
     */
    public function show()
    {
        $user = Auth::user();

        return view('booking');
    }

}
