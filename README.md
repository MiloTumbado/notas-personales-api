# Notas personales API

Actividad 14. CRUD de notas con título, autor, fecha y hora, contenido y clasificación. La interfaz consulta exclusivamente endpoints JSON para los datos. La edición es pública como pide la actividad.

Aplicaciones web · Módulo 3 · Emilio Garza Vargas.

## Ejecutar

Requiere PHP 7.4, Composer y extensiones SQLite. Laravel 7 se conserva por la consigna académica; ejecutar en desarrollo local.

```sh
composer install
cp .env.example .env
php -r "touch('database/database.sqlite');"
# Configurar DB_DATABASE con la ruta absoluta del archivo SQLite en .env
php artisan key:generate
php artisan migrate --seed
php artisan serve --host=127.0.0.1 --port=8914
```

No se incluyen vendor, .env ni la base privada. Las migraciones y los seeders reconstruyen los datos de ejemplo.

## API
GET /api/categories; GET y POST /api/notes; GET, PUT, PATCH y DELETE /api/notes/{id}.
POST y PUT reciben title, author, noted_at, body, category_id. Respuestas: 201 creación, 200 consulta/edición, 204 eliminación, 422 validación y 404 inexistente. Enviar Accept: application/json.
Category 1:N Note, clave category_id. El autor se almacena como texto sin requerir usuario. Fecha noted_at independiente de created_at/updated_at. Las eliminaciones son permanentes. No publicar este ejercicio abierto con datos personales reales.
