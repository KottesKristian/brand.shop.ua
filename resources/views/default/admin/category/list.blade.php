@extends('default.layouts.admin')

@section('header')
    @include('default.admin.header')
@endsection

@section('content')
<div class="content">
    <a class="product_admin_add" href="{{ route('categoryAdd') }}">Додати категорію</a>

    {{--<div class="nav content">--}}
        {{--<ul class="admin-menu">--}}
            {{--@if (isset($categories) && count($categories) > 0)--}}
                {{--@foreach ($categories as $k=>$category)--}}
                    {{--@include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--</ul>--}}
    {{--</div>--}}
    <table class="product_admin">
        <tr class="product_title_admin">
            <td>Назва категорії</td>
            <td>Аліас</td>
            <td>Шлях</td>
            <td></td>
        </tr>
        @if (isset($categories) && count($categories) > 0)
            @foreach ($categories as $k=>$category)
                @include('default.partials.admin.categoriesList', ['k'=>$k,'category'=>$category])
            @endforeach
        @endif
    </table>
</div>
@endsection