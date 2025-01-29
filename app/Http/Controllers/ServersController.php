<?php

namespace App\Http\Controllers;

use App\Models\Servers;
use Illuminate\Http\Request;

class ServersController extends Controller
{
    public function index()
    {
        dd(Servers::all());
        return view('modules.servers.index');
    }
}
