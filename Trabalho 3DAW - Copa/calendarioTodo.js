function carregaJogos() {
    let xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() {
            if (tdis.readyState == 4 && tdis.status == 200) {
                let obj = JSON.parse(tdis.responseText);
                let x = 0;
                
                let valor = (obj[x].local).localeCompare("undefined");
                if(valor!=0){
                        for (x=0;x<obj.lengtd;x++) {
                        let linha = obj[x];
                        criarLinhaTabela(linha);
                    }
                }
            }
        }
        xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/calendarioTodo.php");
        xmlHttp.send();
}

function criarLinhaTabela(linha) {
    let tabela = document.getElementById("tabela");
    let tr = document.createElement("tr");
    
    //Coluna data
    let tdData = document.createElement("td"); 
    textnode = document.createTextNode(linha.data);
    tdData.appendChild(textnode); 
    tr.appendChild(tdData);

    //Coluna hora
    let tdHora = document.createElement("td"); 
    textnode = document.createTextNode(linha.hora);
    tdHora.appendChild(textnode); 
    tr.appendChild(tdHora); 

    //Coluna Local
    let tdLocal = document.createElement("td");
    textnode = document.createTextNode(linha.local);
    tdLocal.appendChild(textnode); 
    tr.appendChild(tdLocal);

    //Coluna Selecao1
    let tdSelA = document.createElement("td"); 
    textnode = document.createTextNode(linha.selecao1);
    tdSelA.appendChild(textnode); 
    tr.appendChild(tdSelA);
    
    //Coluna gols1
    let tdGolA = document.createElement("td"); 
    textnode = document.createTextNode(linha.gols1);
    tdGolA.appendChild(textnode); 
    tr.appendChild(tdGolA);

    //Coluna Selecao2
    let tdSelB = document.createElement("td"); 
    textnode = document.createTextNode(linha.selecao2);
    tdSelB.appendChild(textnode); 
    tr.appendChild(tdSelB);

    //Coluna gols2
    let tdGolB = document.createElement("td"); 
    textnode = document.createTextNode(linha.gols2);
    tdGolB.appendChild(textnode); 
    tr.appendChild(tdGolB);

    tabela.appendChild(tr);
}