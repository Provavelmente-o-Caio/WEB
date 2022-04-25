$(function() {

   var jogador = 1;
   var table = $('table');
   var mensagens = $('.mensagens');
   var turno = $('.turno');
   var placar1 = $('.placar1');
   var placar2 = $('.placar2');
   var vp1 = 0;
   var vp2 = 0;
   // vp = Valor do Placar
   MostraProximoJogador(turno, jogador);

   $('td').click(function() {
       td = $(this);
       var estado = PegaEstado(td);
       if(!estado) {
           var padrao = DefinePadraoJogador(jogador);
           MudaEstado(td, padrao);
           if (TesteResultado(table, padrao)) {
               mensagens.html('jogador '+jogador+' ganhou');
               turno.html('&nbsp;');
               if (jogador == 1) {
                   vp1++;
                   placar1.html('Pontos Jogador X: '+vp1);
               }
               else if (jogador == 2) {
                   vp2++;
                   placar2.html('Pontos Jogador O: '+vp2);
               }
               // Gambiarra mas é oq temos pra hoje
               jogador = 1;
               resetar(table);
               MostraProximoJogador(turno, jogador);
           }
           else if (velha(table) == 1) {
               mensagens.html('Velha');
               turno.html('&nbsp;');
               resetar(table);
               jogador = 1;
               MostraProximoJogador(turno, jogador);
               velha_v = 0;
               return velha_v;
           }
           else {
               jogador = ProximoJogador(jogador);
               MostraProximoJogador(turno, jogador);
               mensagens.html('&nbsp;')
           }
       }
       else {
           mensagens.html('Essa caixa já foi usada')
       }
   });

   $('.reset').click(function() {
        jogador = 1;
        mensagens.html('&nbsp;')
        resetar(table);
        MostraProximoJogador(turno, jogador);
        })

    $('.master_reset').click(function() {
        jogador = 1;
        mensagens.html('&nbsp;')
        resetar(table);
        MostraProximoJogador(turno, jogador);
        vp1 = 0;
        vp2 = 0;
        placar1.html('Pontos Jogador X: '+vp1);
        placar2.html('Pontos Jogador O: '+vp2);
    })
    })

function PegaEstado(td) {
    if (td.hasClass('x') || td.hasClass('o')) {
        return 1;
    }
    else {
        return 0;
    }
}

function MudaEstado(td, padrao) {
    return td.addClass(padrao);
}

function DefinePadraoJogador(jogador) {
    if (jogador == 1) {
        return 'x';
    }
    else {
        return 'o';
    }
}

function ProximoJogador(jogador) {
    if (jogador == 1) {
        return jogador = 2;
    }
    else {
        return jogador = 1;
    }
}

function MostraProximoJogador(turno, jogador) {
    if (jogador == 1) {
        turno.html('Turno do Jogador: X');
    } else {
        turno.html('Turno do Jogador: O');
    }
}

function TesteResultado(table, padrao) {
    var won = 0;
    if(table.find('.item1').hasClass(padrao) && table.find('.item2').hasClass(padrao) && table.find('.item3').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item1').hasClass(padrao) && table.find('.item4').hasClass(padrao) && table.find('.item7').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item1').hasClass(padrao) && table.find('.item5').hasClass(padrao) && table.find('.item9').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item4').hasClass(padrao) && table.find('.item5').hasClass(padrao) && table.find('.item6').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item7').hasClass(padrao) && table.find('.item8').hasClass(padrao) && table.find('.item9').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item2').hasClass(padrao) && table.find('.item5').hasClass(padrao) && table.find('.item8').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item3').hasClass(padrao) && table.find('.item6').hasClass(padrao) && table.find('.item9').hasClass(padrao)) {
        won = 1;
    } else if (table.find('.item3').hasClass(padrao) && table.find('.item5').hasClass(padrao) && table.find('.item7').hasClass(padrao)) {
        won = 1;
    }
    return won;
}

function velha(table) {
    // Perdão pela Abominação a seguir
    var velha_v = 0;
    if ((table.find('.item1').hasClass('x') || table.find('.item1').hasClass('o')) && (table.find('.item2').hasClass('x') || table.find('.item2').hasClass('o')) && (table.find('.item3').hasClass('x') || table.find('.item3').hasClass('o')) && (table.find('.item4').hasClass('x') || table.find('.item4').hasClass('o')) && (table.find('.item5').hasClass('x') || table.find('.item5').hasClass('o')) && (table.find('.item6').hasClass('x') || table.find('.item6').hasClass('o')) && (table.find('.item7').hasClass('x') || table.find('.item7').hasClass('o')) && (table.find('.item8').hasClass('x') || table.find('.item8').hasClass('o')) && (table.find('.item9').hasClass('x') || table.find('.item9').hasClass('o'))) {
        velha_v = 1;
    }
    return velha_v;
};


function resetar(table) {
    table.find('td').each(function(){
        $(this).removeClass('o').removeClass('x');
    });
}