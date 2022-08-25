### Realizado o consumo da API e Gravação em Base de Dados

* O backup da base de dados encontra-se na pastas docs

### Ações que o teste realiza

* Busca a informação atráves do código de remessa informado no parâmetro GET do endpoint da API;
* Grava as informações retornadas no Banco caso não exista, caso existir somente é visualizado em tela;
* Realizado a atualização de somente alguns campos;


Obs: Realizado somente a atualização de alguns campos pois acredito que o foco seria consumir a API e exibir as informações para o usuário.

URL Utilizada localmente (utilizei o xammp para teste e banco PostgreSQL):

```
http://localhost/api-crud-postgres/
```

EndPoints criados internamente:

- [GET] http://localhost/api-crud-postgres/ead-codremessa/{id}
- [GET] http://localhost/api-crud-postgres/busca-codhist/{id}
- [POST] http://localhost/api-crud-postgres/busca-codhist/editar
