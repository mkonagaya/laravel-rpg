# laravel-rpg
オンライン対戦可能なRPG作ってみる。

# CSS
[mdbootstrap](https://mdbootstrap.com/docs/jquery/)

``` npm install mdbootstrap ```


# Pusher

https://www.slideshare.net/ssuser2ff728/laravel-echo-vuejs-axios

``` composer require pusher/pusher-php-server ```

https://nextat.co.jp/staff/archives/213


# 毎回やること
``` composer install ```

vendorの入手

```

cp .env.example .env # .envの入手

php artisan key:generate # app key の発行

```

# env

開発環境

```


DB_DATABASE=tw
DB_USERNAME=root
DB_PASSWORD=

APP_SECURE=true # 追加

```