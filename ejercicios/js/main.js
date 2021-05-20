
document.getElementById("texto1").addEventListener("onmouseover", porencima);

function porencima(){
    document.getElementById("texto1").style.color  = "Orange";
}

document.getElementById("colores").addEventListener("onemouseover", pordebajo);

function pordebajo(){
    document.getElementById("texto1").style.color = "Black";
}

function seleccionar(){
    alert(document.getElementById('colores'));
}