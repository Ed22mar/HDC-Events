

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<h1 align="center">HDC Events</h1>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

Sistema completo para gerenciamento de eventos, desenvolvido com Laravel. Permite criar, editar, visualizar e participar de eventos, com autenticação de usuários e dashboard.

## :rocket: Funcionalidades
- Listar eventos
- Buscar eventos por nome
- Visualizar detalhes do evento
- Participar de eventos (relacionamento many-to-many)
- Criar, editar e excluir eventos
- Autenticação de usuários (Jetstream, Fortify)
- Dashboard do usuário

## :file_folder: Estrutura
- `app/` - Controllers, Models, Providers
- `resources/views/` - Templates Blade
- `public/` - Assets públicos (CSS, JS, imagens)
- `database/` - Migrations, Seeders, Factories
- `routes/` - Rotas web e API
- `config/` - Configurações

## :wrench: Instalação
1. Clone o repositório:
   ```sh
   git clone https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git
   cd nome-do-projeto
   ```
2. Instale as dependências:
   ```sh
   composer install
   npm install
   ```
3. Configure o `.env`:
   ```sh
   cp .env.example .env
   # Edite as variáveis conforme seu ambiente
   ```
4. Gere a chave:
   ```sh
   php artisan key:generate
   ```
5. Execute as migrations e seeders:
   ```sh
   php artisan migrate --seed
   ```
6. Compile os assets:
   ```sh
   npm run build
   ```
7. Inicie o servidor:
   ```sh
   php artisan serve
   ```

## :computer: Testes
```sh
php artisan test
```

## :bulb: Observações
- O arquivo `public/build/manifest.json` deve existir após rodar `npm run build`.
- O banco padrão é SQLite, configurável no `.env`.

## :handshake: Contribuição
1. Fork o projeto
2. Crie uma branch: `git checkout -b minha-feature`
3. Commit: `git commit -m "Minha feature"`
4. Push: `git push origin minha-feature`
5. Abra um Pull Request

## :page_facing_up: Licença
MIT
---
Projeto desenvolvido com [Laravel](https://laravel.com/) seguindo as melhores práticas do framework.

## Funcionalidades
- Listar eventos
- Buscar eventos por nome
- Visualizar detalhes do evento
- Participar de eventos (relacionamento many-to-many)
- Criar, editar e excluir eventos
- Autenticação de usuários (Jetstream, Fortify)
- Dashboard do usuário

## Estrutura
- `app/` - Controllers, Models, Providers
- `resources/views/` - Templates Blade
- `public/` - Assets públicos (CSS, JS, imagens)
- `database/` - Migrations, Seeders, Factories
- `routes/` - Rotas web e API
- `config/` - Configurações

## Instalação
1. Clone o repositório:
   ```sh
   git clone https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git
   cd nome-do-projeto
   ```
2. Instale as dependências:
   ```sh
   composer install
   npm install
   ```
3. Configure o `.env`:
   ```sh
   cp .env.example .env
   # Edite as variáveis conforme seu ambiente
   ```
4. Gere a chave:
   ```sh
   php artisan key:generate
   ```
5. Execute as migrations e seeders:
   ```sh
   php artisan migrate --seed
   ```
6. Compile os assets:
   ```sh
   npm run build
   ```
7. Inicie o servidor:
   ```sh
   php artisan serve
   ```

## Testes
```sh
php artisan test
```

## Observações
- O arquivo `public/build/manifest.json` deve existir após rodar `npm run build`.
- O banco padrão é SQLite, configurável no `.env`.

## Contribuição
1. Fork o projeto
2. Crie uma branch: `git checkout -b minha-feature`
3. Commit: `git commit -m "Minha feature"`
4. Push: `git push origin minha-feature`
5. Abra um Pull Request

## Licença
MIT
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
