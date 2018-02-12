@extends('default.layouts.admin')

@section('header')
    @include('default.admin.header')
@endsection

@section('content')
    <div class="content">
        <form class="form-horizontal form_add_product" method="post" action="{{ url('admin/category/add') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Назва категорії</label>
                <div class="col-sm-8">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Введіть назву">
                </div>
            </div>
            <div class="form-group">
                <label for="alias" class="col-sm-4 control-label">Введіть аліас</label>
                <div class="col-sm-8">
                    <input name="alias" type="text" class="form-control " id="alias" placeholder="Введіть аліас" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="category" class="col-sm-4 control-label">Виберіть категорію</label>
                <div class="col-sm-8">
                    <select class="form-control" id="category">
                        <option name="parent_category"></option>
                        @if(isset($categories) && count($categories)>0)
                            @foreach ($categories as $category)
                                @include('default.partials.admin.categories', $category)
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="checkAlias" class="col-sm-4 control-label">Аліас</label>
                <div class="col-sm-8">
                    <input type="checkbox"  id="checkAlias" placeholder="Введіть кількість">
                </div>
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


