//instanciar objeto app
var app = app || {};
app.api = {
    get: function (server_url, parameters, callbackSuccess, callbackError) {
        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            }
        });
        // $.ajax({
        //   headers: {
        //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //   },
        //   url: server_url,
        //   type: "GET",
        //   data: parameters
        // }).done(function(e){
        //   console.log(e);
        // });
        $.ajax({
            url: server_url,
            type: "GET",
            data: parameters,
            success: function(data, textStatus, jqXHR)
            {
                callbackSuccess(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                callbackError();
            }
        });
    },
    post: function (server_url, postObject, callbackSuccess, callbackError) {
        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            }
        });
        $.ajax({
            url: server_url,
            type: "POST",
            data: postObject,
            success: function(data, textStatus, jqXHR)
            {
                callbackSuccess();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                callbackError();
            }
        });
    }
}
