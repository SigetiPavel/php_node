const express = require('express');
const app = express();

const hostname = 'localhost';
const port = 3000;

function factorial(n) {
  return (n != 1) ? n * factorial(n - 1) : 1;
}

app.get('/', function(req, res) {
  res.setHeader('Access-Control-Allow-Origin', '*');
  let start = process.hrtime.bigint();
  factorial(18);
  let end = process.hrtime.bigint();
  res.json({ 'start': start.toString(), 'end': end.toString(), 'count': (end - start).toString() });
});

  
app.listen(3000, function(req, res) {
  console.log("Server is running at port 3000");
});

