# Asynchronous Javascript and XML (AJAX)

<center>
<iframe src="https://cpw2.rpmhub.dev/ajax/slides/index.html#/" title="Asynchronous Javascript and XML" width="90%" height="500" style="border:none;"></iframe>
</center>

## Create Read Update Delete (CRUD)

Criação (_Create_), leitura (_Read_), atualização (_Update_) e exclusão (_Delete_) estão entre as operações mais comuns em um sistema. Assim, essa seção irá ilustrar como implementar um CRUD em um banco de dados relacional MySQL por meio de um _front end_ escrito em JS/AJAX e _back end_ em PHP. 

Para baixar e entrar no diretório do projeto:

    git clone https://github.com/rodrigoprestesmachado/cpw2
    cd cpw2/docs/ajax/crud
    code .

### Docker e Docker-Compose

O exemplo foi implementado por meio do [Docker](https://www.docker.com) e possui três containers: (1) MySql, (2) PhpMyAdmin, (3) CRUD propriamente dito. O _container_ do CRUD está alicerçado em uma [imagem docker do PHP](https://hub.docker.com/_/php) onde a biblioteca do MySQL (mysqli) foi incluída do no interpretador do PHP. O `Dockerfile` do _container_ do CRUD é o seguinte:

```yml
FROM php:8.0.8-apache
RUN docker-php-ext-install mysqli
```

Para colocar para rodar os três containers foi criado e configurado um arquivo `docker-compose.yml` que possui o seguinte conteúdo:

```yml
version: "3.7"
volumes:
  database:
services:
    db:
        image: mysql:latest
        container_name: crud-mysql
        ports:
            - 3306:3306
        volumes:
            - ./init:/docker-entrypoint-initdb.d
        environment:
            - MYSQL_ROOT_PASSWORD=crud
            - MYSQL_DATABASE=crud
            - MYSQL_USER=crud
            - MYSQL_PASSWORD=crud
    phpmyadmin:
        image: phpmyadmin/phpmyadmin:latest
        container_name: crud-phpmyadmin
        environment:
            - PMA_ARBITRARY=1
        links:
            - "db"
        ports:
            - 8080:80
        volumes:
            - /sessions
    app:
        build: .
        container_name: crud
        volumes:
            - .:/var/www/html
        depends_on:
            - "db"
            - "phpmyadmin"
        ports:
            - 80:80
            - 443:443
```

O arquivo `docker-compose.yml` possui três containers/serviços: (1) `db`, (2) `phpmyadmin` e (3) `app`. O _container_ `db` é responsável por disponibilizar o banco de dados MySQL, o _container_ `phpmyadmin` é responsável por por exibir um sistemas de gerenciamento do banco de dados, finalmente o _container_ `app` executa o CRUD. Algumas configurações importantes do _container_ `db` são:

* Utiliza a última [imagem](https://hub.docker.com/_/mysql) disponível do banco de dados MySQL no repositório DockerHub.
* Roda na porta 3306.
* Utiliza o usuário de nome `crud` e senha `crud`.
* Utiliza o banco de dados de nome `crud`.
* Carrega os scripts `.sql` que estiverem no diretório `init` para inicializar o banco de dados (`./init:/docker-entrypoint-initdb.d`).

Configurações importantes do _container_ `phpmyadmin` são:

* Utiliza a última [imagem](https://hub.docker.com/_/phpmyadmin) disponível do `phpmyadmin` no repositório DockerHub.
* Roda na porta 8080.

Configurações importantes do _container_ `app` são:

* Criar uma imagem de acordo com o arquivo `Dockerfile`, ou seja, baseado numa imagem do PHP no DockerHub.
* Roda na porta 80.
* Todos os arquivos que estiverem no mesmo diretório do `docker-compose.yml` serão enviados para `/var/www/html` dentro do _container_ `app`.

Para rodar os três containers e, consequentemente, subir o exemplo do CRUD, é necessário executar o comando `docker-compose up -d` no mesmo diretório do arquivo `docker-compose.yml`. Uma dica importânte, para trabalhar com containers no vscode instale a [extensão](https://code.visualstudio.com/docs/containers/overview) do Docker.

# Referências

* [AJAX Introduction](https://www.w3schools.com/js/js_ajax_intro.asp) no W3C Schools

* MILETTO, Evandro Manara. [Desenvolvimento de software II: introdução ao desenvolvimento web com html, css, javascript e php](https://biblioteca.ifrs.edu.br/pergamum_ifrs/biblioteca_s/acesso_login.php?cod_acervo_acessibilidade=5020682&acesso=aHR0cHM6Ly9pbnRlZ3JhZGEubWluaGFiaWJsaW90ZWNhLmNvbS5ici9ib29rcy85Nzg4NTgyNjAxOTY5&label=acesso%20restrito). Porto Alegre Bookman 2014 1 recurso online ISBN 9788582601969.

<center>
<a href="https://github.com/rodrigoprestesmachado" target="blanck"><img src="../imgs/logo.png" alt="Rodrigo Prestes Machado" width="3%" height="3%" border=0 style="border:0; text-decoration:none; outline:none"></a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Atribuição 4.0 Internacional</a>
