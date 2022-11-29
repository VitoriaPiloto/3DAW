function enviarForm() {
    let idCliente = document.getElementById("idCliente").value;
    let idCarro = document.getElementById("idCarro").value;
    let periodo = document.getElementById("periodo").value;

    console.log(idCliente);
    console.log(idCarro);
    console.log(periodo);


    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", "http://localhost/provaAv2/realizarAluguel.php?idCliente=" + idCliente + "&idCarro=" + idCarro + "&periodo=" + periodo);
    xmlHttp.send();

}