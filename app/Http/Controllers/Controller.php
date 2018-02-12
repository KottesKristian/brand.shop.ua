<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function categoryRout()
    {

    }

    /**
     * @return array
     */
    public function getCategories()
    {
        $result = Category::with('children')->get()->toArray();
        $result = $this->buildTree($result);

        return $result;
    }


    /**
     * @param $res
     * @return array
     */
    protected function buildTree($res)
    {

        $levels = array();
        $tree = array();
        $cur = array();

        foreach ($res as $value) {

            $cur = &$levels[$value['category_id']];
            $cur['parent_id'] = $value['parent_id'];
            $cur['category_name'] = $value['category_name'];
            $cur['alias'] = $value['category_alias'];

            if ($value['parent_id'] == 0) {
                $tree[$value['category_id']] = &$cur;
            } else {
                $levels[$value['parent_id']]['children'][$value['category_id']] = &$cur;
            }

        }
        return $tree;

    }
}
