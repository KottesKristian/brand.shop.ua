@extends('default.layouts.admin')

@section('header')
    @include('default.admin.header')
@endsection

@section('content')
    <div class="content">
        <form class="form-horizontal form_add_product">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Назва товару</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Введіть назву">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Кількість</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Введіть кількість">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Опис товару</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="inputPassword3" rows="3" placeholder="Опис"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="sel1" class="col-sm-4 control-label">Виберіть категорію</label>
                <div class="col-sm-8">
                    <select class="form-control" id="sel1">
                        @if(isset($categories) && count($categories)>0)
                            @foreach ($categories as $category)
                                @include('default.partials.admin.categories', $category)
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label">Фото</label>
                <div class="col-sm-8">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default pull-right">Зберегти</button>
                </div>
            </div>
        </form>
        <!-- <form class="form_add_product" method="post" action="">
            <p><input type="text" name="name" value="" placeholder="Назва товару"></p>
            <p><input type="text" name="quantity" value="" placeholder="Кількість"></p>
            <p><textarea name="describe" id="" cols="30" rows="10" placeholder="Опис"></textarea></p>
            <p><input type="text" name="category" value="" placeholder="Виберіть категорію"></p>
            <p><input type="text" name="photo" value="" placeholder="Виберіть фото"></p>
            <p class="submit"><input type="submit" name="commit" value="Зберегти"></p>
        </form> -->
    </div>
@endsection


