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
``` 

composer install  # vendorの入手


```



```

cp .env.example .env # .envの入手

php artisan key:generate # app key の発行

```

## データ準備

```

php artisan migrate:refresh --seed

```

# env

開発環境

```


DB_DATABASE=tw
DB_USERNAME=root
DB_PASSWORD=

APP_SECURE=true # 追加

```

# icons
[fontawesome](https://fontawesome.com/icons?d=gallery)

# TW Database

[talewiki](http://talewiki.com)

# 課題

* 使うスキルの優先度(戦闘は自動なので)
* 回復薬の自動使用
* 自動だとしたらどのタイミングで使うのか(残何%?)
* 

# バッシュコマンド

[bash](http://tech.clickyourstyle.com/articles/8)

```

sh start.sh

```