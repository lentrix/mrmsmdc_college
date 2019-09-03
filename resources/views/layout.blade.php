<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/jquery.js')}}"></script>

    <title>Mr. & Ms. MDC Intramurals 2019</title>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}">
                Mr. &amp; Ms. MDC Intramurals 2019
            </a>
            </div>

            <ul class="nav navbar-nav pull-right">
                @if(!auth()->guest())
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/logout')}}">Logout</a></li>
                @endif
            </ul>

        </div>
    </div>

</nav>

<div class="container">
    @include('messages')

    @yield('content')

    @yield('scripts')

    <p style="font-size: 0.8em; color: #888; text-align:center;">Copyright &copy; 2019. Benjie B. Lenteria<br>All rights reserved.</p>
</div>



</body>
</html>
