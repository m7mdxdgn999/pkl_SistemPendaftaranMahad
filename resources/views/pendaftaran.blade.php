@extends ('layout/main')

@section ('title','Pendaftaran')

@section ('container main')
<!-- main content start -->
<section class="container main ">
  <!-- header start -->
  <div class="row header text-center">
    <div class="col-md-12">
      <p class="header-title"> Pendaftran Ma'had Al-jamiah</p>
      <p>Form Pendaftaran</p>
    </div>
  </div>
  <!-- header end -->
  <div class="row report-group">

    <!-- thumbnail -->
    <div class="  col-md-12">
      <div class="item-big-report col-md-12">
        <form action="" method="post">
          <div class="row">
            <!--form kiri-->
            <div class="col-md-6 ">


              <div class="mb-3">
                <label for="nama_mahasiswa" class="title-input-primary-username">Nama Lengkap</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="nama_mahasiswa" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="nama_mahasiswa" require>
              </div>



              <div class="mb-3">
                <label for="fakultas_jurusan_semester" class="title-input-primary-username">Fakultas/Jurusan</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="fakultas_jurusan_semester" aria-describedby="emailHelp" placeholder="Fakultas/Jurusan" name="fakultas_jurusan_semester" require>
              </div>



              <div class="mb-3">
                <label for="tempat_tanggal_lahir" class="title-input-primary-username">Tempat dan Tanggal
                  Lahir</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="tempat_tanggal_lahir" aria-describedby="emailHelp" placeholder="Tempat dan Tanggal Lahir" name="tempat_tanggal_lahir" require>
              </div>




              <div class="mb-3">
                <label for="nama_org_tua" class="title-input-primary-username">Nama Orang Tua</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="nama_org_tua" aria-describedby="emailHelp" placeholder="Nama Orang Tua" name="nama_org_tua" require>
              </div>



              <div class="mb-3">
                <label for="alamat_lengkap" class="title-input-primary-username">Alamat</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="alamat_lengkap" aria-describedby="emailHelp" placeholder="Alamat" name="alamat_lengkap" require>
              </div>



            </div>
            <!-- akhir form kiri-->

            <!-- form kanan -->
            <div class="col-md-6">

              <div class="mb-3">
                <label for="nim" class="title-input-primary-username">NIM</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="nim" aria-describedby="emailHelp" placeholder="NIM" name="nim" require>
              </div>



              <div class="mb-3">
                <label for="no_hp_mahasantri" class="title-input-primary-username">No
                  HP</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="no_hp_mahasantri" placeholder="No hp" name="no_hp_mahasantri" require>
              </div>



              <div class="mb-3">
                <label for="jalur_masuk" class="title-input-primary-username">
                  Jalur Masuk:</label>

                <select class="form-select" name="jalur_masuk" id="jalur_masuk" require>
                  <option value="SNMPTN"> SNMPTN</option>
                  <option value="SPAN PTKIN">SPAN PTKIN </option>
                  <option value="SBMPTN">SBMPTN</option>
                  <option value="UMPTKIN">UMPTKIN</option>

                </select>
              </div>



              <div class="mb-3">
                <label for="no_hp_org_tua" class="title-input-primary-username">No HP Orang Tua/Wali</label>
                <input type="text" class="form-control input-type-primary-tiketsaya" id="no_hp_org_tua" placeholder="No HP Orang Tua/Wali" name="no_hp_org_tua" require>
              </div>



              <div class="mb-3">
                <label for="nama_mabna" class="title-input-primary-username">
                  Mabna:</label>
                <select class="form-select" id="nama_mabna" name="nama_mabna" require>
                  <option value="Mabna Syekh Nawawi">Mabna Syekh Nawawi (Putra-Umum) </option>
                  <option value="Mabna Syekh Abdul Karim">Mabna Syekh Abdul Karim (Putra-Umum) </option>
                  <option value="Mabna Sultan  Hasanuddin ">Mabna Sultan Hasanuddin (Putra-Kedokteran)</option>
                  <option value="Mabna Syarifah Mudaim">Mabna Syarifah Mudaim (Putri-Umum)</option>
                  <option value="Mabna Syarifah Khadijah ">Mabna Syarifah Khadijah (Putri-Kedokteran)</option>
                  <option value="Mabna Rusunawa ">Mabna Rusunawa (Putri-Umum)</option>
                </select>
              </div>



              <button type="submit" class="btn btn-primary btn-primary-tiketsaya" id="submit" name="submit">Submit</button>
              <button type="reset" class="btn btn-primary btn-secondary-tiketsaya">Reset</button>

            </div>
            <!-- akhir form kanan-->




        </form>
      </div>
      <!-- akhir form -->

    </div>


  </div>
</section>
<!-- main content end -->
@endsection