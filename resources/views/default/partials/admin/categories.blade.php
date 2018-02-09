@if($category['parent_id'] == 0)
    <option>{{ $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        <option>
            @foreach($category['children'] as $category)
                @include('default.partials.admin.categories', $category)
            @endforeach
        </option>
    @endif
    {{--<li><a href="{{ url($category['alias']) }}">{{ $category['category_name'] }}</a>--}}
    {{--@if (isset($category['children']) && count($category['children']) > 0)--}}
    {{--<ul>--}}
    {{--@foreach($category['children'] as $category)--}}
    {{--@include('default.partials.categories', $category)--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--@endif--}}
    {{--</li>--}}
@else
    <option>{{ $category['category_name'] }}</option>
    @if (isset($category['children']) && count($category['children']) > 0)
        <option>
            @foreach($category['children'] as $category)
                @include('default.partials.admin.categories', $category)
            @endforeach
        </option>
        @endif
    @endif

