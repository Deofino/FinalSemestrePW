![Logo](./public/img/logo9.png)
# Shoes

Este é nosso projeto realizado para menção do primeiro semestre da matéria de Projeto WEB III, desenvolvido com as features solicitadas pelo lecionador de conteúdo ALAN.
Desejamos satisfazer e conseguirmos conquistar um belo de um MB pra nossa conta...
A aplicação será em volta de uma apresentação de SAPATOS e TÊNIS, semelhante a um E-Commerce.  


## Authors

- [@Deofino](https://www.github.com/Deofino)
- [@Vitoria](https://github.com/vitoriaGoncalves08)

     

## Tech Stack

**Front-end:** Html, Css, Javascript, Twig, Apache.

**Back-end:** Php, Mysql, Composer, Git, Github.



## Features

- Url amigável
- Crud completo com Ajax
- Envio de E-mail
- Gráficos usando API do Google Charts
- Api do Google Maps
- Leitura de PDF dinâmica
- Site responsivo
- More features...
 
  

## Run Locally

Clone o projeto dentro de um servidor APACHE (C:/xampp/htdocs/)

```bash
  git clone https://github.com/Deofino/FinalSemestrePW
```

Entre no projeto

```bash
  cd FinalSemestrePW
```

Instale as dependências com composer (Tenha instalado, https://getcomposer.org/download/)

```bash
  cd lib/
  composer install
```

### Dentro da raiz do projeto, configure o arquivo config.php... Ele conterá as contantes globais
### Com servidor Apache ligado, entre no seu PhpMyAdmin, e importe o arquivo dentro de /app/model/Banco.sql

Procure seu projeto no seu servidor Apache e entre na pasta "public"

```bash
  Exemplo Url: http://localhost/FinalSemestrePW/public/
```  




# To do...

## Screenshots

![App Screenshot](https://public/img/github-print/home.png)
![App Screenshot](https://public/img/github-print/dashboard.png)
![App Screenshot](https://public/img/github-print/produtos.png)



## API Reference

#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.

  
