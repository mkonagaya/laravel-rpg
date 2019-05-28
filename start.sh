composer install
cp .env.example .env
php artisan key:generate

sed -i 's/DB_DATABASE=homestead/DB_DATABASE=tw/g' .env
sed -i 's/DB_USERNAME=homestead/DB_USERNAME=root/g' .env
sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=/g' .env

echo APP_SECURE=true >> .env

mysql -uroot 
create database tw; 
exit;

php artisan migrate:refresh --seed
