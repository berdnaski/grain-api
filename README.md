
## Requirements
- php: "^8.1"
- composer: "^2.4"
- node: "^20.1"
- npm: "^10.2"
- mysql running local

## Start app
- Instale as dependências composer
<pre>composer install</pre>
- Instale as dependências node
<pre>npm install</pre>
- Crie uma database com nome grain_db
<pre>mysql</pre>
<pre>create database grain_db character set utf8 collate utf8_unicode_ci;</pre>
- gere a chave para laravel
<pre>php artisan key:generate</pre>
- Rode as migrations
<pre>php artisan migrate</pre>
- Rode os seeds para inicialização dos dados
<pre>php artisan db:seed</pre>
- Rode a aplicação
<pre>php artisan serve</pre>

## Documentation

Basta fazer o login utilizando:
<pre>Email: fred@graodireto.com.br | Password: 123Fred</pre>

### Functionalities
- Está funcionando a parte de login e registro, a dashboard com os restaurants, o show do restaurant com os produtos, a criação de novos restaurantes, e o filtro de busca.

## Language
PHP - Laravel
