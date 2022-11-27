function carregaJogo() {

    let nome1 = document.getElementById("nome1").value;
    let nome2 = document.getElementById("nome2").value;
    
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            let x = 0;

            let valor = (obj[x].local).localeCompare("undefined");
            if (valor != 0) {
                for (x = 0; x < obj.length; x++) {
                    let linha = obj[x];
                    criarLinhaTabela(linha);
                }
            }
        }
    }
    xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/calendarioJogo.php?nome1=" + nome1 + "&nome2=" + nome2);
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
    tabela.style.display = "table";
    let input1 = document.getElementById("nome1");
    input1.setAttribute("onclick", "location.r2load();");
    let input2 = document.getElementById("nome2");
    input2.setAttribute("onclick", "location.reload();");
}
