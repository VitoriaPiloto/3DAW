function enviarForm() {
    let selecao1 = document.getElementById("selecao1").value;
    let selecao2 = document.getElementById("selecao2").value;
    let gols1 = document.getElementById("gols1").value;
    let gols2 = document.getElementById("gols2").value;
    let local = document.getElementById("local").value;
    let data = document.getElementById("data").value;
    let hora = document.getElementById("hora").value;
    
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/cadastroJogo.php?data=" + data +
        "&hora=" + hora + "&local=" + local + "&selecao1=" + selecao1 + "&selecao2=" + selecao2 + "&gols1=" + gols1 + "&gols2=" + gols2);
    xmlHttp.send();
    console.log(xmlHttp.responseText);
    location.reload();
}