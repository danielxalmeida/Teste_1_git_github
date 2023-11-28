function voltAtras(){
    // window.history;
    // window.history.back();
    // history;
    window.history.go(-1);
}
function mudaToggler(){
    let icone=document.getElementById("mudarbotao");
    let aberto=document.querySelector(".aberto");
    if(aberto){
        icone.classList.remove("aberto");
        icone.classList.toggle("fechado");
    }else{
        icone.classList.remove("fechado");
        icone.classList.toggle("aberto");
    }

}
function dropMenu(){
    menu.scrollIntoView();
    setTimeout(abrirMenu,500);
}

function abrirMenu(){
    let abrir=document.querySelector("#livros");
    abrir.click();
}
