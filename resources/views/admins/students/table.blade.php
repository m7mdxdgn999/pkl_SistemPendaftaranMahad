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
      @foreach ($mahasiswa as $mhs)
      <tr>
        <td scope="row user-table-item"> {{$loop->iteration}} </td>
        <td>
          <a href=" "> ubah | </a>
          <a href=" " onclick="return confirm('yakin?');"> hapus </a>
        </td>
        <td>{{$mhs->nama_mahasiswa}}</td>
        <td>{{$mhs->nim}}</td>
        <td>{{$mhs->nama_mabna}}</td>
        <td><a href="{{url('/detail/1')}}" class="btn-small-table btn-primary ">Details</a></td>
      </tr>
      @endforeach

    </tbody>
    <!-- akhir body -->
  </table>