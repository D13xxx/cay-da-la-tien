$(document).ready(function(){

    // Parter
    var image_cropParter = $('#imageParter').croppie({
        enableExif: false,
        viewport: {
            width:120,
            height:180,
            type:'square' //circle
        },
        boundary:{
            width:400,
            height:400
        }
    });

    $('#uploadParter').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            event.preventDefault()
            image_cropParter.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#myModal').modal('show');
    });

    $('.crop_imageParter').click(function(event){
        var fake_path = document.getElementById('uploadParter').value;
        image_cropParter.croppie('result', {
            type: 'canvas',
            size: 'viewport',
            format: 'png',
        }).then(function(response){
            $('#myModal').modal('hide');
            $('.avatarPro').attr('src',response);
            $('#dataUpload').attr('value',fake_path.split("\\").pop() +'+'+ response);
        })
    });
});
