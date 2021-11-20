// Require's
const fs = require("fs");
const http = require('http')

//////////////////////////////////////////////////////////

///////////////////////
// Reading files
//
/*
// Synchronous, blocking code
const txt = fs.readFileSync('./txt/input.txt', 'UTF-8')
const textOut = `This is what we know about avocado:\n ${txt}\nCreated on ${Date.now()}`
fs.writeFileSync('./txt/output.txt', textOut);
// console.log(textOut)

///////////////////////
// Asynchronous, non-blocking code
// fs.readFile('./txt/start.txt', 'utf-8', (err, data) => {
//     if (err) return console.error('Error ocurred!')
//     console.log(data);
// })
*/


/*
// Reading, writing files in async way
fs.readFile('./txt/start.txt', 'utf-8', (err, data1) => {
   fs.readFile(`./txt/${data1}.txt`, 'utf-8', (err, data2) => {
    // console.log(data2);
    fs.readFile('./txt/append.txt', 'utf-8', (err, data3) => {
        // console.log(data3);
        fs.writeFile('./txt/final.txt', `${data2}\n${data3}` ,'utf-8', err => {
            if (err) return console.log('Error occured', err);
            console.log('Your file has been written! 🥳')
        })
    })
   })
})
*/

///////////////////////
// Server
//
// 1. Create server
const server = http.createServer((req, res) => {
    res.end('Response!')
});
// 2. Start server
server.listen(8000, '127.0.0.1', () => {
    console.log('Listening to requests on port 8000!');
});
