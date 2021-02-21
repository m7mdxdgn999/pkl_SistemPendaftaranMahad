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
        <a class="sub-btn" href="#"><i class="fas fa-desktop"></i>Pendaftaran<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="{{ route('student.create') }}" class="sub-item">Create Student</a>
          <a href="#" class="sub-item">Mabna Syekh Nawawi</a>
          <a href="#" class="sub-item">Mabna Syekh Abdul Karim</a>
          <a href="#" class="sub-item">Mabna Syekh Hasanuddin</a>
          <a href="#" class="sub-item">Mabna Syarifah Mudaim</a>
          <a href="#" class="sub-item">Mabna Syarifah Khodijah</a>
          <a href="#" class="sub-item">Mabna Rusunawa</a>
        </div>
      </div>        
      <div class="item"><a href="{{route('student.index')}}"><i class="fas fa-user-cog"></i>Admin Panel </a></div>
      <div class="item"><a href="{{url('/logout')}}"><i class="fas fa-power-off"></i>Log Out</a></div>

    </div>
  </div>