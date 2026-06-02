# 🌊 Bolinao Tourism Booking System

A Laravel-based tourism booking system for Bolinao, Pangasinan — showcasing local tour packages like Patar Beach, Cape Bolinao Lighthouse, Bolinao Falls, and more.

---

## 👥 Developers

| Name | Role |
|------|------|
| [Member 1] | Backend / Database |
| [Member 2] | Frontend / Blade Templates |
| [Member 3] | API / Reports |

---

## 🗺️ How the System Works

### Tourist
1. Register / Login
2. Browse Bolinao tour packages (filter by type, price, location)
3. Book a tour → choose date and number of guests
4. View reservations → see status (Pending / Confirmed / Cancelled)
5. Cancel pending bookings
6. Leave a review after a confirmed tour

### Admin
1. Login with admin credentials
2. Dashboard → see total bookings, revenue, pending approvals
3. Manage packages → Create, Edit, Delete tour packages
4. Approve or cancel bookings
5. Generate reports → export PDF, CSV, XLSX, JSON

---

## ⚙️ Installation & Setup

```bash
# 1. Clone the repo
git clone https://github.com/your-username/bolinao-tourism.git
cd bolinao-tourism

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install && npm run build

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Set up database in .env
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

# 7. Run migrations and seed
php artisan migrate --seed

# 8. Link storage
php artisan storage:link

# 9. Serve the app
php artisan serve
```

---

## 🔑 Default Accounts

| Role    | Email                  | Password    |
|---------|------------------------|-------------|
| Admin   | admin@bolinao.com      | password123 |
| Tourist | juan@example.com       | password123 |

---

## 🚀 Deployment

Hosted at: **[your-deployment-link-here]**

Deployed using: Railway / InfinityFree / Render

---

## 📦 Tech Stack

- **Backend:** PHP 8.2 + Laravel 11
- **Database:** MySQL / SQLite
- **Frontend:** Blade Templates + Bootstrap 5
- **API:** Laravel Sanctum (REST API)
- **Reports:** DomPDF (PDF), CSV, JSON
- **Version Control:** GitHub
