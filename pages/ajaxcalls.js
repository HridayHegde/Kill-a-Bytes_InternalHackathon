
function query(sessionid,textinp) {
    var datatosend = {};
    datatosend.session = sessionid;
    datatosend.text = textinp;
    $.ajax({
        type: "POST",
        url: "https://kab2020-crimereg.herokuapp.com/communicate",
        contentType: "application/json; charset=utf-8",
        data: {session: sessionid,text:textinp},
        success: function (response) {
            alert(response);
            return response;
        },
        failure: function (response) {
            alert(response.d);
        }
    });

}
