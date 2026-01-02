FROM php:8.2-fpm

ARG UID=1000
ARG GID=1000

RUN groupadd -g ${GID} laravel \
&& useradd -u ${UID} -g laravel -m laravel

WORKDIR /var/www

# Instalar dependências antes
COPY --chown=laravel:laravel . .

# ========================
# System deps
# ========================
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    gnupg \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# ========================
# Composer
# ========================
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# ========================
# Backend deps only
# ========================
COPY composer.json composer.lock ./
RUN composer install \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# ========================
# Copy rest of project
# ========================
COPY . .

# ========================
# Permissions
# ========================
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

USER laravel

CMD ["php-fpm"]
