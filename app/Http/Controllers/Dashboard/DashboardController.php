<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Idea;

class DashboardController extends Controller
{
    public function index()
    {
        $ideas = Idea::query()->orderBy('created_at','DESC');

        if (request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' . request()->get('search', '') . '%');
        }

        return view('dashboard',['ideas' => $ideas->paginate(5)]);
    }

}
