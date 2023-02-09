## MAXIMIZE API

#### listagem de devs

![app](/html/img/app.JPG)

> tecnológias usadas \
* Apache 
* PHP
* JavaScript 
* axios
* Bootstrap
* Docker

 __./template__ _*arquivos de desenvolvimento do frontend_ \
 __./js__ _*funções para renderizar dados da api_  \
 __./api__ _*arquivos da aplicação backend_ \
 __db_init__ _*carrega arquivos do db_


#### Descrição
Esta API tem como objetivo fornecer dados de uma tabela descrição presente em um banco de dados. Ela pode ser acessada através de requisições HTTP GET.

#### Endpoints
A API tem dois endpoints:

* /api/get.php: Este endpoint retorna informações de uma única linha da tabela descrição, baseado no id enviado na URL.
* /api/getall.php (sem especificação de id na URL): Este endpoint retorna informações de todas as linhas da tabela descrição.
* Requisição
A API suporta somente requisições HTTP GET.

#### Resposta
A resposta da API é retornada no formato JSON e pode conter os seguintes campos:

* result: Este campo contém informações sobre a descrição, incluindo id, title, descricao, texto, datas e img.
* error: Este campo é retornado caso ocorra algum erro, incluindo * erros de método HTTP não reconhecido ou id não enviado.
* Exemplo de uso
Considere que a API esteja sendo executada em localhost na porta 8000. 

* Aqui está um exemplo de como acessar o endpoint que retorna informações de uma única linha da tabela descrição:

```
GET http://localhost:8000/api/get.php?id=1
```

* E aqui está um exemplo de como acessar o endpoint que retorna informações de todas as linhas da tabela descrição:

```
GET http://localhost:8000/api/getall.php
```

#### Observações
A API utiliza a biblioteca PDO do PHP para se conectar ao banco de dados.
O arquivo config.php é responsável por conter as configurações de conexão com o banco de dados.
O arquivo return.php é responsável por retornar a resposta em formato JSON.

```bash
$ git clone https://github.com/newtoncutrim/maximizeapi.git
$ cd testemaximizeapi
$ docker-compose up --build -d
```
Rodando em http://localhost:8000
