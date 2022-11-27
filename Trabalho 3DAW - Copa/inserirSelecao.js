function enviarForm() {
    let nome = document.getElementById("nome").value;
    let grupo = document.getElementById("grupo").value;
    let tecnico = document.getElementById("tecnico").value;
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/inserirSelecao?nome=" + nome +
        "&grupo=" + grupo + "&tecnico=" + tecnico);
    xmlHttp.send();

    location.reload();
}