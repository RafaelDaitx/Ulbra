function tabuada(){
    var resultado = document.getElementById("resultado");
    var numTabuada = document.getElementById("numTabuada").value;
    var i = 1;
    
    resultado.innerHTML = "";
    while(i <= 10){
        resultado.innerHTML += numTabuada + " x " + i + " = " + i*numTabuada + "<br>";
        console.log(numTabuada + " x " + i + " = " + i*numTabuada);
        i++;

    }

} 