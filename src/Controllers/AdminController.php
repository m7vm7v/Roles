<?php

namespace m7vm7v\Roles\RoleControllers\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('admin');
    }
    
    public function dashboard() {
        dd('Administration');
    }
}
