# Vendocart

Vendocart is an open-source eCommerce platform built with Laravel.

> This project is under active development and does not yet have all features implemented.

## Installation

```bash
git clone https://github.com/vendocart/vendocart.git
cd vendocart
cp .env.example .env
make up
make migrate
```

## Usage
- `make up` – Start all containers
- `make down` – Stop and remove containers
- `make restart` – Down and start all containers
- `make rebuild` – Down, Build and start all containers
- `make bash` – Open a shell in the `app` container
- `make migrate` – Run database migrations
- `make seed` – Seed the database
- `make test` – Run Pest test suite
- `make logs` – Follow all container logs

## Key goals:
- Developer-first architecture
- Modular Monolith, Microservice-ready
- Multi-language and multi-currency support
- Plugin system for drivers (SMS, Payments, Shipping)
- API-only (headless)

## Status
- Laravel skeleton initialized
- Composer.json customized
- CHANGELOG.md added
- Docker, Docker Compose & Makefile setup
- Core modules (Settings, Auth) in progress

## Changelog
- See [CHANGELOG.md](CHANGELOG.md)

## License
[MIT License](LICENSE)
