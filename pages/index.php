<?php
     session_start();
     $_COOKIE['session'] = ran(0,99999);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Kil-A-Bytes Crime Reporter</title>
    
    <script>
        function send(text) {
            var sessid = function (){
                            var name = 'session' + "=";
                            var decodedCookie = decodeURIComponent(document.cookie);
                            var ca = decodedCookie.split(';');
                            for(var i = 0; i <ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) == ' ') {
                                c = c.substring(1);
                                }
                                if (c.indexOf(name) == 0) {
                                return c.substring(name.length, c.length);
                                }
                            }
                            return "";
                            };
            var response = query(sessid,text);
            textis = response.d.fulfillment_messages.text.text;
            return textis;
    }
    </script>

</head>

<body>
    <div class="container">
        <br>

        <font class="main-heading">Kil-A-Bytes </font>
        <font class="presents">presents</font> <br>
        <font class="purple-heading">Crime Registeration Chatbot</font>
        <div class="container chat-window" style="background-color: #EEEFFF; border-radius: 12px;">
            <br>
            <div class="row bot-says">

                <div class="col-sm-1"><img src="../assets/chat_bot.svg" alt="" style="width: 45px;float: right;"></div>
                <div class="col-sm-5" style="background-color: #727AFF;border-radius: 12px;color: white;">

                    <p style="margin-top: 4px;"> Hi there, you can choose</p>


                </div>
                <div class="col-sm-6"></div>

                <br>
            </div>
            <br>
            <!--CARD SECTION STARTS HERE-->


            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 "><button type="button" class="btn btn-primary">Log In</button></div>
                                <div class="col-sm-6 menu"><button type="button" class="btn btn-primary">Report Crime</button></div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6 "><button type="button" class="btn btn-primary">Awareness</button></div>
                                <div class="col-sm-6 menu"><button type="button" class="btn btn-primary">Customer Support</button></div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6 "><button type="button" class="btn btn-primary">Social Media</button></div>
                                <div class="col-sm-6 menu"><button type="button" class="btn btn-primary">Subscribe</button></div>

                            </div>






                        </div>
                    </div>
                </div>
            </div>








            <!--CARD SECTION ENDS HERE-->
            <br>
            <br>


            <!-- CHAT TEMPLELATE STARTS FROM HERE-->
            <div class="chat">
                <div class="row bot-says">

                    <!-- <div class="col-sm-1"> <img src="../assets/chat_bot.svg" alt="" style="width: 45px;float: right;"></div>
                    <div class="col-sm-5" style="background-color: #727AFF;border-radius: 12px;color: white;">

                        <p style="margin-top: 4px;">dsadas</p>


                    </div>
                    <div class="col-sm-6"></div>

                    <br> -->
                </div>



                <br>



                <div class="row user-says">



                    <!-- <div class="col-sm-6"></div>
                    <div class="col-sm-5" style="background-color: #727AFF; border-radius: 12px;color: white;">

                        <p style="margin-top: 4px;" id="input">
                            <script>
                                document.write(+text)
                            </script>

                        </p>


                    </div> 
                    <div class="col-sm-1"></div>-->


                </div>
            </div>
            <!-- CHAT TEMPLELATE ENDS HERE-->
            <br>
            <br>

            <!-- <div class="row" style="background-color: white; padding-top: 8px; padding-bottom: 8px; border-radius: 12px;;">
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <input type="text" style="width: 100%;border-radius: 8px;">
                </div>
                <div class="col-sm-2">
                    <input type="button" id="send-btn" value="Send" style="width:80%;border-radius: 8px;">
                </div>
                <div class="col-sm-1"></div>



            </div> -->
            <br>




        </div>
        <div class="row" style="background-color: white; padding-top: 8px; padding-bottom: 8px; border-radius: 12px;;">
            <div class="col-sm-1"></div>

            <div class="col-sm-8">

                <input type="text" name="user-input" id="hash" style="width: 100%;border-radius: 8px;">
            </div>
            <div class="col-sm-2">
                <div class="but-center"> <input type="button" class="send-btn" value="Send" style="width:80%;border-radius: 8px;"></div>

            </div>

            <div class="col-sm-1"></div>



        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="ajaxcalls.js"></script>
    <script>
        $(".send-btn").click(function() {
            var text = $('#hash').val();


            $(".chat").append('<div class="row user-says"><div class="col-sm-6"></div><div class="col-sm-5" style="background-color: #727AFF; border-radius: 12px;color: white;"><p style="margin-top: 4px;" id="input">' + text + '</p></div><div class="col-sm-1"></div></div>');

            var returntext = send(text);
            $(".chat").append('<div class="row bot-says"><div class="col-sm-1"> <img src="../assets/chat_bot.svg" alt="" style="width: 45px;float: right;"></div><div class="col-sm-5" style="background-color: #727AFF;border-radius: 12px;color: white;"><p style="margin-top: 4px;">'+returntext+'</p></div><div class="col-sm-6"></div><br></div><br>');


            $('#hash').val('');
        });
    </script>








</body>

</html>