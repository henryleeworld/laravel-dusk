# Laravel 10 瀏覽器測試

引入 laravel 的 dusk 套件來擴增提供了一個可讀性高且易於瀏覽器自動化測試 API。預設不需要在你的機器上安裝 JDK 或 Selenium。而是使用獨立安裝的 ChromeDriver。然而，你可以自由的運用任何與 Selenium 相容的驅動。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 在你的 .env 檔案中設定 APP_URL 環境變數。這個值應該會你在瀏覽器中存取你的應用程式的 URL 匹配。
- 使用 __Artisan__ 指令的 __dusk:install__ 來在 Browser 目錄裡面建立 tests 目錄。
```sh
$ php artisan dusk:install
```
- 使用 __Artisan__ 指令的 __dusk__ 來執行你的測試。
```sh
$ php artisan dusk
```
----
## 畫面截圖
![](https://i.imgur.com/UEiWQwA.png)
> 使用 Google Chrome 和獨立安裝的 ChromeDriver 來執行你的瀏覽器測試