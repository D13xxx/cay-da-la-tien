app.init();
app.buildSliderProduct();
app.buildSliderCustomer();
app.buildSliderNews();
app.buildSliderBanner(); 


function buyInsurrance(){
    var name = $('input:text[name=name]').val();
    var cmnd = $('input:text[name=cmnd]').val();
    var phone = $('input:text[name=phone]').val();
    var type = $("input[name='type']:checked").val();
    var name1 = $('input:text[name=name1]').val();
    var paytype = $("input[name='paytype']:checked").val();
    var rulecheck = $("input[type='checkbox']").is(":checked" );
    var check = true;
    $('.error').hide();

    if(name==''){
       $('#namelHelp').show();
       check = false;
    }
    if(cmnd==''){
        $('#cmndlHelp').show();
        check = false;
    }
    if(phone==''){
        $('#phoneHelp').show();
        check = false;
    }
    if(type=='morebuy'){
        if(name1==''){
            $('#relationlHelp').show();
            check = false;
        } 
    }

    if(rulecheck == false){
        $('#ruleHelp').show();
        check = false;
    }

    // console.log(paytype);
    if(paytype=='vinaphone'){
        $("#alert").modal('show');
        return false;
    }

    if(check){
        $('#formInsurrance').submit();
    }
}