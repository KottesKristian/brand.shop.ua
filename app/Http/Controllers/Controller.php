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

    public function createCategoryRout()
    {
//        $result = Category::pluck('category_alias','category_id')->toArray();
        $result = Category::with('children')->get()->toArray();
        //dd($result);
        $result = $this->buildTree($result);
        $result = $this->categoryRout($result,'shoes');
        dd($result);
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
            $cur['rout'] = $value['category_rout'];

            if ($value['parent_id'] == 0) {
                $tree[$value['category_id']] = &$cur;
            } else {
                $levels[$value['parent_id']]['children'][$value['category_id']] = &$cur;
            }

        }
        return $tree;

    }

    protected function categoryRout($res, $val)
    {
        $levels = array();
        $tree = array();
        $cur = array();
        $rout = '';
        $alias = $val;
        $bool = true;

        foreach ($res as $value) {

            if ($value['alias'] != $alias) {

            } else {
                $rout = 'rout';
            }
            if ($value['alias'] != $alias) {
                if (isset($value['children']) && count($value['children']) > 0) {
                    $this->categoryRout($value['children'],$alias);
                }
            } else {
                if ($value['parent_id'] != 0) {
                    $rout = '/' . $value['alias'];
//                    dd($rout);
                    break;

                } else {
                    $rout = '/' . $value['alias'];

                }
                break;
            }
//            if ($value['alias'] != $alias) {
//                break;
//            }
//            else {
//                $rout = 'rout';
//            }
//            $cur = &$levels[$value['category_id']];
//            $cur['parent_id'] = $value['parent_id'];
//            $cur['category_name'] = $value['category_name'];
//            $cur['alias'] = $value['category_alias'];
//            $cur['rout'] = $value['category_rout'];
//
//            if ($value['parent_id'] == 0) {
//                $tree[$value['category_id']] = &$cur;
//            } else {
//                $levels[$value['parent_id']]['children'][$value['category_id']] = &$cur;
//            }
        }
        return $rout;
    }

}
