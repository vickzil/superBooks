@include('inc.head')
    <body>
        @include('inc.navbar')
        <div class="main-content" id="panel">
            @include('inc.topNav')
            @yield('content')
        </div>
        @include('inc.script')

