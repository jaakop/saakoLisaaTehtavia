
function lisaaTehtavia(){
    document.getElementById("lisaa").style.opacity = 1;
    setInterval(function(){ document.getElementById("lisaa").style.opacity = 0; }, 10000);
}