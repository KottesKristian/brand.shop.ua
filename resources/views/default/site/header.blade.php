<div class="header-top">
    <div class="content">
        <div class="logo"></div>
        <div class="basket">
            <p><a href="basket.html">$300</a></p>
        </div>
        <div class="login">
            <a href="login.html" title="Вхід"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i></a>
            <a href="registration.html" title="Реєстрація"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<div class="header-menu">
    <div class="nav content">
        <ul class="menu-list">
            @if (isset($categories) && count($categories) > 0)
                @foreach ($categories as $category)
                    @include('default.partials.categories', $category)
                @endforeach
            @endif
        </ul>
    </div>
</div>
