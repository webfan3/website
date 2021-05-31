var pki = require('reverse-proxy/lib/pki');
pki.getPKI('github.com', function (ret) {
    console.log(ret);
});