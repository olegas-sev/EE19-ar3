const fs = require("fs")

const txt = fs.readFileSync('./txt/input.txt', 'UTF-8')
const textOut = `This is what we know about avocado:\n ${txt}\nCreated on ${Date.now()}`
fs.writeFileSync('./txt/output.txt', textOut);
console.log(textOut)
