<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.frontend.head')
<body>
    @include('layouts.partials.frontend.nav')
    
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.partials.frontend.script')
    @include('layouts.partials.frontend.toats')
    @include('sweetalert::alert')
</body>
</html>