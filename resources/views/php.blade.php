  php:
    restart: unless-stopped
    container_name: php_container
    build:
        context: ./docker/php
    working_dir: ${WEB_ROOT}
        volumes:
        - .:${WEB_ROOT}
        - terminal-history:/root/
        - ./docker/php/www.conf:/usr/local/etc/php-fpm.d/www.conf
    environment:
        - WEB_ROOT=${WEB_ROOT}