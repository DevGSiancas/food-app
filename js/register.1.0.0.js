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

    if($(".pattern .pttrn.selected").length){

      if($(".pattern .pttrn.selected").length >= 5){

        var user = $("#user").val();
        var pass = getPatternData();


      }else{$(".error-message").html("Selecionar minimo 5 opciones de patron");}

    }else{$(".error-message").html("Selecionar patron.");}
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
