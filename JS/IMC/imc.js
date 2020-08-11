function calcular() {
    var altura = Number(window.document.querySelector("#altura").value);
    var peso = Number(window.document.querySelector("#peso").value);
    var total = Number(document.querySelector("#totalImc"));
    var total = peso / (altura * altura);

    if (total < 18) {
        document.getElementById('total').innerHTML = `Abaixo do peso. Seu IMC é de ${total.toFixed(2)}.  `;
    } else if (total >= 18.5 && total <= 25) {
        document.getElementById('total').innerHTML = `No peso ideal. Seu IMC é de ${total.toFixed(2)}.  `;
    } else if (total > 25 && total < 30) {
        document.getElementById('total').innerHTML = `Acima do peso ideal. Seu IMC é de ${total.toFixed(2)}`
    } else {
        document.getElementById('total').innerHTML = `Obeso. Seu IMC é de${total.toFixed(2)}`
    }

}