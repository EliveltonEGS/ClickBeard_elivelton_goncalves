new Vue({
    el: '#app',
    data() {
        return {
            url_base: document.getElementById('url_base').value,
            agendamentos: [],
            nome: ''
        }
    },
    methods: {
        async listaAgendamentos() {
            await axios.post(`${this.url_base}/agendamento/agendamentos`, { nome: this.nome }).then(res => {
                this.agendamentos = res.data
            });
        },
        async cancelar(item) {
            let objetos = {
                horario_id: item.horario_id,
                agendamento_id: item.agendamento_id,
                data: item.data
            }

            if (confirm("Deseja realmente cancelar o agendamento?") == true) {
                await axios.post(`${this.url_base}/agendamento/cancelar`, objetos).then(res => {
                    if (res.data == "NOK") {
                        alert("Você não poderá cancelar o seu horário com menos de 02:00:00 faltando para o horário marcado!");
                        return false;
                    }

                    this.listaAgendamentos();
                    alert('Agendamento cancelado com sucesso!');
                });
            }
        },
        async concluirAgendamento(item) {
            await axios.get(`${this.url_base}/agendamento/concluir/${item.agendamento_id}`).then(res => {
                this.listaAgendamentos();
                alert('Agendamento finalizado com sucesso!');
            });
        }
    }
});