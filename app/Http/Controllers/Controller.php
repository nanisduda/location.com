<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function new()
    {
        return view('new', ['action' => 'new']);
    }

    public function help()
    {
        return view('help', ['action' => 'help']);
    }
    public function service()
    {
        return view('service', ['action' => 'service']);
    }
}
