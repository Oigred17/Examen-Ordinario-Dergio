const http = require('http');

const server = http.createServer((req, res) => {
  if (req.url === '/' && req.method === 'GET') {
    res.writeHead(200, { 'Content-Type': 'text/plain; charset=utf-8' });
    res.end('Bienvenido al servidor Node.js');
  } else if (req.url === '/api' && req.method === 'GET') {
    res.writeHead(200, { 'Content-Type': 'application/json' });
    res.end(JSON.stringify({ message: 'Hola Mundo :)' }));
  } else {
    res.writeHead(404, { 'Content-Type': 'text/plain; charset=utf-8' });
    res.end('Ruta no encontrada');
  }
});

server.listen(3000, () => {
  console.log('Servidor escuchando en http://localhost:3000');
});
