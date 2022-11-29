function enviarForm() {
    let modelo = document.getElementById("modelo").value;
    let marca = document.getElementById("marca").value;
    let categoria = document.getElementById("categoria").value;
    let cidade = document.getElementById("cidade").value;
    let valor = document.getElementById("valor").value;

    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", "http://localhost/provaAv2/incluirCarro.php?modelo=" + modelo +
        "&marca=" + marca + "&categoria=" + categoria + "&cidade=" + cidade + "&valor=" + valor);
    xmlHttp.send();

    location.reload();
}