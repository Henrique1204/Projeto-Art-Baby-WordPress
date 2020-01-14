let img = document.getElementById('icone_produto_pedido');
let check = document.getElementsByName("produto");

function verificarCheckBox() {

    if(check[0].checked == true){
        img.src = 'img/Ícones/babê.svg';
        img.alt = 'ícone de bebê';
    }
    if(check[1].checked == true){
        img.src = 'img/Ícones/artesanato.svg';
        img.alt = 'ícone de artesanato';
    }
    if(check[0].checked == true && check[1].checked == true || check[0].checked == false && check[1].checked == false){
        img.src = 'img/Ícones/sacola.svg';
        img.alt = 'ícone de sacola';
    }
}

for(let itens of check){
    itens.onclick = verificarCheckBox;
}