<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{
    public function home()
    {
        return inertia('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
    public function menu()
    {
        return inertia('Menu', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
    public function shop()
    {
        return inertia('Shop', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'title' => 'Наш магазин',
            'breadcrumb' => 'Магазин',
        ]);
    }
    public function about()
    {
        return inertia('About', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
    public function contacts()
    {
        return inertia('Contacts', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
