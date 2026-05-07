# Dream Bouw PHP

Professional presentation website for Dream Bouw Group.

Built with:

- PHP 8.2
- Apache
- MySQL 8
- Docker
- Docker Compose

---

# Project Structure

```text
dreambouwphp/
│
├── src/
│   ├── controllers/
│   └── models/
│
├── includes/
├── images/
├── videos/
│
├── login.php
├── admin-messages.php
├── delete-message.php
├── contact-handler.php
│
├── Dockerfile
├── docker-compose.yml
├── .env.example
└── README.md
```

---

# Requirements

- Docker Desktop (Windows)
or
- Docker + Docker Compose (Linux)

---

# Setup

Clone repository:

```bash
git clone https://github.com/flamax75/dreambouwphp.git
```

Enter project:

```bash
cd dreambouwphp
```

Create `.env` from example:

```bash
cp .env.example .env
```

Edit `.env` with your real credentials.

---

# Start Project

```bash
docker compose up -d --build
```

Website:

```text
http://localhost:8081
```

---

# Stop Project

```bash
docker compose down
```

---

# Admin Panel

```text
http://localhost:8081/login.php
```

---

# Features

- Contact form
- MySQL storage
- Admin login
- Message management
- Docker environment
- Responsive admin panel

---

# Security

- Password hashing
- Environment variables with `.env`
- `.gitignore` protection
- Session-protected admin pages# dreambouw-web