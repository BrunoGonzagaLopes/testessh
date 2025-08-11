function active_menumusic() {
    const div_music = document.querySelector(".music-menu");
    div_music.classList.toggle("actived");
}
let cont = 1;
const letra_fly = document.querySelectorAll(".color-slide");
const flys = document.getElementById("img-fly");

const list_fly = [
    ["imgs/fly/PROMOCHAVEIRO.png", "b8860b"],
    ["imgs/fly/dandadanchamado.png", "ff0000"],
    ["imgs/fly/FRETEGRATIS.png", "333333"],
    ["imgs/fly/novacolecaofrieren.png", "4C2E6C"],
    ["imgs/fly/winx.jpg", "861A44"]
];




setInterval(() => {
    flys.src = list_fly[cont][0];
    letra_fly.forEach(element => {
        console.log(cont);
        
        element.style.color = "#" + list_fly[cont][1];
        element.style.borderColor = "#" + list_fly[cont][1];
    });
    cont++;
    if (cont === list_fly.length) cont = 0;
}, 3000);



// momentos geeks
const notice = [
    ["Solo Leveling (2ª temporada)", "4 de janeiro de 2025"],
    ["Sakamoto Days", "14 de julho de 2025"],
    ["One Punch Man (3ª temporada)", "Prevista para outubro de 2025"],
    ["Honey Lemon Soda", "9 de janeiro a 27 de março de 2025"],
    ["Dr. Stone (4ª temporada)", "Julho de 2025 (Parte 2)"],
    ["Fire Force (3ª temporada)", "Parte 1: 4 de abril de 2025 / Parte 2: data não confirmada"],
    ["Lazarus", "5 de abril de 2025"],
    ["Witch Hat Atelier", "Previsto para 2025 (data não anunciada)"],
    ["Demon Slayer: Kimetsu no Yaiba Castelo Infinito", "1º filme em 12 de setembro de 2025 (nos EUA)"],
    ["Diários de uma Apotecária (2ª temporada)", "Prevista para 2025 (sem data definida)"],
    ["ZENSHU", "Sem data divulgada"],
    ["Gachiakuta", "Sem data divulgada"],
    ["Wind Breaker (2ª temporada)", "Sem data divulgada"],
    ["Kaiju No. 8 (2ª temporada)", "Sem data divulgada"],
    ["My Hero Academia (temporada final)", "Outono de 2025 (possivelmente outubro)"],
    ["Dan Da Dan (2ª temporada)", "Sem data divulgada"],
    ["One Piece (Arco Egghead)", "Sem data divulgada"],
    ["Chainsaw Man (O Filme: Reze Arc)", "Sem data divulgada"],
    ["Spy x Family (3ª temporada)", "Sem data divulgada"],
    ["Sanda (1ª temporada)", "Sem data divulgada"]
];

const noticiadiv = document.getElementById("textnotice");
let i = 0;

setInterval(() => {
    atualizarnotice();
    i++;
}, 3000);

function avancarnotice() {
    i++;
    atualizarnotice();
}

function recuarnotice() {
    i--;
    atualizarnotice();
}

function atualizarnotice() {
    if (i < 0) i = notice.length - 1;
    if (i >= notice.length) i = 0;

    noticiadiv.innerHTML = '';
    const datadiv = document.createElement('p');
    const noticetag = document.createElement("h4");
    noticetag.textContent = notice[i][0];
    datadiv.textContent = notice[i][1];
    noticiadiv.appendChild(noticetag);
    noticiadiv.appendChild(datadiv);
}































































