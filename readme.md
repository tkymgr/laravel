1. ログイン認証を有効にする
```
$ php artisan migrate
$ php artisan make:auth
```
2. 日本語メッセージを導入する
```
$ php -r "copy('https://readouble.com/laravel/5.8/ja/install-ja-lang-files.php', 'install-ja-lang.php');"
$ php -f install-ja-lang.php
$ php -r "unlink('install-ja-lang.php');"
```
