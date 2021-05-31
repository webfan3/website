var proxy = require('reverse-proxy');
proxy.createServer({
    port: process.env.port,
   // mapHttpsReg: /s\.tbcdn\.cn/,
    mapHttpsReg: true,
    map: function (config) {

     
        if (config.path == '/kissy/k/1.4.0/seed.js' || config.path == '/g/kissy/k/1.4.0/seed.js') {
            config.path = '/t.js';
            config.host = 'localhost';
            console.log('refetch from: ' + config.host + config.path);
        }

        return config;
    }
});