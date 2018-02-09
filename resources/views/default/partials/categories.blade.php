@if($category['parent_id'] == 0)
    <li><a href="{{ url($category['alias']) }}">{{ $category['category_name'] }}</a>
        @if (isset($category['children']) && count($category['children']) > 0)
            <ul>
                @foreach($category['children'] as $category)
                    @include('default.partials.categories', $category)
                @endforeach
            </ul>
        @endif
    </li>
@else
    <li class="sub"><a href="{{ url($category['alias']) }}">{{ $category['category_name'] }}</a>
        @if (isset($category['children']) && count($category['children']) > 0)
            <ul>
                @foreach($category['children'] as $category)
                    @include('default.partials.categories', $category)
                @endforeach
            </ul>
        @endif
    </li>
@endif

