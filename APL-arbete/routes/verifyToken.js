const jwt = require('jsonwebtoken')

module.exports = function (req, res, next) {
  // const token = req.header('auth-token')
  const token = req.headers.cookie

  if (!token) return res.status(401).render('not-logged-in')
  try {
    const verified = jwt.verify(token.substring(11), process.env.TOKEN_SECRET)
    req.user = verified
    req.body = req.user
    next()
  } catch (e) {
    res.status(400).send('Invalid token')
  }
}
