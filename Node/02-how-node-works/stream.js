const fs = require('fs');
const server = require('http').createServer();

server.on('request', (req, res) => {
  // Solution 1 (Good for small files)
  // fs.readFile('test-file.txt', (err, data) => {
  //   if (err) console.log(err);
  //   res.end(data);
  // });

  // Solution 2 using Streams (Good for big files)
  // const readable = fs.createReadStream('testfile.txt');
  // readable.on('data', (chunk) => {
  //   res.write(chunk);
  // });
  // readable.on('end', () => {
  //   res.end();
  // });
  // readable.on('error', (err) => {
  //   console.log(err);
  //   res.statusCode = 500;
  //   res.end('File not found');
  // });

  // Solution 3 with no backpressuring
  const readable = fs.createReadStream('test-file.txt');
  readable.pipe(res);
  // readableSource.pipe(writeableDestination)
});

server.listen(8000, '127.0.0.1', () => {
  console.log('Listening...');
});
