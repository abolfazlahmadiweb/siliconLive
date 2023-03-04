# ✅ ticket management project with auth system - LIVEWIRE

for install this project, run :

```
git clone git@github.com:abolfazlahmadiweb/siliconLive.git
```
Then
```
cd siliconLive
```
after this, run
```
composer install
```
and remove storage dir from public
```
rm -rf public/storage
```
and for link again
```
php artisan storage:link
```
and make **.env** file
```
cp .env.example .env
```
and create database __live__ run migtaion and seeder
```
php artisan migrate --seed
php artisan serve
```
BINGO 🎉💥
