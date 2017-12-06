const mongoose = require('mongoose');
const Schema = mongoose.Schema;


//geolocation Schema
const GeoSchema = new Schema({
  type: {
    type: String,
    default: "Point"
  },
  coordinates: {
    type: [Number],
    index: "2dsphere"
  }
});
const fruitSchema = new Schema({
  fruitName: {
    type: String,
    required: [true, 'Name Field is required']
  },

  color: {
    type: String,
    required: [true, 'Color field is required']
  },

  available: {
    type: Boolean,
    default: false
  },
  geometry: GeoSchema
});

const Fruits = mongoose.model('fruits',fruitSchema);

module.exports = Fruits;
