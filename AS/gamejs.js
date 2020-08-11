var avaliacoes = document.querySelectorAll("#avaliacao");
var cassio = document.getElementById("especial-cassio");
var total = 0;
function media() {
    avaliacoes.forEach(function (item) {
        //  ForEach faz basicamente a mesma coisa que um If, só que ele faz, digamos de forma direta, 
        // e a function é para fazer acontecer, dentro da function pode ser qualquer nome
        total += Number(item.value);
    })

    var mostrar_media = document.querySelector(".mostrar_resultado");

    var calcular = total / 8;

    if (calcular > 10) {
        mostrar_media.innerHTML = `Inisira valores somente de 1 até 10`;
    } else {
        mostrar_media.innerHTML = `Sua nota média para The Last Of Us foi de ${calcular.toFixed(2)}.`;
    }
    //esse replace inibe qualquer letra que for colocado, e não calculando elas .value.replace(/\D/g,"")); ${usuario}
}

cassio.addEventListener('click', clicar);
cassio.addEventListener('mouseout', sair);
cassio.addEventListener('mouseenter', entra);
function entra() {
    cassio.innerHTML = 'Qual jogo que o Cássio mais gosta? (tire o mousse e descubra, e depois clique em mim aqui)';
    cassio.style.background = 'red';
}

function sair() {
    cassio.innerHTML = 'Call Of Bugy......';
    cassio.style.background = 'green';
}

function clicar() {
    cassio.innerHTML = 'Valeu por tudo Cássio, cada ensinamento e bug que me ajudou a melhorar ashushsahus. Valeu por tudo mesmo cara, tu vem me ajudando a realizar meu sonho, agradeço cada aula e empenho que tu deu, cada minuto, cada hora, enfim...Só agradecimentos da minha parte, ainda tenho muito o que estudar pra poder exercer bem essa profissão, mas lanço a promessa que fiz a mim mesmo, que vou terminar essa faculdade e náo vou desistir no meio do caminho, como em Java Script que fiquei meio perdido, agora já entendo mais, significando que com empenho e dedicação, tudo é possível. Poderia fazer um texto imenso agradecendo, mas deixo aqui meu abraço Cássio, a gente vai ter muita aula juntos ainda, claro que vai. Abração....';
    cassio.style.background = 'blue';
}