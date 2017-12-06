var express = require('express');
var bodyParser = require('body-parser');
var mongoose = require('mongoose');
const app = express();
const options = {
  useMongoClient: true
}
mongoose.connect('mongodb://localhost/hotelSchema', options);
mongoose.Promise = global.Promise;
app.use(express.static('public'));
app.use(bodyParser.json());
app.use('/api', require('./routes/api.js'));
app.use(function(error,req,res,next){
  res.status(422).send({errorMessage: error.message});
});
function rejectPromise(){
  return Promise.reject();
}
app.listen(process.env.port || 4040, function(){
  console.log("Listenening to port 4040");
});
