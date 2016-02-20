var http = require('http')
var port = process.env.PORT || 1337;
http.createServer(function(req, res) {
res.writeHead(200, {
    'Content-Type': 'text/html'
  });
  res.write('<!doctype html>\n<html lang="en">\n' + 
    '\n<meta charset="utf-8">\n<title>Test web</title>\n' + 
    '<style type="text/css">* {font-family:arial, sans-serif;}</style>\n' + 
    '\n\n<h1>TIM IS A SUCKER</h1>\n' + 
    '<div id="content"><p>HARRY IS ALSO A SUCKER</p></div>' + 
    '\n\n');
  res.end();
  console.log("Hello World!");
}).listen(port);
