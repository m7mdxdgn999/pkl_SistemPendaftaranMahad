@extends ('layout/main')

@section ('title','Admin Panel')

@section ('container main')

<!-- main content start -->
<section class="container main ">
  <!-- header start -->
  <div class="row header text-center">
    <div class="col-md-12">
      <p class="header-title"> Admin Panel</p>
    </div>
  </div>
  <!-- header end -->
  <div class="row report-group">

    <!-- table start-->
    <div class="  col-md-12">
      <div class="item-big-report col-md-12">
        <!-- head -->
        <form action="{{ url('index') }}" method="get">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="cari" id="" class="form-control" value="{{ request('cari') }}" >
              </div>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-info">search</button>
            </div>
          </div>
         
        </form>    

       
       
        {{-- <div class="row" style="margin-bottom: 20px;">
          <div class="col-md-6 ">
            <div class="form-group">
            <input type="text" name="cari" class="form-control " id="" autocomplete="off">
            </div>
          </div>
          <div class="col-md-6 ">
            <button type="submit" class="btn btn-primary " id="cari" name="cari" >Cari</button>
          </div>
        </div>   --}}


          <table class="table table-borderless table-tiketsaya">
            <thead>
              <tr>
                <th scope="col">no </th>
                <th scope="col">Aksi </th>
                <th scope="col">Nama </th>
                <th scope="col">NIM</th>
                <th scope="col">Mabna</th>
                <th scope="col">Profile</th>
              </tr>
            </thead>
            <!-- akhir head -->
            <!-- body -->
            <tbody>
              @forelse ($mahasiswa as $mhs)
              <tr>
                <td scope="row user-table-item"> {{$loop->iteration}} </td>
                <td>
                  <a href="{{ url('edit', $mhs->id) }} "> ubah | </a>
                  <form action="{{ url('delete', $mhs->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('yakin?');" > hapus </button>
                  </form>
                  
                </td>
                <td>{{$mhs->nama_mahasiswa}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->nama_mabna}}</td>
                <td><a href="{{url('')}}" class="btn-small-table btn-primary ">Details</a></td>
              </tr>
              @empty
              <tr>
                <td colspan="12">
                  <h2 align="center"> no data found</h2>
                </td>
              </tr>
              @endforelse
              {{ $mahasiswa->links() }}
            </tbody>
            <!-- akhir body -->
           
          </table>
        </form>

      </div>

    </div>
    <!-- table end -->
  </div>
</section>
<!-- main content end -->
@include('sweetalert::alert')
@endsection
