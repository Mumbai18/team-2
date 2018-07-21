var imgSrcs =[

    "/static/authen/images/mainpage1.jpg",
    "/static/authen/images/mainpage2.jpg",
    "/static/authen/images/mainpage3.jpg",
    "/static/authen/images/mainpage4.jpg",
    "/static/authen/images/mainpage.jpg"
];




$(document).ready(function(){
    $(".button-collapse").sideNav();
    



$('#main').delay(10).fadeIn(1000, animateBackground());

function animateBackground() {

    window.setTimeout(function(){

        var url = imgSrcs[imgSrcs.push(imgSrcs.shift()) - 1];

        $('#main').delay(3000).fadeOut(600, function(){

            $(this).css("background-image", "url(" + url + ")")

        }).fadeIn(2000, animateBackground())

    });
}
      
});



