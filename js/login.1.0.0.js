$(document).ready(function(){


  $(document).on("click" , "#login-btn" , loginProcess);

  function loginProcess(e){
    e.preventDefault();

    var btnsubmit = $(this);
    var username  = $("#username").val();
    var password  = $("#password").val();
    var errormes  = $("#error_message");

    if(username.length && password.length){
      $.ajax({
        url:"services/login",
        type:"post",
        data:{user:username , pass:password},
        success:function(res , xhr , status){
          if(res.error == 0 && status.status == 200){
            window.location = "/food-app";
          }else{
            errormes.html(res.description);
          }
        },
        error:function(err){
          errormes.html("Tuvimos un error, intenta mas tarde por favor.");
        }
      });
    }

  }




})
