function run() {
    /*-----------------------------------------------------------------------------------*/
    /*	Mask
    /*-----------------------------------------------------------------------------------*/
    var element = document.getElementById('d-mask-phone');
    if(element){
        var maskOptions = {
            mask: '+{7}(000)000-00-00'
        };
        var mask = IMask(element, maskOptions);
    }
}
$(document).ready(function() {
    run();
});