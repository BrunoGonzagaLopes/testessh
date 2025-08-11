window.onload = carregarCarrinhoDoStorage();

function carregarCarrinhoDoStorage() {
    let carrinho = new Set(JSON.parse(sessionStorage.getItem("carrinho")));
    carrinho = [...carrinho];
    if (carrinho.length == 0) {
        carrinhozerado();
    }

    additens(carrinho);
}

function carrinhozerado() {
    const divform = document.getElementById('produtos_finalizar');
    const button = document.getElementsByTagName('button')[0];

    console.log(button);

    button.style.display = 'none';
}

function additens(carrinho) {
    let valuetotal = 0;
    const divform = document.getElementById('produtos_finalizar');
    let i = 0;

    carrinho.forEach(element => {
        const div_item = document.createElement('div');
        div_item.classList.add("item");

        let image = "";

        if (!element.imagem.includes("../../")) {
            image = "../../" + element.imagem;
        } else {
            image = element.imagem;
        }

        const gridimagem = `
            <div id="caract_item">
                <img src="${image}" alt="">
                <p>${element.nome}</p>
                <input type="hidden" value="${element.nome}" name="produto"> 
            </div>`;

        let gridobs = `<span></span>`;

        if (element.categoria != "caneca") {
            gridobs = `
                <div id="tamanhos">
                    <div class="tamanhoselection">
                        <p>P</p>
                        <input type="radio" name="tamanhopeça${i}" id="tamanhopeça${i}" value="P" required>
                    </div>
                    <div class="tamanhoselection">
                        <p>M</p>
                        <input type="radio" name="tamanhopeça${i}" id="tamanhopeça${i}" value="M" required>
                    </div>
                    <div class="tamanhoselection">
                        <p>G</p>
                        <input type="radio" name="tamanhopeça${i}" id="tamanhopeça${i}" value="G" required>
                    </div>
                    <div class="tamanhoselection">
                        <p>GG</p>
                        <input type="radio" name="tamanhopeça${i}" id="tamanhopeça${i}" value="GG" required>
                    </div>
                </div>`;
            i++;
        }

        const gridobsv = `<input type="text" name="obs" id="obs" placeholder="Observarções">`;
        const gridvalor = `
            <div class="valor">
                <s>Valor Unitário</s>
                <p id="valorparcial"><b>R$${element.preco_promocional}</b></p>
            </div>
        </div>`;

        if (carrinho.length > 2) {
            console.log(carrinho.length);
        }

        valuetotal = valuetotal + element.preco_promocional;
        div_item.innerHTML = gridimagem + gridobs + gridobsv + gridvalor;
        divform.appendChild(div_item);
    });

   //add brindes da promoção
    const qtdBrindes = Math.floor(carrinho.length / 2);
    for (let b = 0; b < qtdBrindes; b++) {
        const div_brinde = document.createElement("div");
        div_brinde.classList.add("item");

        const gridimagem = `
            <div id="caract_item">
                <img src="../../imgs/Logo/boxmistertiosa.png" alt="Brinde Especial">
                <input type="hidden" value="${qtdBrindes}">
                <p>Brinde Especial 🎁</p>
            </div>`;

        const gridobs = `<span id="obs"> </span>`;
        const gridvalor = `
            <div class="valor">
                <s>Valor Unitário</s>
                <p id="valorparcial"><b>R$0,00</b></p>
            </div>
        </div>`;

        div_brinde.innerHTML = gridimagem + gridobs + gridvalor;
        divform.appendChild(div_brinde);
    }

    document.getElementById('valuetotal').innerHTML =
        `Valor Total: R$ ${valuetotal.toFixed(2).replace('.', ',')}`;
}
