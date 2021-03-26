/* Header
Cacher le header pendant le scroll down et le faire apparaitre pendant le scroll up */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
    document.getElementById("toggle").style.top = "25px";
  } else {
    document.getElementById("header").style.top = "-20%";
    document.getElementById("toggle").style.top = "-20%";
  }
  prevScrollpos = currentScrollPos;
}

/*Burger menu*/
$(function () {

    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

});

/*Onclick sur le lien # du menu mobile, suivre le lien et recharger la page*/
  $(function (){
    $(".mobile-nav-link").click(function () {
      document.getElementById('overlay').style.visibility = "hidden";
      window.location.reload();
    })
});

