const express = require('express');
const app = express();

const hostname = 'localhost';
const port = 3000;

function isPrime(n) {
  for(let i = 2; i < n; i++)
    if(n % i === 0) return false;
  return n > 1;
}

function countPrime(n) {
  let counter = 0;
  for(let i = 1; i <= n; i++) {
    if(isPrime(i)) {
      counter++;
    }
  }
  return counter;
}

app.get('/', function(req, res) {
  res.setHeader('Access-Control-Allow-Origin', '*');
  let start = process.hrtime.bigint();
  countPrime(50);
  let end = process.hrtime.bigint();
  res.json({ 'start': start.toString(), 'end': end.toString(), 'count': (end - start).toString() });
});

  
app.listen(3000, function(req, res) {
  console.log("Server is running at port 3000");
});

