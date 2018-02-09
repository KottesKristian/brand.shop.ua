<?php


Route::group([], function () {
    Route::resource('/', 'IndexController', [

        'only' => ['index'],
        'names' => [
            'index' => 'home'
        ]
    ]);
    $result = DB::table('categories')->pluck('category_alias')->toArray();
    //dd($result);

    if (!empty($result)) {
        foreach ($result as $res) {
            Route::get('/'.$res,['uses' => 'ProductController@index']);
            //echo $res.'---';
        }
    }

//    //Route::get('{slug}/{slug2?}','DynamicRouteController@index');
//    Route::get('/{pages}', function ($pages) {
//        $result = DB::table('categories')->pluck('category_alias');
////        dd($result);
//        if ($pages == 'admin'){
//            return redirect()->route('login');
//            //abort('404');
//        }
//    })->where('pages','[a-zA-Z0-9]+');
});


Route::group(['prefix'=>'admin'], function () {

    Route::get('/login', ['as' => 'login','uses' => 'Admin\LoginController@showLoginForm']);
    Route::post('/login', ['as' => 'adminLogin','uses' => 'Admin\LoginController@login']);
    Route::post('/logout', 'Admin\LoginController@logout')->name('logout');


    Route::group(['prefix'=>'/','middleware'=>['admin','auth']], function () {

        Route::get('/', ['uses'=>'Admin\IndexController@index']);


        //admin/pages
        Route::group(['prefix'=>'product'], function () {

            Route::get('/',['uses'=>'Admin\ProductController@index','as'=>'productList']);
            Route::get('/add',['uses'=>'Admin\ProductController@create','as'=>'productAdd']);
            Route::post('/add',['uses'=>'Admin\ProductController@index']);
            Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);

        });
//
//        //admin/portfolios
//        Route::group(['prefix'=>'portfolios'], function () {
//
//            Route::get('/',['uses'=>'PortfolioController@execute','as'=>'portfolio']);
//            Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
//            Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);
//
//        });
//
//        //admin/portfolios
//        Route::group(['prefix'=>'services'], function () {
//
//            Route::get('/',['uses'=>'IndexController@index','as'=>'services']);
//            Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@execute','as'=>'serviceAdd']);
//            Route::match(['get','post','delete'],'/edit/{service}',['uses'=>'ServiceEditController@execute','as'=>'serviceEdit']);
//
//        });

    });
});
//Route::get('admin/login',['uses'=>'Admin\LoginController@showLoginForm','as'=>'adminLogin']);
//Route::post('admin/login',['uses'=>'Auth\LoginController@login','as'=>'']);
//Route::get('admin/logout',['uses'=>'Auth\LoginController@logout']);
//Route::get('admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
//Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
//Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

//Auth::routes();

