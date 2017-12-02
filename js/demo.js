$(document).ready(function(){
    setTimeout(function(){
        //All demo scripts go here
        Lobibox.notify('info', {
            img: '1.png',
            sound: false,
            position: 'top right',
            delay: 15000,
            showClass: 'fadeInDown',
            title: 'Welcome to Aquila Dashboard.',
            msg: 'This dashboard is fully responsive ajax based web app with unique graphs,charts and scheduler which will make your work easier'
        });
    }, 1000);
    
   
});

/**
 * Generate n random numbers each of them in between min and max values
 * 
 * @param {Integer} n
 * @param {Integer} min
 * @param {Integer} max
 * @returns {Array} 
 */
function randomIntegers(n, min, max) {
    var arr = [];
    for (var i = 0; i < n; i++) {
        arr.push(Math.round(min + Math.random() * (max - min)));
    }
    return arr;
}