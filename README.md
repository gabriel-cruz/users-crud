# Crud de Usuários


# CONFIGURAÇÃO DE AMBIENTE
Necessário ter instalado o PHP 7.4 ou superior.

Necessário instalar o framework Laravel. Faça o download [aqui](https://laravel.com/docs/4.2).
Necessário ter o Composer instalado.

Após laravel baixado, abra o projeto e rode o comando  ``composer update`` na raiz do projeto para instalar todas as dependências necessárias.

1. Edite o arquivo .env com as credenciais do seu banco de dados.
1.2. É necessário criar uma database para que as migrations sejam executadas.
2. Para configurar as migrations do projeto, execute o comando ``php artisan migrate``;
3. Para popular o banco de dados por meio das seeds, execute o comando ``php artisan db:seed``;
4.1. Se faz necessário rodar as seeds das classes ``StatesSeeder`` e ``CitiesSeeder`` individualmente
    para isso, rode os comandos ``php artisan db:seed --class=StatesSeeder`` e ``php artisan db:seed --class=CitiesSeeder`` no terminal.
5. Para rodar o servidor Laravel, execute o comando ``php artisan serve`` na pasta do projeto.
