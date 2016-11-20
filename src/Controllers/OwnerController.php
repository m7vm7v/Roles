<?php

namespace m7vm7v\Roles\Controllers;

use App\Http\Controllers\Controller;

class OwnerController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('owner');
    }
    
    public function dashboard() {
        dd('Owner');
    }
}
