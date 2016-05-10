const http = require('http');
const server = http.createServer(function (req, res) {
	res.setHeader('Content-Type', 'text/html');
	res.writeHead(200, {'Content-Type': 'text/plain'});
	res.end('Ban da ket noi toi server bang giao thuc http');
});
server.on('clientError', function (err, socket) {
	socket.end('HTTP/1.1 400 Bad Request\r\n\r\n');
});
server.listen(8000);