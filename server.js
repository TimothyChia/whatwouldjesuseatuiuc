var http = require('http')
var port = process.env.PORT || 1337;
http.createServer(function(req, res) {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('TIM SUCKS =P\n' +'jk i love you baby'+ 'https://courses.engr.illinois.edu/cs125/eclipse.php');
}).listen(port);
