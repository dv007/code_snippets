const http = require('http');

var options = {
	hostname: 'localhost',
	port: 8000,
	path: '/',
	method: 'GET',	
};

setInterval (httpRequesr, 1000);

function httpRequesr() {
	var req = http.request(options, function (res) {
		console.log('STATUS: ' + res.statusCode);
		console.log('HEADERS: ' + JSON.stringify(res.headers));
		res.setEncoding('utf8');
		res.on('data', function (chunk) {
			console.log('BODY: ' + chunk);
			sendMsg();
		});
		res.on('end', function () {
			console.log('No more data in response.')
		})
	});

	req.on('error', function (e) {
		console.log('problem with request: ' + e.message);
	});

	// write data to request body
	req.end();
}

function sendMsg() {
	var net = require('net');

	var client = new net.Socket();

	client.connect(3000, '127.0.0.1', function() {
		console.log('Da ket noi');
		client.write('Xin chao, toi la client1.\n');
	});

	client.on('data', function(data) {
		console.log('Thong tin nhan duoc: ' + data + '\n');
		client.destroy(); // kill client after server's response
	});

	client.on('close', function() {
		console.log('Da dong ket noi\n');
	});

	client.on('error', function() {
		console.log('Khong the ket noi toi server\n');
	});
}