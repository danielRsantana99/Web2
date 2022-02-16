<h1 align="center">
    <img src="http://socape-gabriel.herokuapp.com/images/socape.png" alt="SOCAPE" width="250">
    <p>Sistema de Controle de Vendas e Estoque</p>
</h1>

<div align="center">
    <p>Um projeto desenvolvido para a disciplina de WEB II do curso de Análise e Desenvolvimento de Sistemas - IFBaiano <i>Campus</i> Guanambi</p>
</div>

#

<div align="center">
    <h3><i>Tecnologias Utilizadas</i></h3>
    <img src="https://img.shields.io/badge/LARAVEL-777BB4?style=for-the-badge&logo=laravel&logoColor=white">
    <img src="https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white">
</div>





<br>
<h1 align="center">
  <!--<img src="">-->
  <p>🖥 Projeto II</p>
</h1>
<p align="center">
       Este é um sistema simples de vendas de escapamento para veículos feito utilizando o framework em laravel, Como um projeto da disciplina de web 2. Semestre 2021.1 do curso de <b>Análise e Desenvolvimento de Sistemas</b> ofertado pelo <a href="https://www.ifbaiano.edu.br/unidades/guanambi/"><b>IFBaiano <i>Campus</i> Guanambi</a> durante os anos de 2021 e 2022.</b> Professor: <b>Fabio dos Santos Lima</b>
</p>



### 📌 → Instalando localmente
- Pré requisitos: <a href="https://www.php.net/">PHP</a> `>= 7` e <a href="https://getcomposer.org/">Composer</a> `>= 2`


- Clone o projeto utilizando o comando abaixo
```bash
  git clone https://github.com/danielRsantana99/Web2
```
- Abra o diretório do projeto
```bash
  cd web2
```
- Selecione a branch `projetoII-backend`
```bash
  git checkout projetoII-backend 
```
- Renomeie o arquivo `.env.example` para `.env`
```bash
  cp .env.example .env
```
- Instale as dependencias
```bash
  composer install
```
- Após instalar todas as dependencias, execute os seguintes comandos no terminal:
```bash
  # Adiciona todas as permissões na pasta storage
  $ chmod -R 777 storage 
  # Gera a chave da aplicação
  $ php artisan key:generate 
  # Cria um link simbólico entre as pastas /public/storage -> /storage/app/public
  $ php artisan storage:link
```
- E por ultimo, os seguintes comandos
```bash
  # Cria todas as tabelas do banco de dados SQL
  $ php artisan migrate
  # Cria um servidor em sua localhost na porta 8000 a partir do próprio php
  $ php -S localhost:8000 public/index.php
```
#

<p align="center">
  <i>Desenvolvido por Daniel Rocha de Santana</a></i>
</p>


