@extends('main.layout')
@section('content')

<style>
    .nca-logo {
  width: 130px !important;
  height: auto;
  opacity: 50%;

}
</style>
    <div class="container-fluid bg-img" style="background-image:url({{ asset('image/ncabg.png') }})">
        <section>

            <div class="container">
    <div class="row table-form mt-5">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading mt-3">
                   <center><img class="nca-logo" src="{{ asset('image/logo.png') }}" alt=""></center>
                </div>
                <div class="panel-body p-3">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group py-2">
                            
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Enter your Email" required> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" id="password" placeholder="Enter your Password" required> <div class="btn bg-white text-muted pass"> <span id="pass" class="far fa-eye-slash"></span> </div> </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"> <label for="remember" class="text-muted"><input type="checkbox" name="remember" id="remember"> Remember me</label></div>
                            {{-- <div class="col"><a href="#" id="forgot" class="font-weight-bold">Forgot password?</a></div> --}}
                        </div>

                        <button class="btn btn-success btn-block mt-3 w-100">Login</button>
                       
                    </form><br>
                </div>



              
              
             
            </div>
        </div>
    </div>
</div>


        </section>
    </div>
@endsection
