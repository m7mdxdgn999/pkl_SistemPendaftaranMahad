<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="Pendaftaran Mahad">
  <meta name="keywords" content="Pendaftaran Mahad, mahad, Login mahad">
  <meta name="author" content="Muhammad">

  <title>@yield('title')</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- boostrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- font awosem -->
  <script src="https://kit.fontawesome.com/0801180830.js" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
  <!-- menu bar start -->
  <div class="menu-btn">
    <i class="fas fa-bars"></i>
  </div>
  <!-- menu bar end -->

  <!-- side bar start -->
  <div class="side-bar">
    <div class="close-btn">
      <i class="fas fa-times"></i>
    </div>

    <!-- admin start -->
    <div class="admin-picture text-center">
      <img src="img/Logo_UIN_Syarif_Hidayatullah_Jakarta.png" alt="" class="rounded-circle">
    </div>
    <p class="admin-name">Ma'had Al-jamiah</p>
    <p class="admin-level">UIN Syarif Hidayatullah Jakarta</p>
    <!-- admin end -->

    <div class="menu">
      <div class="item">
        <a class="sub-btn" href="{{url('/pendaftaran')}}"><i class="fas fa-desktop"></i>Pendaftaran<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="#" class="sub-item">Mabna Syekh Nawawi</a>
          <a href="#" class="sub-item">Mabna Syekh Abdul Karim</a>
          <a href="#" class="sub-item">Mabna Syekh Hasanuddin</a>
          <a href="#" class="sub-item">Mabna Syarifah Mudaim</a>
          <a href="#" class="sub-item">Mabna Syarifah Khodijah</a>
          <a href="#" class="sub-item">Mabna Rusunawa</a>
        </div>
      </div>
      <div class="item"><a href="{{url('/admin')}}"><i class="fas fa-user-cog"></i>Admin Panel </a></div>
      <div class="item"><a href="{{url('/logout')}}"><i class="fas fa-power-off"></i>Log Out</a></div>

    </div>
  </div>
  <!-- side bar end -->


  @yield ('container main')


  <script type="text/javascript">
    $(document).ready(function () {
      //jquery for toggle sub menus
      $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function () {
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function () {
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>