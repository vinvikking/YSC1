@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/analytics ">Influencer 2 Influencer Chat</a></li>
    </ol>
@endsection



@section('body')
<?php header("Access-Control-Allow-Origin: TRUE"); 
      header('Access-Control-Allow-Credentials', 'true');
?>
<style type="text/css">




p, textarea, h1, h2{

    font-family: Raleway, "Lucida Grande", Helvetica, Arial, sans-serif;

    font-size: 10px;

}



body{

    background: #23074d;  /* fallback for old browsers */

    background: -webkit-linear-gradient(to right, #cc5333, #23074d);  /* Chrome 10-25, Safari 5.1-6 */

    background: linear-gradient(to right, #cc5333, #23074d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    height: 100vh;

    position: relative;

}



h1{

    font-size: 6rem;

    color: #fff;

    text-align: center;

}

.container{

    width: 100%;

    position: absolute;

    top: 50%;

    left: 0;

    right: 0;

    transform: translateY(-50%);

}



.joinbox{

    max-width: 500px;

    border:2px solid #ffffff;

    padding: 4rem;

    width:70%;

    margin: 5rem auto 0;

    border-radius: 5px;

}



.joinbox .username{

    display: block;

    width: 100%;

    margin:auto;

    padding: 1.5rem;

    background-color: transparent;

    border: none;

    border-bottom: 2px solid #ffffff;

    color: #ffffff;

    font-size: 2rem;

}



.joinbox .submit{

    background-color: #ffffff;

    padding: 1.5rem;

    border: none;

    /*border: 2px solid #ffffff;*/

    display: block;

    width: 100%;

    margin: 3rem auto 0;

    color: #772D40;

    font-size: 2rem;

    transition: all ease 500ms;

}



.joinbox .submit:hover{

    box-shadow: 0 0 5px rgba(0,0,0,0.7);

}



.joinbox .submit[disabled="disabled"]{

    opacity: 0.7;

    cursor: not-allowed;

}



.alert{

    background-color: #cab0a9;

    color: #772D40;

    display: block;

    padding: 0.5rem 1rem;

    font-size: 1.4rem;

}



.clearfix{

    content: ' ';

    height: 0;

    clear: both;

    position: relative;

}



.room{

    width: 100%;

    position: fixed;

    bottom: 0;

}



.chat{

    width:100%;

    margin: auto 1%;

    background-color: #ffffff;

    padding: 2rem;

    color: #772D40;

    display: inline-block;

    overflow-y: auto;

    max-height:500px;

    vertical-align: bottom;

}



.chat .item{

    padding: 0.75rem 0;

    display: block;

    border-bottom: thin solid #f0f0f0;

    font-size: 1.4rem;

}



.chat .item:last-child{

    border-bottom: none;

}



.chat .user{

    color: #23074d;

    display: block;

    font-weight: 700;

}



.chat .system{

    color: #cc5333;

    display: block;

    font-weight: 700;

}



.users{

    background-color: #ffffff;

    margin: auto 1%;

    width:28%;

    color: #772D40;

    display: inline-block;

    font-size: 1.6rem;

    max-height:500px;

    overflow-y: auto;

    vertical-align: bottom;

}



.users .title{

    background-color: #772D40;

    color: #ffffff;

    padding: 1rem 2rem;

    margin-bottom: 1rem;

    text-align: center;

    display: block;

    font-size: 1.8rem;

}



.users .item{

    padding: 1.2rem 2rem;

    display: block;

    border-bottom: thin solid #f0f0f0;

    font-size: 1.5rem;

}



.users .item:last-child{

    border-bottom: none;

}



.send{

    margin-top: 2rem;

    display: block;

    background-color: #ffffff;

    padding: 2rem;

}



.send .message{

    display: inline-block;

    width:72%;

    margin-right: 3%;

    background-color: #f0f0f0;

    border: none;

    font-size: 1.6rem;

    padding: 1.5rem;

    box-shadow: 0 0 2px rgba(0,0,0,0.2);

}



.send .submit{

    display: inline-block;

    width:25%;

    background-color: #772D40;

    padding: 1.5rem;

    border: none;

    color: #ffffff;

    font-size: 2rem;

    vertical-align: bottom;

    transition: all ease 500ms;

}

.btnChat {

    width:100%;
    margin: auto 1%;

    background-color: #ffffff;

    padding: 2rem;

    color: #772D40;

    display: inline-block;

    overflow-y: auto;

    max-height:500px;

    vertical-align: bottom;
}
    
      textarea { resize: none; background: #000; color: #fff; padding: 0px; position: relative; bottom: 0; width: 100%; font-size: 10pt; }
      .messages { list-style-type: none; margin: 0; padding: 0; }
      .messages li { padding: 5px 10px; }
      .messages li:nth-child(odd) { background: #eee; }

      #submitTextCht { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
      #submitTextCht input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
      #submitTextCht button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
      #messages { list-style-type: none; margin: 0; padding: 0; }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }

</style>


        <div class="container">
            <div class="joinbox">
                <label for="username">Zichtbaar als:</label>
                <input type="text" id="username" name="username" value="{{ Auth::user()->name }}" />
                <input type="button" id="join-chat" value="Join Chat" />
            </div><br />
            <div class="chat-info"></div><br />
            <div class="chat">
                <div class="messages"></div>
            </div>
            <div class="btnChat">
                <textarea name="message" id="message" cols="90" rows="5" placeholder="Type hier je bericht..."></textarea><br /><br />
                <input type="button" id="send-message" data-username="" value="Verstuur">&nbsp;
                <input type="button" id="leave-chat" data-username="" value="Verlaat chat">
            </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
      $(function () {

            $('.chat-info').hide();
            $('.chat').hide();
            $('.btnChat').hide();


    // test

    var socket = io.connect('http://localhost:8080');

    var chatter_count;

    $.get('http://localhost:8080/get_chatters', function (response) {

        $('.chat-info').text("There are currently " + response.length + " people in the chat room");

        chatter_count = response.length; //update chatter count

    });

    $.get('/users')
        .done(function (res) {
            $.each(res, function (index, value) {
                $('.users').append('<p class="item">' + value + '</span>');
            });
    });

    $('#join-chat').click(function () {

        var username = $.trim($('#username').val());

        $.ajax({

            url: 'http://localhost:8080/join',

            type: 'POST',

            data: {

                username: username

            },

            success: function (response) {

                if (response.status == 'OK') { //username doesn't already exists

                    socket.emit('update_chatter_count', {

                        'action': 'increase'

                    });

                    $('.chat').show();
                    $('.btnChat').show();

                    $('#leave-chat').data('username', username);

                    $('#send-message').data('username', username);

                    $.get('http://localhost:8080/get_messages', function (response) {

                        if (response.length > 0) {

                            var message_count = response.length;

                            var html = '';

                            for (var x = 0; x < message_count; x++) {

                                html += "<div class='msg'><div class='user'>" + response[x]['sender'] + "</div><div class='txt'>" + response[x]['message'] + "</div></div>";

                            }

                            $('.messages').html(html);

                        }

                    });

                    $('.joinbox').hide(); //hide the container for joining the chat room.

                } else if (response.status == 'FAILED') { //username already exists

                    alert("Sorry but the username already exists, please choose another one");

                    $('#username').val('').focus();

                }

            }

        });

    });

    $('#leave-chat').click(function () {

        var username = $(this).data('username');

        $.ajax({

            url: 'http://localhost:8080/leave',

            type: 'POST',

            dataType: 'json',

            data: {

                username: username

            },

            success: function (response) {

                if (response.status == 'OK') {

                    socket.emit('message', {

                        'username': username,

                        'message': username + " has left the chat room.."

                    });

                    socket.emit('update_chatter_count', {

                        'action': 'decrease'

                    });

                    $('.chat').hide();

                    $('.joinbox').show();

                    $('#username').val('');

                    alert('You have successfully left the chat room');

                }

            }

        });

    });

    $('#send-message').click(function () {

        var username = $(this).data('username');

        var message = $.trim($('#message').val());

        $.ajax({

            url: 'http://localhost:8080/send_message',

            type: 'POST',

            dataType: 'json',

            data: {

                'username': username,

                'message': message

            },

            success: function (response) {

                if (response.status == 'OK') {

                    socket.emit('message', {

                        'username': username,

                        'message': message

                    });

                    $('#message').val('');

                    $('.chat').animate({'scrollTop': 999999}, 200);

                }

            }

        });

    });

    socket.on('send', function (data) {

        var username = data.username;

        var message = data.message;

        var html = "<li><div class='msg'><div class='user'>" + username + "</div><div class='txt'>" + message + "</div></div></li>";

        $('.messages').append(html); 

         $('.chat').animate({'scrollTop': 999999}, 200);

    });

    //Emit typing
    message.bind("keypress", () => {
        socket.emit('typing')
    });

    //Listen on typing
    socket.on('typing', (data) => {
        feedback.html("<p><i>" + data.username + "is typing a message..." + "</i></p>")
    });

    socket.on('count_chatters', function (data) {

        if (data.action == 'increase') {

            chatter_count++;

        } else {

            chatter_count--;

        }

        $('.chat-info').text("There are currently " + chatter_count + " people in the chat room");

    });

  socket.on('disconnect', function(data) {
    chatter_count--;
  });

});


 



        </script>
@endsection