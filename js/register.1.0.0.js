$(document).ready(function(){

  $(document).on("click" , ".pattern .pttrn" , selectPattern)
             .on("click" , ".footer .register" , createAccount)
             .on("click" , ".footer .reset" , resetPattern);

  function selectPattern(){
    $(this).toggleClass("selected");
  }

  function resetPattern(){
    $(".pattern .pttrn").removeClass("selected");
  }

  function createAccount(e){
    e.preventDefault();

    var username = $(".username").val();
    var errormes = $(".error-message");
    var pattern  = $(".pattern .pttrn.selected");

    if(username.length){

      if(pattern.length){

        if(pattern.length >= 5){

          $.ajax({
            url:"services/register",
            type:"post",
            data:{user:username , pass:getPatternData()},
            success:function(res , xhr , status){
              if(res.error == 0 && status.status == 200){
                window.location = "/food-app";
              }else{
                errormes.html(res.description);
              }
            },
            error:function(err){
              errormes.html("Tuvimos un error, intenta otra vez por favor.");
            }
          });

        }else{errormes.html("Selecionar minimo 5 opciones de patron");}

      }else{errormes.html("Olvidaste seleccionar patron.");}

    }else{errormes.html("Olvidaste tu usuario");}
  }

  function getPatternData(){
    var selected = $(".pattern .pttrn.selected");
    var pattern  = "";

    for(var i = 0; i < selected.length; i++){
      pattern += $(selected[i]).data("val");
    }
    return pattern;
  }



})
