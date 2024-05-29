# アプリケーション名
このアプリケーションは、[check-test2]です。ユーザーがお問い合わせフォームに名前やメールアドレス、問い合わせ内容等の必要情報を入力、
そのデータが管理者の管理画面で表示されるようになっています。
また管理者は登録画面で登録を完了しておかないと管理画面にはログインできないようになっています。
管理画面では名前、メールアドレス、問い合わせ内容等のユーザー入力情報で検索をかけることができるように実装されています。

## 環境構築
1. Dockerのビルド
   docker-compose up -d --build
2. Laravelの環境構築
(1) docker-compose exec php bash
(2) composer install
(3) .env.exampleから.envを作成し、環境変数を変更
(4) php artisan key:generate
(5) php artisan migrate
(6) php artisan db:seed

## 使用技術
.  HTML,CSS
.　PHP
.　Laravel 8.0

## ER図
![check-test2](https://github.com/Otsumu/check-test2/assets/155893944/df9e8eaf-e4d1-4609-9b72-5d96f09bb20f)


## URL
・　環境開発：http://localhost/
・　phpMyAdmin：http://localhost:8080/
# check-test
