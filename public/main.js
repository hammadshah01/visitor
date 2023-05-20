$(document).ready(()=>{
    $(".pass").click(function () {
             var input = document.getElementById("password");
             if (input.type === "password") {
                 input.type = "text";
                 document.getElementById("pass").className = "far fa-eye";
             } else {
                 input.type = "password";
                 document.getElementById("pass").className = "far fa-eye-slash";
             }
    });
   

    
})

