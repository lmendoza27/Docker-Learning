const http = require('http');

const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8' });
  res.end('<h1>Hola Node.js con Docker 🚀</h1>');
});

server.listen(3001, () => {
  console.log('Servidor corriendo en puerto 3000');
});