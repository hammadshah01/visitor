@extends('adminlayout.adminlayout')
@section('content')
<style>
 input{ border: none;
    outline:none;
    width:"90%"}  
    label{
        margin-top: 1.5rem;
        font-family: 'poppins';
        font-size: 0.9rem
    }
</style>
    <div class="card-title">
    Add Visitor Form
</div>
<div class="card body p-5 ">

    <form action="{{ url('entervisitor') }}" method="POST">
        @csrf


<div class="row">
     

    <div class="col"> <label for="cnic">Enter First Name:</label> <div class="input-field form-control"> <span class="far fa-user p-2"></span> <input  type="text" name="fname" placeholder="Enter First Name" required> </div></div>
 
     <div class="col"><label for="cnic">Enter Last Name:</label> <div class=" input-field form-control"> <span class="far fa-user p-2"></span> <input type="text" name="lname" placeholder="Enter Last Name" required> </div></div>
</div>

<div class="row mt-3">
     <label for="cnic">Enter Visitor CNIC No:</label>  
      <div class="col"><div class="input-field form-control"> <span class="fa fa-address-card p-2"></span> <input type="text" data-inputmask="'mask': '99999-9999999-9'" class="cnic"  placeholder="00000-0000000-0"  name="cnic" required="" > </div></div> 
     
</div>
<label for="" >Upload Image:</label>  
<input type="file" class="form-control ">
<button class="btn btn-success w-100 mt-4">Add Record</button>
    </form>
</div>



 <script>
    $(":input").inputmask();
   </script>


@endsection