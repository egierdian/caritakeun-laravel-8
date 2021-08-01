<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Caritakeun</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 col-12">
                <div class="card shadow-login-register">
                    <div class="card-header">
                        <h3 class="text-center" style="font-weight: 700;">Login</h3>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something it's wrong:
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for=""><strong>Email</strong></label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for=""><strong>Password</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                            <p class="text-center pt-3">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>