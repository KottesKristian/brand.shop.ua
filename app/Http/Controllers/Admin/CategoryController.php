<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->createCategoryRout();
        $categories = $this->getCategories();
        //dd($categories);
        if (view()->exists('default.admin.category.list')) {
            return view('default.admin.category.list',[
                'categories' => $categories
            ]);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->getCategories();
        if (view()->exists('default.admin.category.add')) {
            return view('default.admin.category.add',[
                'categories' => $categories
            ]);
        }
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $parentCategory = $request->input('category');

        if (!empty($parentCategory)) {
            $parentId = $parentCategory;
        }else {
            $parentId = '0';
        }
        $data = [
            'category_name' => $request->input('name'),
            'category_alias' => $request->input('alias'),
            'parent_id' => $parentId,
        ];
        Category::create($data);
    }

    public function edit($id)
    {
        $categories = $this->getCategories();
        //dd($categories);
        if (view()->exists('default.admin.category.edit')) {
            return view('default.admin.category.edit',[
                'categories' => $categories
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
