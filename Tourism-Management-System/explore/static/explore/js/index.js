var imgSrcs =[

    "images/mainpage1.jpg",
    "images/mainpage2.jpg",
    "images/mainpage3.jpg",
    "images/mainpage4.jpg",
    "images/mainpage.jpg"
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



