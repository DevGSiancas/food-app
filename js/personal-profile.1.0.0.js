$(document).ready(function(){

  $(document).on("blur" , "ul li.data input" , updateUserInfo);


  function updateUserInfo(){
    var mapper = {
      Nombre: "name",
      Correo: "username",
      Apellido: "lastname",
      Telefono: "telephone"
    }

    var element     = $(this);
    var currentData = element.data("current");
    var editedData  = element.val();
    var typeData    = element.attr("placeholder");

    if(currentData != editedData){

      element.attr("disabled" , "disabled");

      $.ajax({
        url:"../services/update_user_info",
        type:"post",
        data:{data:editedData , type:mapper[typeData]},
        success:function(res , xhr , status){
          if(res.error == 0 && status.status == 200){
            alert("Exito.");
          }else{
            alert("Tuvimos un error, intenta mas tarde por favor.");
          }
          element.removeAttr("disabled");
          element.data("current" , editedData);
        },
        error:function(err){
          alert("Tuvimos un error, intenta mas tarde por favor.");
          element.removeAttr("disabled");
        }
      });
    }

  }


})
