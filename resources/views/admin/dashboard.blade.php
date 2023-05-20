@extends('adminlayout.adminlayout')
@section('content')


<div class=" card-title">Search Visitor</div>
<div class="card card-body">
    <form action="{{ url('result') }}" method="POST" class="p-5">
        @csrf
       <label for="cnic">Enter Visitor CNIC No:</label>   
    <input type="text" class="form-control"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >
<button class="btn btn-success mt-3" type="submit">Search</button>
   
    </form>
</div>



<script>
    $(":input").inputmask();
   </script>
@endsection