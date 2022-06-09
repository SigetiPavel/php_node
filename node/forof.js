const express = require('express');
const app = express();

const hostname = 'localhost';
const port = 3000;


app.get('/', function(req, res) {
  res.setHeader('Access-Control-Allow-Origin', '*');
  let arr = [3, 5, 1, 7, 9, 2, 4, 10, 8, 6];
  let start = process.hrtime.bigint();
  for(let el of arr) {
    el += 1;
  }
  let end = process.hrtime.bigint();
  res.json({ 'start': start.toString(), 'end': end.toString(), 'count': (end - start).toString() });
});

  
app.listen(3000, function(req, res) {
  console.log("Server is running at port 3000");
});

