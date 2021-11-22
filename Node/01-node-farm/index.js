// Require's
const fs = require("fs");
const http = require('http');
const url = require('url')

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

const data = fs.readFileSync(`${__dirname}/dev-data/data.json`, 'utf-8')
const dataObj = JSON.parse(data);


// 1. Create server
const server = http.createServer((req, res) => {
    console.log(req.url)

    const pathName = req.url;
    // Overview page
    if (pathName === "/" || pathName === "/overview") {
        

        res.end('This is overview!')
    } 

    // Product page
    else if (pathName === "/product") {
        res.end('This is product!')
    } 

    // API
    else if (pathName === "/api") {
        res.writeHead(200, {
            'Content-Type': 'application/json'
        })
        res.end(data)
    } 

    // 404 
    else {
        res.writeHead(404, {
            'Content-Type': 'text/html',
            'Custom-Header': 'Hello Kitty'
        })
        res.end("<h1>Can't reach this route</h1>")
    }
});

// 2. Start server
server.listen(8000, '127.0.0.1', () => {
    console.log('Listening to requests on port 8000!')
});

