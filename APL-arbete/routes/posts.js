const router = require('express').Router()
const verify = require('./verifyToken')

router.get('/', verify, (req, res) => {
  res.json({
    posts: [
      {
        title: 'Post 1',
        description: 'Random data u shouldnt have access to',
      },
    ],
  })
})

module.exports = router
