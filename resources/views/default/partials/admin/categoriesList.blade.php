@if($category['parent_id'] == 0)
    <tr>
        <td class="product_name_admin">
            <h3><a href="{{ route('categoryEdit',['id'=>$k])  }}">{{ $category['category_name'] }}</a></h3>
        </td>
        <td class="product_admin_quantity">
            <h4>{{ $category['alias'] }}</h4>
        </td>
        <td class="ptoduct_image_admin">
            {{--@include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])--}}
        </td>
        <td class="product_admin_buttons">
            {{--<a href="">Редагувати категорію</a>--}}
            <a class="deleteCategory" href="">Видалити категорію</a>
        </td>
    </tr>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $k=>$category)
            @include('default.partials.admin.categoriesList', ['k'=>$k,'category'=>$category])
        @endforeach
    @endif
@else
    <tr>
        <td class="product_name_admin">
            <h3><a href="{{ route('categoryEdit',['id'=>$k])  }}">{{ $category['category_name'] }}</a></h3>
        </td>
        <td class="product_admin_quantity">
            <h4>{{ $category['alias'] }}</h4>
        </td>
        <td class="ptoduct_image_admin">
            {{--@include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])--}}
        </td>
        <td class="product_admin_buttons">
            {{--<a href="">Редагувати категорію</a>--}}
            <a class="deleteCategory" href="">Видалити категорію</a>
        </td>
    </tr>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $k=>$category)
            @include('default.partials.admin.categoriesList', ['k'=>$k,'category'=>$category])
        @endforeach
    @endif
@endif