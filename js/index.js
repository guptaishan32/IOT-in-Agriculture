$(document).ready(function() {
        
            $(document).ajaxStart(function(){
                $("#waitt").show();
            });
            
            $(document).ajaxStop(function(){
                $("#waitt").hide();
            });

            $("#spwd").keyup(function() {
                var val = this.value;
                /*$("#showpassword").focusin(onfocus);*/
                var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                $("#messagepwd").hide();
                $("#smsmsg").hide();
                if(val.length<8)
                     {
                        $("#messagepwd").html(" Password min length: 8char. and it must contain a small letter,capital letter, a numeric digit and a special char.");
                        $("#messagepwd").css("color","blue");
                        $("#messagepwd").show();
                    }
                else if(val.length >= 8 && val.length <11)
                    {
                        $("#messagepwd").html(" Password Strength: Weak!");
                        $("#messagepwd").css('color','red');
                        $("#messagepwd").show();
                    }
                 else if(val.length >=11 && val.length < 13)
                    {   $("#messagepwd").html(" Password Strength: Medium!");
                        $("#messagepwd").show();
                        $("#messagepwd").css('color','grey');
                    }
                else {
                        $("#messagepwd").html("Password Strength: Strong!");
                        $("#messagepwd").css('color','green');
                        $("#messagepwd").show();
                    }
                if (r.test(val) != true)
                    {
                     $("#messagepwd").html(" Password min length: 8char. and it must contain a small letter,capital letter, a numeric digit and a special char.");
                        $("#messagepwd").css("color","lightblue");
                        $("#messagepwd").show();
                    }
            });
            $("#smobile").keyup(function() {
                var val = this.value;
                var r = /[6-9]{1}[0-9]{9}$/
                
                $("#messagemobile").hide();
                
                    if(val.length<=1)
                    {
                        $("#messagemobile").html("First digit must be from 6,7,8 or 9");
                        $("#messagemobile").css('color','grey');
                        $("#messagemobile").show();
                    }
                 else if(val.length < 10)
                    {   $("#messagemobile").html(" Minimum length: 10 digits");
                        $("#messagemobile").show();
                        $("#messagemobile").css('color','grey');
                    }
                else if (r.test(val) != true){
                    $("#messagemobile").html(" NOT OK! ");
                        $("#messagemobile").show();
                        $("#messagemobile").css('color','red');
                }

                if (r.test(val) == true)
                    {   
                        $("#messagemobile").html(" OK! ");
                        $("#messagemobile").show();
                        $("#messagemobile").css('color','green');
                    }
            });

    
            /*Check uid*/
           /* $("#checkuid").click(function(){
                $("#signupshow").hide();
                $("#signupsubmit").hide();
                $suid= $("#suid").val();
                $.get("index-ajax-check-uid.php?suid=" + $suid,function(data){
                    if(data == "Available")
                        {
                            $("#signupshow").show();
                            $("#res").html(data);
                            $("#signupsubmit").show();
                            $("#checkuid").hide();
                        }
                    else
                        {
                           $("#res").html(data); 
                            $("#signupshow").hide();
                            $("#signupsubmit").hide();
                        }
                    
                });
                
            });*/
    /*
            $("#fetchpwd").click(function(){
                $luid = $("#luid").val();
                $.get("index-ajax-fetch-pwd.php?luid="+$luid,function(show){
                $("#lpwd").val(show);
            });*/
                 
                 $("#pwdsms").click(function(){
                     $("#smsmsg").hide();
                $luid = $("#luid").val();
                $.get("sms-send.php?luid="+$luid,function(show){
                alert(show);
                    $("#smsmsg").show();
            });
    });


            //            $("#ajaxsubmit").click(function(){
            //                $q=$("#sfrm").serialize();
            //                /*alert($q);*/
            //                $url="index-ajax-signup.php?"+$q;
            //                $.get($url,function(data,status){
            //                    /*alert(data);*/
            //                    $("#signupmessage").html(data);
            //                });
            //            });
            //              
            
        $("#loginsave").click(function(){
            $q=$("#lfrm").serialize();
            //alert($q);
            $url="index-login.php?"+$q;
            $.get($url,function(response,status){
                //alert(response);
                if(response == "Loging you")
                    {            
                        //alert();
                    location.href="showData.php";
                    }
                  else  
                    $("#loginresponse").html(response);
            });  
            
            
        });

     });