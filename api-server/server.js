var express = require('express');
var router = express.Router();
var app = express();
var PORT = 8080;

router.get('/', function (req, res) {
    res.json({products:[
        'Ice Creame',
        'Shop',
        'bottel',
        'Bread'
    ]});
});

app.use('/', router);

app.listen(PORT, function () {
});