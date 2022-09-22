curl -d "name=Jane&age=21" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php
curl -d "name=Jane" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php
curl -d "age=21" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php
curl -d "age=-20" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php
curl -d "name=Jane&age=-50" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php
curl -d "name=''&age=''" -H "Content-Type: application/x-www-form-urlencoded" -X POST http://127.0.0.1:5000/index04.php