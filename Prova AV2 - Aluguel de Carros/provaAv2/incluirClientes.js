function enviarForm() {
    let nome = document.getElementById("nome").value;
    let telefone = document.getElementById("telefone").value;
    let cidade = document.getElementById("cidade").value;

    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", "http://localhost/provaAv2/incluirClientes.php?nome=" + nome +
        "&telefone=" + telefone + "&cidade=" + cidade);
    xmlHttp.send();

    location.reload();
}