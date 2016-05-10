const http = require('http');
const server = http.createServer(function (req, res) {
	res.setHeader('Content-Type', 'text/html');
	res.setHeader('X-Foo', 'bar');
	res.writeHead(200, {'Content-Type': 'text/plain'});
	res.end('You\'ve requested to server');
});
server.on('clientError', function (err, socket) {
	socket.end('HTTP/1.1 400 Bad Request\r\n\r\n');
});
server.listen(8000);