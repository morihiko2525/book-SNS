var request = require('request');
var options = {
  uri: "http://example.com/test",
  headers: {
    "Content-type": "application/json",
  },
  json: {
    "key1": "param1",
    "key2": "param2"
  }
};
request.post(options, function(error, response, body){});