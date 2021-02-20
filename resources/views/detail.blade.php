@extends ('layout/main')

@section ('title','Detail')

@section ('container main')
<!-- main content start -->
<section class="container main ">
    <!-- header start -->
    <div class="row header text-center">
        <div class="col-md-12">
            <p class="header-title"> Detail</p>
        </div>
    </div>
    <!-- header end -->
    <div class="row report-group">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$mhs->nama_mahasiswa}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</section>
<!-- main content end -->
@endsection