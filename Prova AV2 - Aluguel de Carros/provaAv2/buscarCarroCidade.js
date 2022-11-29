function carregaCarro() {

    let cidade = document.getElementById("cidade").value;
    console.log(cidade);

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            let x = 0;

            let valor = (obj[x].modelo);
            if (valor != 0) {
                for (x = 0; x < obj.length; x++) {
                    let linha = obj[x];
                    criarLinhaTabela(linha);
                }
            }
        }
    }
    xmlHttp.open("GET", "http://localhost/provaAv2/buscarCarroCidade.php?cidade=" + cidade);
    xmlHttp.send();
}

function criarLinhaTabela(linha) {
    let tabela = document.getElementById("tabela");
    let tr = document.createElement("tr");

    //Coluna modelo
    let tdModelo = document.createElement("td");
    textnode = document.createTextNode(linha.modelo);
    tdModelo.appendChild(textnode);
    tr.appendChild(tdModelo);
    tabela.appendChild(tr);


    //Coluna marca
    let tdMarca = document.createElement("td");
    textnode = document.createTextNode(linha.marca);
    tdMarca.appendChild(textnode);
    tr.appendChild(tdMarca);
    tabela.appendChild(tr);


    //Coluna categoria
    let tdCategoria = document.createElement("td");
    textnode = document.createTextNode(linha.categoria);
    tdCategoria.appendChild(textnode);
    tr.appendChild(tdCategoria);
    tabela.appendChild(tr);


    //Coluna cidade
    let tdCidade = document.createElement("td");
    textnode = document.createTextNode(linha.cidade);
    tdCidade.appendChild(textnode);
    tr.appendChild(tdCidade);
    tabela.appendChild(tr);


    //Coluna valor
    let tdValor = document.createElement("td");
    textnode = document.createTextNode(linha.valor);
    tdValor.appendChild(textnode);
    tr.appendChild(tdValor);
    tabela.appendChild(tr);


    //Coluna disponibilidade
    let tdDisponivel = document.createElement("td");
    var disp = document.createElement("p");
    //textnode = document.createTextNode(linha.disponivel);
    if (linha.disponivel == 0) {
        textnode = document.createTextNode("sim");
    } else {
        textnode = document.createTextNode("nao");
    }
    tdDisponivel.appendChild(textnode);
    tr.appendChild(tdDisponivel);
    tabela.appendChild(tr);


    //tabela.style.display = "table";
    let input = document.getElementById("cidade");
    input.setAttribute("onclick", "location.r2load();");
}