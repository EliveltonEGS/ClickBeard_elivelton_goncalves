new Vue({
    el: '#app',
    data() {
        return {
            url_base: document.getElementById('url_base').value,
            especialidades: [],
            especialidadeBarbeiro: [],
            nome: '',
            cpf: '',
            data_contratacao: '',
        }
    },
    methods: {
        adicionar(item) {
            let nome = this.nome;
            let cpf = this.cpf;
            let data_contratacao = this.data_contratacao;

            if (nome == '' || cpf == '' || data_contratacao == '') {
                alert('Informe todos os campos acima!');
                return false;
            }

            this.especialidadeBarbeiro.push(item);
        },
        remover(index) {
            this.especialidadeBarbeiro.splice(index, 1);
        },
        resetar() {
            this.especialidadeBarbeiro = [];
            this.nome = '';
            this.cpf = '';
            this.data_contratacao = '';
        },
        async cadastrar() {
            let nome = this.nome;
            let cpf = this.cpf;
            let data_contratacao = this.data_contratacao;

            if (isNaN(cpf)) {
                alert('O campo CFP deve ser somente números!');
                return false;
            }

            if (cpf.length < 11) {
                alert('Cpf inváliddo!');
                return false;
            }

            if (nome == '' || cpf == '' || data_contratacao == '') {
                alert('Todos os campos são obrigatórios!');
                return false;
            }

            if (this.especialidadeBarbeiro.length == 0) {
                alert('Adicione uma ou mais especialidades!');
                return false;
            }

            let barbeiro = {
                nome: nome,
                cpf: cpf,
                data_contratacao: data_contratacao,
                especialidade: this.especialidadeBarbeiro
            }

            await axios.post(`${this.url_base}/barbeiro/cadastrar`, barbeiro).then(res => {
                this.resetar();
                alert('Barbeiro incluído com sucesso!');
            });
        },
        async especialidade() {
            await axios.get(`${this.url_base}/barbeiro/especialidade`).then(res => this.especialidades = res.data);
        }
    },
    mounted() {
        this.especialidade();
    }
});