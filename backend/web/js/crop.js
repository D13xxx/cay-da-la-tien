$(document).ready(function(){
    var image_crop = $('#image').croppie({
        enableExif: false,
        viewport: {
            width:200,
            height:200,
            type:'square' //circle
        },
        boundary:{
            width:300,
            height:300
        }
    });

    $('#upload').on('change', function(){

        var reader = new FileReader();
        reader.onload = function (event) {
            event.preventDefault()
            image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#myModal').modal('show');
    });

    $('.crop_image').click(function(event){
        var fake_path=document.getElementById('upload').value;
        image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport',
            format: 'png',
        }).then(function(response){
            $('#myModal').modal('hide');
            $('.avatarPro').attr('src',response);
            $('#dataUpload').attr('value',fake_path.split("\\").pop() +'+'+ response);
        })
    });

    // articles
    var image_cropArticles = $('#imageArticles').croppie({
        enableExif: false,
        viewport: {
            width:300,
            height:200,
            type:'square' //circle
        },
        boundary:{
            width:400,
            height:400
        }
    });

    $('#uploadArticles').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            event.preventDefault()
            image_cropArticles.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#myModal').modal('show');
    });

    $('.crop_imageArticles').click(function(event){
        var fake_path=document.getElementById('uploadArticles').value;
        image_cropArticles.croppie('result', {
            type: 'canvas',
            size: 'viewport',
            format:'png',
        }).then(function(response){
            console.log(response); 
            $('#myModal').modal('hide');
            $('#avatarNews').attr('src',response);
            $('#dataUpload').attr('value',fake_path.split("\\").pop() +'+'+ response);
        })
    });

    // cat-inssurres
    var image_cropCatIn = $('#imageCatIn').croppie({
        enableExif: false,
        viewport: {
            width:70,
            height:70,
            type:'square' //circle
        },
        boundary:{
            width:400,
            height:400
        }
    });

    $('#uploadCatIn').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            event.preventDefault()
            image_cropCatIn.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#myModal').modal('show');
    });

    $('.crop_imageCatIn').click(function(event){
        var fake_path=document.getElementById('uploadCatIn').value;
        image_cropCatIn.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response){
            $('#myModal').modal('hide');
            $('#avatarCatIn').attr('src',response);
            $('#dataUpload').attr('value',fake_path.split("\\").pop() +'+'+ response);
        })
    });

    // info profile
    var image_crop_profile = $('#imageProFile').croppie({
            enableExif: false,
            viewport: {
                width:200,
                height:200,
                type:'square' //circle
            },
            boundary:{
                width:300,
                height:300
            }
        });

        $('#uploadProFile').on('change', function(){

            var reader = new FileReader();
            reader.onload = function (event) {
                event.preventDefault()
                image_crop_profile.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#myModal').modal('show');
        });

        $('.crop_imageProFile').click(function(event){
            var fake_path=document.getElementById('uploadProFile').value;
            image_crop_profile.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response){
                $('#myModal').modal('hide');
                $('.avatarPro').attr('src',response);
                $('#dataUploadProFile').attr('value',fake_path.split("\\").pop() +'+'+ response);
            })
        });

});
