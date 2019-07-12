$(document).ready(function() {
    $('.btn-language').on('click', function () {
        $('#block-language1').trigger('click');
        $("#upload").change(readURL);
    });
    $(".file-upload input[type=file]").change(function(){
        var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").val(filename);
    });
});
function readURL(e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        $(reader).load(function(e) {
            $('#upload-img').attr('src', e.target.result);
        });
        reader.readAsDataURL(this.files[0]);
    }
}
function hide_menu(elem){
    if($(elem).hasClass('open-child')){
        $(elem).animate({height: 'hide'}, 300);
        $(elem).removeClass('open-child');
    } else {
        $(elem).animate({height: 'show'}, 300);
        $(elem).addClass('open-child');
    }

}