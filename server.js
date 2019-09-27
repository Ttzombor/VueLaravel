var http = require('http');
var express = require('express'),
    app = module.exports.app = express();

var server = http.createServer(app);
let io =require('socket.io').listen(server);
let Redis = require('ioredis');

let redis = new Redis();
redis.subscribe('news-action');
redis.on('message', function (channel, message) {
    console.log('Message recieved ' + message);
    console.log('Channel ' + channel);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});


server.listen(3000, function () {
    console.log('Listening on Port:3000');
});
