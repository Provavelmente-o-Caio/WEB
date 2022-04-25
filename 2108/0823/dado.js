function dado(){
    return Math.ceil( Math.random()*6);
}

function rolar(){
    let contador = 0
    let test = 0

    while (contador <= 100){
        contador++;

        let jogada1 = dado();
        let jogada2 = dado();
        console.log("jogada:", contador, "dado 1:", jogada1, "dado 2:",jogada2);

        if(jogada1==jogada2){
            test ++;
        }
    }

    console.log("número de repetições:", test);
    document.getElementById("esc").innerHTML = (test);
}

const botao = document.querySelector("button");
botao.addEventListener("click", rolar());