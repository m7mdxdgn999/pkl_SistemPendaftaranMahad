<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Pendaftaran Mahad">
    <meta name="keywords" content="Pendaftaran Mahad, mahad, Login mahad">
    <meta name="author" content="Muhammad">

    <title>Admin Penel</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- font awosem -->
    <script src="https://kit.fontawesome.com/0801180830.js" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body >
    <!-- login -->
    <div class="container login-section">
        <!-- logo header sign in -->
        <div class="row header-sign-in">
            <div class="col-md-12 text-center  ">
                <img src="{{url('img/Logo_UIN_Syarif_Hidayatullah_Jakarta.png')}}" height="100px">
            </div>
        </div>
        <!-- akhir logo header sign in -->

        <!-- parent-->
        <div class="row ">
            <div class="col-md-10 offset-md-1 form-sign-in">

                <div class="row">
                    <!-- gambar -->
                    <div class="col-md-6 text-center d-none d-sm-block">
                        <img src="{{url('img/illustration_login.png')}}" height="276px" alt="">
                    </div>
                    <!-- akhir gambar -->

                    <!-- title -->
                    <div class="col-md-5">
                        <p class="title-form">Login</p>
                        <?php if (isset ($error)): ?>
                        <p style=" color:red; ">username / password salah </p>
                        <?php endif; ?>
                        <!-- akhir title -->

                        <!-- form sign in -->
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="title-input-primary-username">User Name</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya" id="username"
                                    aria-describedby="emailHelp" placeholder="Enter User Name" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="title-input-primary-username">Password</label>
                                <input type="password" class="form-control input-type-primary-tiketsaya" id="password"
                                    placeholder="Enter Password" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-primary-tiketsaya"
                                name="login">Login</button>
                        </form>
                        <!-- akhir form sign in -->
                    </div>



                </div>



            </div>
        </div>
        <!-- akhir parent -->
    </div>
    <!-- akhir login -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>