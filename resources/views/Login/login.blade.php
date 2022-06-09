<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Oryzaes Outdoor
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="text-center">
    <div class="container" id="login">
        <div class=" row justify-content-end">
            <div class="col-5 border">
                <main class="form-signin">
                    <form action="{{ route('postlogin') }}" method="post">
                        {{ csrf_field() }}
                        <img class="mb-4" src="../assets/img/logo.png" alt="" width="90" height="60">
                        <h5 class="h5 mb-3 fw-normal">Please sign in</h5>

                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <button class="w-50 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
