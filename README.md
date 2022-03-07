## Cara Installasi

- Buka Terminal / CMD
- Clone project <code>https://github.com/Utamieahmad/sample_crud.git</code>
- cd sample_crud
- Ketik <code>composer install</code>
- Kemudian ketik <code>cp .env.example .env</code>
- Ketik <code>php artisan key:generate</code>
- Buat database baru bernama <code>db_laravel8_crud</code>
- Konfigurasi database di <code>.env</code>
- Ketik <code>php artisan migrate</code>
- Jalankan dengan <code>php artisan serve</code>
- Buka browser dan ketik <code>http://127.0.0.1:8000/posts</code>
