Для запуска проекта:
1. Скопировать файл .env.example с именем .env
2. В файле .env строки
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=
заменить на
   DB_CONNECTION=sqlite
3. В терминале ввести следующие команды:
   - composer update;
   - php artisan key:generate;
   - npm install;
   - npm run dev;
   - php artisan serve;
