const router = require('express').Router()
const verify = require('./verifyToken')
const User = require('../model/User')
const jwt = require('jsonwebtoken')
router.get('/posts', verify, (req, res) => {
  res.render('posts', req.body)
})

module.exports = router
