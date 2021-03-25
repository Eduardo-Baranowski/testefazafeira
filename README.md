# [Intrução Para Utilização da Aplicação]

> Features:

- Criação de Usuários
- Criação de produtos
- Design Patterns
- Testes Unitários
- Cada usuário poderá cadastrar produtos.
- Todos os produtos serão exibidos dentro de uma página principal (home) do projeto, exceto os produtos cadastrados pelo usuário logado.
- Cada usuário terá acesso a um painel, com duas seções: os produtos criados por ele mesmo, e a lista de desejos do usuário.
- Cada usuário poderá adicionar um produto seu, ou de outro usuário em sua lista de desejos.
- Dentro do painel, cada produto terá uma página interna em que mostra os dados dos produtos, e quantos usuários favoritaram o produto.
- Listagens de produtos com paginação.
- Versão 7.3 do PHP
- Laravel Installer 4.0.4
- Composer version 2.0.11


# How to use it

```bash
$ # Get the code
$ git clone https://github.com/Eduardo-Baranowski/testefazafeira
$
$ # Create BD
$ Após a criação do banco incluir as váriáveis de ambiente como descrito em .env.exemple
$
$
$
$ # Start the application (development mode)
$ npm install && npm run dev
$ php artisan serve
$
```



## Code-base structure

The project is coded using a simple and intuitive structure presented bellow:

```bash
< PROJECT ROOT >
   |
   |-- produtos-feira/                  # Arquivos da Aplicação
   |    |-- app/                        # Iclusão dos arquivos do bd de produtos e categorias
   |         |                    
   |         |-- Classes/               # Classes criadas pelo usuário.
   |         |-- Http/                  # Arquivos como os de Controllers.
   |         |-- Models/                # Classes embutidas no auth instalado.
   |         |-- Providers/             # Serviços. Por exemplo onde é linkada as interfaces com os repositórios do Eloquent .
   |         |-- Repositories/          # Repositórios para se trabalhar com o banco.
   |              |
   |              |-- Contracts/        # Interfaces contendo as funções a serem utilizadas pelos repositórios.               
   |              |-- Eloquent/         # Respositórios a serem utilizados nos controladores.               
   |    |-- database/                   # Arquivos do banco, por exemplo: migrations .
   |    |-- resources/                  # Views e arquivos de renderização.
   |    |-- routes/                     # Rotas.
   |    |-- tests/                      # Onde se encontram os arquivos de testes da aplicação.
   |-- ************************************************************************
```

