var http = require('http')
var port = process.env.PORT || 1337;
http.createServer(function(req, res) {
res.writeHead(200, {
    'Content-Type': 'text/html'
  });
  res.write('<!doctype html>\n<html lang="en">\n' + 
    '\n<meta charset="utf-8">\n<title>WWJE UIUC</title>\n' + 
    '<style type="text/css">* {font-family:Verdana,sans-serif;}</style>\n' + 
    '\n\n<h1>THE WORKERS</h1>\n' + 
    '<div id="content"><p>TIM works on like 50%, HENRY works on 35%, NATHAN works on 15%</p></div>' + 
    '\n\n');
  res.end();
  console.log("Hello World!");
}).listen(port);
