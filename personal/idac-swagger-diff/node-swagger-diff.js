var SwaggerDiff = require('swagger-diff');
var oldSpec = 'staging_swagger.json';
var newSpec = 'develop_swagger.json'; 
var config = '';
SwaggerDiff(oldSpec, newSpec, config).then(function (diff) {
  console.log(diff);
});