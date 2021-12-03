// Imorts
const bcrypt = require('bcryptjs')
const jwt = require('jsonwebtoken')
const bodyParser = require('body-parser')
// Init
const router = require('express').Router()
const User = require('../model/User')
const urlencodedParser = bodyParser.urlencoded({ extended: false })

// Validators
const { registerValidation, loginValidation } = require('../validation')
// Static

router.post('/register', urlencodedParser, async (req, res) => {
  // Data validation
  const { error } = registerValidation(req.body)
  if (error) return res.status(400).send(error.details[0].message)

  // Post validation (if user already exist in database *email*)
  const emailExist = await User.findOne({ email: req.body.email })
  if (emailExist)
    return res.status(400).send('User with this email adress exists')

  // Hash password
  const salt = await bcrypt.genSalt(10)
  const hashedPassword = await bcrypt.hash(req.body.password, salt)

  // Create user
  const user = new User({
    name: req.body.name,
    email: req.body.email,
    password: hashedPassword,
  })

  try {
    const savedUser = await user.save()
    res.render('register-success')
  } catch (err) {
    res.status(400).send(err)
  }
})

router.get('/register', (req, res) => {
  res.render('register')
})

router.post('/login', urlencodedParser, async (req, res) => {
  const { error } = loginValidation(req.body)
  if (error) return res.status(400).send(error.details[0].message)

  // If email exists
  const user = await User.findOne({ email: req.body.email })
  if (!user) return res.status(400).send("User with this email doesn't exist")
  // If password is correct
  const validPass = await bcrypt.compare(req.body.password, user.password)
  if (!validPass) return res.status(400).send('Invalid password')

  // JWT
  const token = jwt.sign({ _id: user._id }, process.env.TOKEN_SECRET)
  res.cookie('auth-token', token).redirect('/')
})

router.get('/login', (req, res) => {
  res.render('login')
})

router.get('/logout', (req, res) => {
  res.clearCookie('auth-token')
  console.log(req.headers)
  res.redirect('/')
})

module.exports = router
