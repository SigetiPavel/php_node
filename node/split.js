const express = require('express');
const app = express();

const hostname = 'localhost';
const port = 3000;


app.get('/', function(req, res) {
  res.setHeader('Access-Control-Allow-Origin', '*');

  let str = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ducimus molestiae temporibus assumenda.';

  let start = process.hrtime.bigint();
  str.split('e');
  let end = process.hrtime.bigint();
  res.json({ 'start': start.toString(), 'end': end.toString(), 'count': (end - start).toString() });
});

  
app.listen(3000, function(req, res) {
  console.log("Server is running at port 3000");
});

