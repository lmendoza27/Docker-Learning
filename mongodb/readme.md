# docker compose up -d

# docker exec -it mongodb_local mongosh

Accedemos como admin y creamos base de datos

# use admin

# db.auth("admin", "secret123")

# use testdb

db.users.insertOne({
name: "Luis",
role: "developer"
})

# db.users.find().pretty()
