@if($category['parent_id'] == 0)
    {{ $str = '' }}
    <option>{{ $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $category)
            {{ $str .= '->' }}
            @include('default.partials.admin.categories', $category)
        @endforeach
    @endif
@else
    <option>{{ $str . $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        @foreach($category['children'] as $category)
            {{ $str .= '->' }}
            @include('default.partials.admin.categories', $category)
        @endforeach
    @endif
@endif

