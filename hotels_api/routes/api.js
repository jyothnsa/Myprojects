const express = require('express');
const Hoteldb = require('../models/hotels');
const router = express.Router();

router.get('/hotels',function(req,res,next){
  var query = {location: req.query.location }
  Hoteldb.find(query).then(function(hotel){
    res.send(hotel);
  });
});

router.post('/hotels', function(req,res,next){
  Hoteldb.create(req.body).then(function(hotel){
  res.send(hotel);
  }).catch(next);
  // res.send({type: 'POST'});
});

router.put('/hotels/:id',function(req,res,next){
  Hoteldb.findByIdAndUpdate({_id:req.params.id},req.body).then(function(){
    Hoteldb.findOne({_id:req.params.id}).then(function(hotel){
      res.send(hotel);
    });
  });
});

router.delete('/hotels/:id',function(req,res,next){
  Hoteldb.findByIdAndRemove({_id:req.params.id}).then(function(hotel){
    res.send(hotel);
  });
  res.send({type:'DELETE'})
});

module.exports = router;
