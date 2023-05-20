@extends('adminlayout.adminlayout')
@section('content')

<div class="card-title">Upload Excel File</div>
<div class="card body p-5 ">

    <form action="" method="POST">
        @csrf

<label for="" >Upload Excel File:</label>  
<input type="file" class="form-control ">
<button class="btn btn-success mt-4">Upload File</button>
    </form>
</div>


@endsection