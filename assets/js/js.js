/**
 * Created by khalil on 10/12/2016.
 */


$(function() {


    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
             var data = $formLogin.serialize();
                console.log(data);
                $('#remeber_me').each(function() {
                    if (this.checked) {
                       data += '&'+this.name+'='+this.val();
                    }
                });
                var request= $.ajax({
                    type : "POST",
                    url  : "/projet/login_process.php",
                    data : data,
                    dataType: "html"});
                 request.done(function(response)
                    {
                        console.log(response);
                        if(response=="ok"){
                            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                            setTimeout(' window.location.href = "index.php"; ',2000);
                        }
                        else{

                            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                        }

                });
                request.fail(function( jqXHR, textStatus ) {
                    alert( "Request failed: " + textStatus );
                });


                return false;
                break;
            case "lost-form":
                var data = $formLost.serialize();
            //    console.log(data);
                var request= $.ajax({
                    type : "POST",
                    url  : "/projet/reset_pass_process.php",
                    data : data,
                    dataType: "html"});
                request.done(function(response)
                {
                    console.log(response);
                    if(response=="ok"){
                        msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "An email has been sent to your email address");
                        setTimeout(' window.location.href = "index.php"; ',5000);
                    }
                    else{

                        msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Invalid mail adress");
                    }

                });
                request.fail(function( jqXHR, textStatus ) {
                    alert( "Request failed: " + textStatus );
                });

                return false;
                break;
            case "register-form":
                var data = $formRegister.serialize();
                 // console.log(data);
                var request= $.ajax({
                    type : "POST",
                    url  : "/projet/signup_process.php",
                    data : data,
                    dataType: "html"});
                request.done(function(response)
                {
                    console.log(response);
                    if(response=="ok"){
                        msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Thanks for register");
                        setTimeout(' window.location.href = "index.php"; ',2000);
                    }
                    else{

                        msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Regiter error");
                    }

                });
                request.fail(function( jqXHR, textStatus ) {
                    alert( "Request failed: " + textStatus );
                });


                return false;
                break;
            default:
                return false;
        }
        return false;
    });


    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }

    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }

    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
        }, $msgShowTime);
    }


});


