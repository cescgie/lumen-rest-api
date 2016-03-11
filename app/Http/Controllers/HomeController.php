<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller {

    /**
     * @return mixed
     */
    public function index()
    {
        return File::get(base_path().'/resources/views/index.html');
    }

}
