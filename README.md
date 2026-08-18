# Sistema de Cadastro de Pratos

## Nome do Projeto

Sistema-de-Cadastro-de-Pratos

# Objetivo da Aplicação

Desenvolver uma aplicação web simples utilizando PHP e MySQL para realizar o cadastro de pratos e usuários, permitindo relacionar cada prato ao usuário responsável pelo seu cadastro.

O projeto tem como objetivo praticar conceitos de desenvolvimento back-end, integração com banco de dados, utilização de formulários HTML, consultas SQL e relacionamento entre tabelas.

## Tecnologias Utilizadas

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap
* XAMPP
* Git e GitHub

## Interface

A interface do sistema foi desenvolvida utilizando HTML, CSS e o framework Bootstrap 5. O Bootstrap foi utilizado para auxiliar na criação dos formulários, organização dos elementos da página e estilização da aplicação.

Na página inicial, existe um formulário para inserir as informações de um novo prato. O formulário possui campos para nome, categoria, descrição, preço e usuário responsável pelo cadastro.

O usuário responsável é selecionado através de uma lista suspensa que é preenchida dinamicamente com os usuários cadastrados no banco de dados.

## Estrutura Básica dos Arquivos

```text
projeto/
│
├── index.php
├── README.md
│
├── database/
│   └── db.sql
│
├── infra/
│   └── conexao.php
│
├── public/
│   ├── prato/
│   │   └── cadastrarPrato.php
│   │
│   └── usuario/
│       └── cadastrarUsuario.php
│
└── style/
    └── styles.css
```

A estrutura atual do projeto está organizada dessa forma, separando os arquivos de banco de dados, conexão, operações públicas e estilos.

### Prepared Statements

Durante o desenvolvimento do projeto também foi praticado o uso de **Prepared Statements** nas operações com o banco de dados.

Essa técnica permite separar a estrutura da consulta SQL dos valores que serão enviados para ela.

Exemplo:

```php
$stmt = $conexao->prepare($sql);

$stmt->bind_param(
    "sdssi",
    $nome,
    $preco,
    $descricao,
    $categoria,
    $id_usuario
);

$stmt->execute();
```

O uso desse recurso ajuda a evitar problemas relacionados à inserção de valores diretamente nas consultas SQL, como ataques de **SQL Injection**.

# Durante o desenvolvimento e análise do projeto, foram praticados os seguintes conceitos:

* Conexão entre PHP e MySQL.
* Utilização de consultas SQL no PHP.
* Utilização dos comandos `SELECT` e `INSERT`.
* Utilização do método `POST`.
* Criação e utilização de formulários HTML.
* Manipulação de dados enviados através de formulários.
* Criação de relacionamentos entre tabelas.
* Utilização de chave estrangeira.
* Utilização de Prepared Statements.
* Uso de `bind_param()` para passar valores às consultas.
* Exibição dinâmica de dados do banco de dados em elementos HTML.
* Organização de projetos em diferentes pastas.
* Utilização do Bootstrap para criação da interface.
* Versionamento utilizando Git e GitHub.

## Dificuldades Encontradas

--

## Conclusão

O desenvolvimento do **Sistema de Cadastro de Pratos** permitiu colocar em prática conceitos de desenvolvimento web utilizando PHP e MySQL.

Além do cadastro de informações, o projeto possibilitou trabalhar com relacionamento entre tabelas, formulários, consultas SQL, Prepared Statements e organização de um projeto em diferentes diretórios.

O projeto também serviu para reforçar conhecimentos sobre a comunicação entre o front-end e o back-end e sobre a forma como os dados são enviados, processados e armazenados em um banco de dados.
