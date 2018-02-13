@if($category['parent_id'] == 0)
    {{ $str = '' }}
    <option name="parentCategory" value="{{ $k }}">{{ $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $k=>$category)
            {{ $str .= '->' }}
            @include('default.partials.admin.categories', ['k'=>$k, 'category'=>$category])
        @endforeach
    @endif
@else
    <option name="parentCategory" value="{{ $k }}">{{ $str . $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $k=>$category)
            {{ $str .= '->' }}
            @include('default.partials.admin.categories', ['k'=>$k, 'category'=>$category])
        @endforeach
    @endif
@endif

