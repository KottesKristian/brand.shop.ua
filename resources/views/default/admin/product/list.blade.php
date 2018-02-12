@extends('default.layouts.admin')

@section('header')
    @include('default.admin.header')
@endsection

@section('content')
    <div class="content">
        <a class="product_admin_add" href="{{ route('productAdd') }}">Додати товар</a>
        <table class="product_admin">
            <tr class="product_title_admin">
                <td>Назва</td>
                <td>Фото</td>
                <td>Кількість</td>
                <td>Опис</td>
                <td></td>
            </tr>
            <tr>
                <td class="product_name_admin">
                    <h3>T-Shirt</h3>
                </td>
                <td class="ptoduct_image_admin">
                    <img src="{{ asset('default/img/products/Women-T-Shirt.png') }}" alt="">
                </td>
                <td class="product_admin_quantity">
                    <h3>10</h3>
                </td>
                <td class="product_admin_describe">
                    <p>hjgklnfcbl kcgnbmlckn;lcfm/,mjkbd gjn;gxkjnhbdgnjcb lxcjvnbclvkbgkxffffff
                        bjklxcnbk.cv, mvnbx.c,mvnb.xm,cvnbkjlhx jkjhkjgcb
                    </p>
                </td>
                <td class="product_admin_buttons">
                    <a class="editCategory" href="">Редагувати товар</a>
                    <a class="deleteCategory" href="">Видалити товар</a>
                </td>
            </tr>
        </table>
    </div>
@endsection