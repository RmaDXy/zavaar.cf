$(function(){
    $('#big').click(function(){
        var min = parseInt($('#min').val());
        var max = parseInt($('#max').val());
        var random = Math.floor(Math.random() * (max - min) ) + min;
        document.getElementById('pp').innerHTML = random;
        console.log("Number: ", random)    
    })
})

/* var random = Math.floor(Math.random() * (max - min) ) + min;
document.getElementById('pp').innerHTML = random; */
