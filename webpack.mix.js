let mix = require('laravel-mix');
let log = require('laravel-mix/src/Log');


if (process.env.section) {
  try{
    require(`${__dirname}/webpack/webpack.${process.env.section}.js`);
  }
  catch(e){
    log.error(e.message);
  }
}
else{
  log.error('env.process.section not defined in package.json');
}