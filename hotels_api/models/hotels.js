const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const hotelSchema = new Schema({
  hotelName: {
    type: String,
    required: [true, 'HotelName is a must']
  },
  location: {
    type: String,
    required: [true, 'Loaction required']
  },
  rating: {
    type: String
  },
  status: {
    type: Boolean,
    default: false
  }
});

const HotelSchema = mongoose.model('hotels', hotelSchema);

module.exports = HotelSchema;
