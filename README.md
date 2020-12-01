# CakePHP3

# 1. Criando Database e Tables


## 1.1 Banco de dados

Criando o database.

```sql
CREATE DATABASE cake
```

## 1.2 Tabela users

Criando a tabela users.

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  created DATETIME,
  modified DATETIME
);
```

# 2. Criando o Projeto

```bash
$ composer create-project --prefer-dist cakephp/app:^3.8 projeto1
```

Testando o projeto

```bash
$ cd\bin
$ cake server -p 8765
http://localhost:8765
```

## 2.1 Configurando acesso ao Database

File: **config/app.php**

```php
return [
  // Mais configuração acima.
  'Datasources' => [
    'default' => [
    'className' => 'Cake\Database\Connection',
    'driver' => 'Cake\Database\Driver\Mysql',
    'persistent' => false,
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'suporte',
    'database' => 'cake',
    'encoding' => 'utf8',
    'timezone' => 'UTC',
    'cacheMetadata' => true,
    ],
  ],
  // Mais configuração abaixo.
];
```

## 3. Estrutura MVC

Para criar a estrutura mvc usamos o bake console.

```bash
$ cake bake all users
```