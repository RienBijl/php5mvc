<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BandController extends Controller
{

    /**
     * Return bands index
     *
     * @since 0.1
     * @author Rien Bijl <me@rienbijl.nl>
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('band.list')
            ->with('query', 'All')
            ->with('bands', Band::query()->paginate(20));
    }

}
