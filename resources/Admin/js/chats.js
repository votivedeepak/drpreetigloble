var username;



$(document).ready(function()

{

    username = $('#username').html();

    url = $('#url').val();



    pullData();



    $(document).keyup(function(e) {

        if (e.keyCode == 13)

            sendMessage();

        //else

            //isTyping();

    });

});



function pullData()

{

    retrieveChatMessages();

    //retrieveTypingStatus();

    setTimeout(pullData,3000);

}



function retrieveChatMessages()

{

    // $.post('{{ url("/retrieveChatMessages") }}', {username: username}, function(data)

    // {

    //     if (data.length > 0)

    //         $('#chat-window').append('<br><div>'+data+'</div><br>');

    // });

    $.ajax({

        type: "post",

        headers: {

           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },

        data: {

           username : username

        },

        url: url+'/retrieveChatMessages',   

        success: function(data) {

           if (data.length > 0)

                $('#chat-window').append('<div class="incoming_msg"><div class="incoming_msg_img"></div><div class="received_msg"><div class="received_withd_msg"><p>'+data+'</p><span class="time_date"></span></div></div></div>');

       }

   });

}



function retrieveTypingStatus()

{

    // $.post('http://localhost/chats/public/retrieveTypingStatus', {username: username}, function(username)

    // {

    //     if (username.length > 0)

    //         $('#typingStatus').html(username+' is typing');

    //     else

    //         $('#typingStatus').html('');

    // });





}



function sendMessage()

{

    var text = $('#text').val();

    var reciever = $('#reciever').val();



    

    if (text.length > 0)

    {

        // $.post('http://localhost/chats/public/sendMessage', {text: text, username: username}, function()

        // {

        //     $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');

        //     $('#text').val('');

        //     notTyping();

        // });



        $.ajax({

            type: "post",

            headers: {

               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },

            data: {

               username : username,

               reciever : reciever,

               text: text

            },

            url: url+'/sendMessage',        

            success: function(data) {

                $('#chat-window').append('<div class="outgoing_msg"><div class="sent_msg"><p>'+text+'</p><span class="time_date"></span></div></div>');

                $('#text').val('');

           }

       });

    }

}



function isTyping()

{

    //$.post('http://localhost/chats/public/isTyping', {username: username});

}



function notTyping()

{

    //$.post('http://localhost/chats/public/notTyping', {username: username});

}