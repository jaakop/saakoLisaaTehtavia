window.onscroll = function() {scrollFunction()};

var speed = 1;
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    speed = 1;
    console.log( document.body.scrollTop,document.documentElement.scrollTop);
    scroll();
    console.log(speed);
}
function scroll(){
    if(document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){   

        document.body.scrollTop = document.body.scrollTop - speed/100;
        document.documentElement.scrollTop = document.documentElement.scrollTop - speed/100;
        speed = speed + 15;
        console.log(speed);
        if(speed > 2000)
            speed = 2000;
        setTimeout(scroll, 1);
    } 
    
}