# CRUD simples e rápido usando o framework Laravel

O projeto “CRUD simples e rápido” usando o *framework* Laravel foi desenvolvido como parte da avaliação da disciplina Engenharia de Software II da 
FACULDADE DE TECNOLOGIA SENAC PELOTAS do Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas. Dando sequência, 
então será mostrado como se instala esse *framework* e quais ferramentas utilizar para isso, após vou demonstrar como desenvolver o CRUD simples e 
rápido utilizando essa tecnologia e por fim, mostrarei os links e afins para se obter o máximo de conhecimento sobre Laravel.

# O framework Laravel

O Laravel como dito, é um *framework* PHP e esse por sua vez usa o padrão **MVC**, **Model-View-Controller**, 
que é um padrão para desenvolvimento de *softwares* (aplicações *web*). 
O padrão MVC fundamenta-se na separação de conceitos e a reusabilidade de código dentro da aplicação (projeto). Esse fora desenvolvido por **Taylor Otwell**.

## Objetivo

O seu objetivo então é ajudar a desenvolver aplicações seguras e com boa performance, 
ajudar também em aplicações que precisam ser desenvolvidas muito rápidas. Ajuda a termos aplicações mais claras e de códigos limpos.

## Requisitos

* PHP instalado (atualizado)
* Algumas extensões desabilitadas: (ou melhor, descomentadas no arquivo “php.ini”)
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
    * XML PHP Extension
* Instar o Composer (ferramenta para gerenciamento de dependências para o PHP)
* Uma IDE (NetBeans) ou editor de texto (Sublime Text 2)
* Servidor Apache
* BD (Banco de dados)

**No caso, eu utilizei o Wampserver64 que já possui o Apache e BD (MySQL) e o Sublime Text 2 para apresentar os códigos e toda a lógica da aplicação.**

## [Documentação] (https://laravel.com/docs/5.4 "Documentação Laravel")

Não existe documentação em português e sim uma ótima documentação em inglês que pode ser 
traduzida em seu site (navegadores como o Google Chrome fazem a tradução) e uma vasta comunidade ativa na internet.

## Instalação e Configuração (Windows 10)

A instalação e configuração é feita através do Composer, algumas configurações são feitas através da IDE, editor de texto e/ou SO (Sistema Operacional).

1. Instalar o Composer apontando-o para o caminho de onde se encontra o php (normalmente ele faz isso sozinho), *next*, *next*, *next*…
2. Instalar o Laravel usando o Composer ou CMD (CMD ou *prompt* de comando só funciona após ter instalado o Composer), após aberto um desses dois, digite:

```php
composer global require "laravel/installer"
```

### Testando (IMPORTANTE)

**Após isso digite "laravel", caso de algum erro devemos configurar as variáveis de ambiente do Windows, se aparecer laravel e sua versão é por que tudo ocorreu bem.**

Caso tenha dado o erro?

* Clique com o botão direito encima do botão inciar Windows
* Clique então em sistema
* Configurações avançadas do sistema
* Clique então no botão “variáveis de ambiente”
* Após isso devemos colocar o caminho *“C:\Users\COMOSEUUSUARIO\AppData\Roaming\Composer\vendor\bin”* nessa janela de variáveis de ambiente
* Aqui tome cuidado, devemos ir na variável **PATH** que está na lista de variáveis do sistema e não nas variáveis de usuário
* Com isso colocaremos o caminho *“C:\Users\COMOSEUUSUARIO\AppData\Roaming\Composer\vendor\bin”* separando com um “;” esse caminho com os que já tinham antes
* Por fim, Salve e teste novamente

**ATENÇÃO! ESSES LUGARES DE CONFIGURAÇÕES PODEM MUDAR DEPENDENDO DO SO.**

### Criando a primeira aplicação

**Atenção!** Esses passos são explicados melhores no **vídeo** que estará no **[link] (https://www.youtube.com/watch?v=V1RA7V2Kn8g&feature=youtu.be)** ao final dessa parte.

* Primeiro devemos navegar até a pasta onde são feitos os projetos (no meu caso *www* do **Wampserver64**) e digitarmos o comando para criamos o primeiro projeto:

```php
laravel new nomeDoProjeto
```

* Cria-se o banco de dados no *phpMyAdmin* dando-lhe um nome: **teste** por exemplo. Com isso já podemos configurar o arquivo *.env* que esta na raiz do projeto, colocando as informações do usuario do BD, senha e nome do banco.
* Abra o **CMD** novamente e digite:

```php
php artisan make:migration create_nametable_table
```
…esse comando cria a estrutura da tabela que queremos adicionar ao banco.

* Ainda no **CMD**…

```php
php artisan make:model NameModel
```

...esse passo criará a *model* que faz a conexão direta com a tabela do banco.

* Continuando:

```php
php artisan make:controller NameController
```

...esse passo criará a *controller*, que será responsável pela lógica da aplicação.

Como foi visto, os principais passos para criamos um simples **CRUD** depende de poucos comandos nos quais comparados 
a outros *frameworks*, pouparíamos tempo e esforço, porém, ainda devemos escrever pouquíssimas linhas de código que serão mostrados no [vídeo] (https://www.youtube.com/watch?v=V1RA7V2Kn8g&feature=youtu.be) (*routes* e *views*) e uma **correção de um erro no decorrer do aprendizado**.

## Vantagens 

* Uma vasta comunidade ativa falando sobre o Laravel
* O poder da ferramenta **blade** para criamos os *layouts* da aplicação
* Criação de aplicações rápidas

## Desvantagens 

* Documentação, erros e fóruns (grande maioria) todos em inglês 
* Abstração de muitos conceitos e padrões

Pesquisando pela *net* aqui e ali a grande maioria não ve desvantagens no *framework*!

## Tecnologias Usadas

* Sublime
* NetBeans
* CSS
* JS
* JQuery
* Bootstrap
* Laravel
* Wamp

## Onde se informar mais:

* **Laravel:** <https://laravel.com/docs/5.4>
* **Laravel Brasil:** <http://www.laravel.com.br/>
* **GitHub:** <https://github.com/laravelbrasil>
* **Vídeo no YouTube:** <https://www.youtube.com/watch?v=V1RA7V2Kn8g&feature=youtu.be>

