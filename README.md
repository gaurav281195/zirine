A todo REST API for day to day work. Consist of user model (email, password) , todo model (description, completed).
User Model -- Authorization token for every user, JWT Authentication
Todo Model -- Private Routes, Middleware Authorization 

Packages Used: 

"express": "~4.13.3",
"body-parser": "~1.13.3",
"underscore": "~1.8.3",
"sequelize": "~3.5.1",
"pg": "~4.4.1",
"pg-hstore": "~2.3.2",
"bcrypt": "~0.8.5",
"jsonwebtoken": "~5.0.5",
"crypto-js": "~3.1.5"

Routes:

Todo Model---
GET /todos
GET /todos/:id
POST /todos
DELETE /todos/id
PUT /todos/:id

User Model---

POST /users/login
POST /users


Deployed on Heroku:

karira-web-server.herokuapp.com
