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