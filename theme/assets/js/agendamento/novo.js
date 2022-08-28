new Vue({
    el: '#app',
    data() {
        return {
            url_base: document.getElementById('url_base').value,
            barbeiros: [],
            barbeiro: '',
            data: '',
            horas: '',
            horarios: [],
            title: 'tt'
        }
    },
    methods: {
        resetar() {
            this.data = '';
            this.horarios = [];
            this.barbeiro = '';
            document.getElementById("especialidade").innerHTML = '';
        },
        async listaBarbeiros() {
            await axios.get(`${this.url_base}/agendamento/barbeiros`).then(res => this.barbeiros = res.data);
        },
        async cadastrar() {
            let objetos = {
                barbeiro_id: this.barbeiro.barbeiro_id,
                horario: this.horas.hora,
                horario_id: this.horas.horario_id,
                data: this.data
            }

            await axios.post(`${this.url_base}/agendamento/cadastrar`, objetos).then(res => {
                this.resetar();
                alert('Agendamento realizado com sucesso!');
            });
        },
        async horario() {
            let data = this.data;

            await axios.post(`${this.url_base}/agendamento/horarios`, { data: data }).then(res => this.horarios = res.data);
        },
        async especialidadeBarbeiro(item) {
            await axios.get(`${this.url_base}/agendamento/especialidade/${item.barbeiro_id}`).then(res => {
                document.getElementById("especialidade").innerHTML = `Especialidade - (${res.data.especialidade})`;
            });
        }
    },
    mounted() {
        this.listaBarbeiros();
    }
});