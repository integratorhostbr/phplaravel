# Integrator Laravel Demo

Aplicativo Laravel simples para demonstrar em vídeo o deploy via Git pelo Painel ICP.

## Como usar localmente

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Acesse:

```text
http://127.0.0.1:8000
```

## Deploy via Git no ICP

1. Crie um repositório no GitHub.
2. Envie este projeto para o repositório.
3. No Painel ICP, crie uma aplicação PHP/Laravel.
4. Conecte o repositório GitHub.
5. Configure o diretório público como:

```text
public
```

6. Configure os comandos de build/deploy, se o ICP solicitar:

```bash
composer install --no-dev --optimize-autoloader
cp .env.example .env || true
php artisan key:generate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

7. Faça um push no GitHub e acompanhe o deploy no ICP.

## Observação

Este projeto usa SQLite por padrão apenas para simplificar a demonstração. A página inicial não depende de banco de dados.
