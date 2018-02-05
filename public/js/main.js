$(document).ready(function(){

    $("#btnlogin").on("click", function(){
        $("#frmlogin").submit();
    });

    $('.slider').bxSlider({
        auto: true,
        autoControls: true,
        stopAutoOnClick: true,
        pager: true,
      });
});