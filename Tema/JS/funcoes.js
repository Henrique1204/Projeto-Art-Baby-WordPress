const img = document.getElementsByClassName('icone_produto');
const check = document.getElementsByName("produto");

function sumir_img(){
    for(imgs of img){
        imgs.classList.remove('icone_produto_ativo');
    };
};

function verificarCheckBox() {

    if(check[0].checked == true){
        sumir_img();
        img[1].classList.add('icone_produto_ativo');
    }
    if(check[1].checked == true){
        sumir_img();
        img[2].classList.add('icone_produto_ativo');
    }
    if(check[0].checked == true && check[1].checked == true || check[0].checked == false && check[1].checked == false){
        sumir_img();
        img[0].classList.add('icone_produto_ativo');
    };
};

for(let itens of check){
    itens.onclick = verificarCheckBox;
};