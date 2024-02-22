var express=require('express');
var socket=require('socket.io');

connectedUsers=[];//Array of all connected users...

//App Setup
var app=express();
var server=app.listen(4000,function(){
	console.log('listning to requests on port 4000');
});
//var io = require('socket.io')(server, { origins: '*:*'});
//Socket Setup
var io=socket(server);
io.on('connection',function(socket){
	connectedUsers.push(socket.handshake.query['empId']);
	socket.empId=socket.handshake.query['empId'];
	console.log('made socket connection',socket.empId,connectedUsers,socket.id);
	io.sockets.emit('userConnected',socket.empId);
	
	//Notifications
	socket.on('notify',function(data){
		io.sockets.emit(data.name,data.value);
	});
	app.get('/tip',function(req,res){
		io.sockets.emit('tip',req.query.tip);
		res.send('ok');
	});
	app.get('/user',function(req,res){
		io.sockets.emit('user'+req.query.id,req.query.msg);
		res.send('ok');
	});
	
	//Chat
	socket.on('chat',function(data){
		io.sockets.emit('chat'+data.to,{"from":socket.empId,"msg":data.msg,"fromName":data.fromName});
	});
    
    //Get Connected User Request
    socket.on('getConnectedUser',function(){
		socket.emit('connectedUsers',connectedUsers);
	});

	//ON Disconnect
	socket.on('disconnect', function() {
		connectedUsers.splice(connectedUsers.indexOf(socket.empId),1);
		io.sockets.emit('userDisconnected',socket.empId);
		console.log('disconnected socket connection',socket.empId,connectedUsers,socket.id);
    });
});