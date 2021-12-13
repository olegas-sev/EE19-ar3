// Express
const express = require('express')
const app = express()
const path = require('path')
// Register view engine
app.set('view engine', 'ejs')
// Static
app.use(express.static(path.join(__dirname, 'public')))
// Cookies
const cookieParser = require('cookie-parser')
app.use(cookieParser())
// .env
const dotenv = require('dotenv')
dotenv.config()
// DB
const mongoose = require('mongoose')
// Routes
const authRoute = require('./routes/auth')
const postRoute = require('./routes/posts')

// Connect to DB
mongoose.connect(process.env.DB_CONNECT, { useNewUrlParser: true }, () => {
  console.log('Connected to db')
})

// Middlewares
app.use(express.json())
app.use('/api/user', authRoute)
app.use('/', postRoute)

app.get('/', (req, res) => {
  res.render('index')
})

app.listen(3000, () => console.log('Server running.'))
