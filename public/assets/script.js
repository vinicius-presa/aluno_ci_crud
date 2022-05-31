function acionarClick() {
    document.querySelector('#profileImage').click();

}

function displayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}












$("#profileDisplay").hover(
    function(){
        //Ao posicionar o cursor sobre a div
        $(this).css('background', 'red');
    },
    function(){
        //Ao remover o cursor da div
        $(this).css('background', 'white');
    }
);