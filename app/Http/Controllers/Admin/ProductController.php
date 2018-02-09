<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        if (view()->exists('default.admin.product.list')) {
            return view('default.admin.product.list');
        }
    }

    public function create()
    {
        $categories = $this->getCategories();
        if (view()->exists('default.admin.product.add')) {
            return view('default.admin.product.add',[
                'categories' => $categories
            ]);
        }
    }

    public function store(Request $request)
    {

    }
}
