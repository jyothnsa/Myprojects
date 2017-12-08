const express = require('express');
const Fruit = require('../models/fruits'); //imported fruits.js
const router = express.Router();

router.get('/fruits', function(req,res,next){
  //  Fruits.find({}).then(function(fruits){
  //    res.send(fruits);
  //  });
  Fruit.geoNear({
    type: 'Point',
    coordinates : [parseFloat(req.query.lng) , parseFloat(req.query.lat)]
  },
   {
     maxDistance : 100000,
     spherical : true
     }
).then(function(fruits){
  res.send(fruits);
});
});

router.post("/fruits", function(req,res,next){
  // var fruits = new Fruit(req.body);
  // fruits.save();
  Fruit.create(req.body).then(function(fruits){
    res.send(fruits);
}).catch(next);
});

router.put("/fruits/:id", function(req,res,next){
  Fruit.findByIdAndUpdate({_id:req.params.id},req.body).then(function(){
  Fruit.findOne({_id:req.params.id}).then(function(fruit){
      res.send(fruit);
  });
  });
});


router.delete("/fruits/:id", function(req,res,next){
Fruit.findByIdAndRemove({_id:req.params.id}).then(function(fruit){
  res.send(fruit);
});
  res.send({type:'DELETE'})
});


module.exports = router;
