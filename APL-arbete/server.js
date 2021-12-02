// Express
const express = require('express')
const app = express()
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
app.use('/api/posts', postRoute)

app.listen(3000, () => console.log('Server running.'))
