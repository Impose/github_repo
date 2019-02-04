function startCam(){
   $.get("python.php");
   alert("It got this far");
   return false;
}


$(document).ready(function(){



/* This is for testing purposes */
$(".picam_on").click(function(){
    $(this).hide();
$.get("python.php");
    alert("This worked");

});
$(".picam_off").click(function(){
   $(".picam_on").show();
   alert("It's back");
});




});
