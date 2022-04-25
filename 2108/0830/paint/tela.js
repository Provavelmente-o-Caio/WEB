const tela = document.getElementById("tela");
// 30 linhas
for (let i = 0; i < 30; i++) {
    let tr = document.createElement("tr");
    // 50 colunas
    for (let j = 0; j < 50; j++) {
        let td = document.createElement("td");
        td.addEventListener("mouseover", pintar);
        tr.appendChild(td)
    }
    tela.appendChild( tr );
}


// cor inicial
let cor = "black";
const input = document.getElementById("cor")
// definir um evento ao input color
input.addEventListener("change",function(){
    cor = input.value;
})


let pincel = 0;

function pintar(){
    if(pincel == 1 ){
        this.style.backgroundColor = cor;
    }
    
}

tela.addEventListener("mousedown", function(){
    pincel = 1;
});

tela.addEventListener("mouseup", function(){
    pincel = 0;
});

// pintar tudo
const pintartudo = document.getElementById("pintartudo");
pintartudo.addEventListener("click",function(){
    let tds = document.querySelectorAll("td");
    for (let index = 0; index < tds.length; index++) {
        tds[index].style.backgroundColor = cor;                
    }
});