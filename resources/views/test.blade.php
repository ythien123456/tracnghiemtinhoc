@extends('layouts.main')

@section('content')
    <script>
        function getMessage() {
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "getmsg",
                data: {// change data to this object
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (data) {
                    $.each($.parseJSON(data.questions), function (idx, obj) {
                        $("#msg").append("<tr><td>" + obj.QuestionID + "</td> : <td>" + obj.QuestionContent + "</td></tr>");
                    });
                    $("#btn").hide();
                    //console.log(data.questions)
                    // $("#msg").html(data.msg);
                },
                fail: function (xhr, textStatus, errorThrown) {
                    alert('request failed');
                }
            });

        }
    </script>
    <table id='msg'>
    </table>
    <input type="button" id="btn" onclick="getMessage()" value="click me!">

@endsection