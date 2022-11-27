function enviarForm() {
    let nome = document.getElementById("nome").value;
    let nomeAlterado = document.getElementById("nomeAlterado").value;
    let tecnico = document.getElementById("tecnicoAlterado").value;
    let grupo = document.getElementById("grupoAlterado").value;
    let pontos = document.getElementById("pontoAlterado").value;

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/alterarSelecao.php?nome=" + nome + "&nomeAlterado=" + nomeAlterado + "&tecnico=" + tecnico
        + "&grupo=" + grupo + "&pontos=" + pontos);
    xmlHttp.send();

    location.reload();
}

function buscarSelecao() {
    let nome = document.getElementById("nome").value;
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        console.log("mudou status: " + this.readyState);
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);

            document.getElementById("nomeAlterado").value = obj.nome;
            document.getElementById("tecnicoAlterado").value = obj.tecnico;
            document.getElementById("grupoAlterado").value = obj.grupo;
            document.getElementById("pontoAlterado").value = obj.pontos;

            let formAlt = document.getElementById("formAlterar");
            formAlt.style.display = "block";
        }
    }
    xmlHttp.open("GET", "http://localhost/3DAW/TrabalhoCopa/buscarSelecao.php?nome=" + nome);
    xmlHttp.send();
}