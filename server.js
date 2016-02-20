var http = require('http')
var port = process.env.PORT || 1337;
http.createServer(function(req, res) {
  res.writeHead(200, { 'Content-Type': 'text/bold' });
  res.end('TIM SUCKS =P\n' +'jk i love you baby');

}).listen(port);
