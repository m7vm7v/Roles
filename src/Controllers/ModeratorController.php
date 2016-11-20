<?php

namespace m7vm7v\Roles\Controllers;

use App\Http\Controllers\Controller;

class ModeratorController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('moderator');
    }
    
    public function dashboard() {
        dd('Moderation');
    }
}
