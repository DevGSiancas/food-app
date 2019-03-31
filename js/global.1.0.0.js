$(document).ready(function(){

  $(document).on("click" , "header .menuico" , showMenu)
             .on("click" , ".title .go-back" , goBackURL);

  function showMenu(){
    $(".menu-wrapper").toggleClass("active");
    $(".menu-overlay").toggleClass("active");
    $("body").toggleClass("overflw");
  }

  function goBackURL(){
    parent.history.back();
		return false;
  }



})
