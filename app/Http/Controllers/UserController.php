<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Returns dashboard view
     *
     * @since 0.1
     * @author Rien Bijl <me@rienbijl.nl>
     * @return Application|Factory|View
     */
    public function dashboard()
    {
        return view('user.dashboard')
            ->with('user', auth()->user());
    }

    /**
     * Returns band list
     *
     * @since 0.1
     * @author Rien Bijl <me@rienbijl.nl>
     * @return Application|Factory|View
     */
    public function bands()
    {
        return view('band.list')
            ->with('query', 'owned by me')
            ->with('bands', User::query()->findOrFail(auth()->id())->bands()->paginate(20));
    }

}
