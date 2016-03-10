## Lumen REST API

Table of Contents
-----------------
1. **[Description](#description)**
2. **[Installation](#installation)**
3. **[Test](#test)**
4. **[Routing](#routing)**
5. **[Helpers](#helpers)**



Description
-----------
REST API using lumen micro framework by laravel


Installation
------------
a. Fork or just clone this repo directly
```
$ git clone https://github.com/cescgie/lumen-rest-api.git
```

b. Create new database in your server

c. Rename .env.example to .env and it set the config database details
```
  DB_CONNECTION=mysql
  DB_HOST=DATABASE_HOST
  DB_DATABASE=DATABASE_NAME
  DB_USERNAME=DATABASE_USER_NAME
  DB_PASSWORD=DATABASE_PASSWORD
```

c. Install the migration
```
$ php artisan migrate:install
```

d. Run the migration to create the table on the database
```
php artisan migrate
```

e. Seed the dummy data which stored in database/seeds
```
php artisan db:seed
```

Test
------------
Now your API is ready. Its time tests the app. For testing, You can user chrome extension <a href="https://chrome.google.com/webstore/detail/postman-rest-client/fdmmgilgnpjigdojojpjoooidkmcomcm">POSTMAN</a> or use CURL.
* Get all data
```
$ curl -I http://localhost:8000/api/article
```
* Get specific article by id
```
$ curl -v -H "Accept:application/json" http://localhost:8000/api/article/1
```
* Post new article
```
$ curl -i -X POST -H &quot;Content-Type:application/json&quot; http://localhost:8000/api/article -d '{&quot;article_name&quot;:&quot;Test Article&quot;,&quot;article_description&quot;:&quot;test description&quot;}'
```
* Update specific article by id
```
$ curl -v -H "Content-Type:application/json" -X PUT http://localhost:8000/api/article/2 -d '{"article_name":"Test updated article","article_description":"test upadted article"}'
```
* Delete specific article by id
```
$ curl -i -X DELETE http://localhost:8000/api/article/2
```

Routing
-------
| HTTP | URL      | Description           | Request   | Response  |
| ---: |:--------:| :------------------- | :-------- | :-------- |
| GET | /api/article | Get all articles  | - | [{"id":1,"created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00","article_name":"T-Shirt","article_description":"New upcomer for this summer"},{"id":2,"created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00","article_name":"Jeans","article_description":"Most searched item"}] |
| GET  | /api/article/{id} | Get specific article by id | - | {"id":1,"created_at":"-0001-11-30 00:00:00","updated_at":"-0001-11-30 00:00:00","article_name":"T-Shirt","article_description":"New upcomer for this summer"}|
| POST | /api/article      | Add new article | {"article_name": "Coat", "article_description": "Latest article"} | {request} |
| PUT  | /api/article/{id} | Update specific article | {"article_name": "Coat", "article_description": "Update latest article"} | {request} |
| DELETE  | /api/article/{id} | Delete specific article by id | - | true/false|


Helpers
-------
* <a href="https://www.getpostman.com/collections/54ff524c3830d2e31800">My Postman</a> for testing
* <a href="http://wsnippets.com/create-rest-api-using-lumen-micro-framework-by-laravel/2/">Create REST API using lumen micro framework by laravel</a>
* <a href="http://loige.co/developing-a-web-application-with-lumen-and-mysql/">Developing a web application with Lumen and MySql</a>
* <a href="http://coderexample.com/restful-api-in-lumen-a-laravel-micro-framework/">RESTful API in Lumen, A Laravel Micro Framework</a>
