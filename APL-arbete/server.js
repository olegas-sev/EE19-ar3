// Dependencies
const jwt = require('jsonwebtoken')
const express = require('express')
require('dotenv').config()

// Express app
const app = express()
// Body json parser
app.use(express.json())

const posts = [
  {
    username: 'Olegas',
    title: 'League of Legends',
  },
  {
    username: 'Maram',
    title: 'Mobile Legends',
  },
]

app.get('/posts', authenticateToken, (req, res) => {
  res.json(
    posts.filter((post) => {
      return post.username === req
    })
  )
})

app.post('/login', (req, res) => {
  // Auth user
  const username = req.body.username
  const user = {
    name: username,
  }

  const accessToken = jwt.sign(user, process.env.ACCESS_TOKEN_SECRET)
  res.json({ accessToken: accessToken })
})

function authenticateToken(req, res, next) {
  const authHeader = req.headers['authorization']
  const token = authHeader && authHeader.split(' ')[1]
  if (token == null) return res.sendStatus(401)

  jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, user) => {
    if (err) return res.sendStatus(403)
    req.user = user
    next()
  })
}

app.listen(3000)
