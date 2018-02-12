{{--@if($category['parent_id'] == 0)--}}

    {{--<li><a href="{{ route('categoryEdit',['id'=>$k])  }}">{{ $category['category_name'] }}</a>--}}
        {{--@if (isset($category['children']) && count($category['children']) > 0)--}}
            {{--<ul>--}}
                {{--@foreach($category['children'] as $k=>$category)--}}
                    {{--@include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
    {{--</li>--}}
{{--@else--}}
    {{--<li class="sub"><a href="{{ route('categoryEdit',['id'=>$k]) }}">{{ $category['category_name'] }}</a>--}}
        {{--@if (isset($category['children']) && count($category['children']) > 0)--}}
            {{--<ul>--}}
                {{--@foreach($category['children'] as $k=>$category)--}}
                    {{--@include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
    {{--</li>--}}
{{--@endif--}}


            @if (isset($category['children']) && count($category['children']) > 0)
                @foreach($category['children'] as $k=>$category)
                    <h4>{{ $category['category_name'] }}</h4>
                    @include('default.partials.categoriesTree', ['k'=>$k,'category'=>$category])
                @endforeach
            @endif


