async function especialidade(barbeiro_id) {
    let url_base = document.querySelector("#url_base").value;

    await axios.post(`${url_base}/barbeiro/get-especialidade`, { barbeiro_id: barbeiro_id }).then(res => {
        let resultado = res.data;
        let nome = resultado.nome;
        let especialidade = resultado.especialidade;

        console.log(resultado);
        document.getElementById("exampleModalLabel").innerHTML = `Barbeiro: ${nome}`;
        document.getElementById("especialidade").innerHTML = `Especialidade: ${especialidade}`;
    });
}