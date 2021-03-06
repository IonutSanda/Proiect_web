<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('../resources/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 main-section pt-2">
                <span style="font-size:20px;color:#333 !important;">Salut, {{auth()->user()->name;}}!</span>

                @if (auth()->user()->admin)
                <a href="{{ route('home') }}"
                    style="font-size:20px;color:#fff !important; background-color:rgb(0, 183, 255) !important;padding: 10px;margin-left:20px;">
                    Administrare Magazin
                </a>
                @endif
                <a href="{{ route('logout') }}"
                    style="font-size:20px;color:#fff !important; background-color:rgb(0, 183, 255) !important;padding: 10px;margin-left:20px;"
                    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{
    route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" datatoggle="dropdown"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cos
                        <span class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="badge badge-pill badge-danger">{{ count((array)
session('cart')) }}</span>
                            </div>
                            <?php $total = 0 ?>
                            @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">

                                <p>Total: <span class="text-info">$ {{ $total
}}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{ $details['photo'] }}" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detailproduct">
                                <p>{{ $details['name'] }}</p>
                                <span class="price text-info"> ${{ $details['price']
}}</span> <span class="count"> Cantitate:{{ $details['quantity']
}}</span>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center
checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btnblock">Afisare tot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container page">
        @yield('content')
    </div>
    @yield('scripts')
</body>

</html>
