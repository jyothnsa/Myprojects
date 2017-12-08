const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
const app = express();
const options = {
   useMongoClient: true
}
mongoose.connect('mongodb://localhost/fruitsdb', options);
mongoose.Promise = global.Promise;

app.use(express.static('public'));

app.use(bodyParser.json());

app.use('/api',require('./routes/api'));

app.use(function(error,req,res,next){
  // console.log(error);
  res.status(422).send({errorMessage: error.message});
});
function rejectPromise() {
    return Promise.reject();
}
app.listen(process.env.port || 4000, function(){
  console.log("Listenening for requests");
});
