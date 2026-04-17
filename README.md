# PW_PHP

Repositório de projetos e tarefas de Programação Web com PHP, desenvolvidos em ambiente XAMPP. 
A coleção abrange desde aplicações básicas de navegação até sistemas completos com gerenciamento de banco de dados 
utilizando arquitetura MVC.

## Tarefa1

Primeira tarefa prática de Programação Web implementando estrutura básica de navegação em PHP. 
Implementa padrão de roteamento simples com includes condicionais para renderização dinâmica de páginas. 
Estrutura de componentes reutilizáveis com separação de responsabilidades: `cabecalho.php` para meta tags e importações, 
`navbar.php` para barra de navegação, `scripts.php` para dependências JavaScript. 
Utiliza `index.php` como ponto de entrada que gerencia a exibição de diferentes seções através de parâmetros GET. 
Inclui subdireções para gerenciamento de categorias e fornecedores, demonstrando organização modular de funcionalidades.

## Tarefa2

Tarefa intermediária implementando estrutura MVC básica com separação de assets e views. 
O diretório `assets/` contém recursos estáticos como CSS e imagens, enquanto `views/` armazena templates HTML reutilizáveis. 
Implementa padrão de renderização com templates dinâmicos que recebem dados processados do controller. 
Demonstra práticas de organização de projeto escalável com isolamento de responsabilidades 
entre lógica de negócio e apresentação visual. Fornece fundação para integração posterior com banco de dados.

## Tarefa3

Tarefa avançada com integração completa de banco de dados implementando operações CRUD (Create, Read, Update, Delete)
em estrutura MVC consolidada. Diretório `models/` contém classes para manipulação de dados com métodos para
inserção, consulta, atualização e exclusão de registros. 
Views dinâmicas em `views/` renderizam dados recuperados do banco com formulários para entrada de dados.
Asset estático em `assets/` mantém estilos e scripts da aplicação. 
Incluir arquivo de anotações "AULA PW banco de dados.txt" documentando conceitos de design de banco e consultas SQL. 
Implementa padrão de persistência de dados com abstração de operações de banco de dados.

## Projeto1

Primeiro projeto prático integrando conceitos de navegação PHP com estrutura de componentes reutilizáveis. 
Similar à Tarefa1, implementa `index.php` como arquivo de entrada que gerencia roteamento através de includes condicionais. 
Estrutura modular com `cabecalho.php`, `navbar.php` e `scripts.php` facilita manutenção e extensão de funcionalidades. 
Inclui subdireção `categoria/` para gerenciamento de dados categorizados. 
Demonstra aplicação prática de padrões de organização de código aprendidos em tarefas anteriores.

## Projeto2

Segundo projeto expandindo conceitos de navegação com estrutura de diretórios mais robusta. 
Mantém padrão similar ao Projeto1 com roteamento via `index.php` e componentes modulares. 
Inclui subdireção `categoria/` para operações de gerenciamento de dados. Implementa `navbar.php` com 
navegação expandida para suportar múltiplas rotas de aplicação. 
Demonstra evolução incremental de funcionalidades com refinamento de interface de usuário e experiência de navegação.

## Projeto3

Terceiro projeto implementando arquitetura MVC completa com integração de banco de dados. 
Estrutura profissional com diretórios `models/`, `views/` e `assets/` permitindo escalabilidade e manutenibilidade.
Diretório `models/` contém classes para operações de persistência com métodos de CRUD.
Views em `views/` renderizam dados dinâmicos com interface de usuário aprimorada. 
Assets em `assets/` mantém recursos estáticos. Incluir anotações "AULA PW banco de dados.txt" com 
referência a conceitos de design relacional e otimização de consultas. 
Representa consolidação de conhecimento em desenvolvimento web fullstack com PHP.
