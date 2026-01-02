#!/bin/bash

echo "🔧 Setting up application..."

docker compose up -d

echo "📦 Installing backend deps..."
docker compose exec app composer install

echo "📦 Installing frontend deps..."
docker compose exec app npm install

echo "🏗️ Building frontend..."
docker compose exec app npm run build

echo "🔑 Generating app key..."
docker compose exec app php artisan key:generate

echo "🗄️ Running migrations..."
docker compose exec app php artisan migrate

echo "🧹 Clearing caches..."
docker compose exec app php artisan optimize:clear

echo "✅ Setup completed!"