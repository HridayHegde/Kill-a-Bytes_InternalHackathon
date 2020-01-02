
function query(sessionid,textinp) {
    var datatosend = {};
    datatosend.session = sessionid;
    datatosend.text = textinp;
    $.ajax({
        type: "POST",
        url: "https://kab2020-crimereg.herokuapp.com/communicate",
        contentType: "application/text; charset=utf-8",
        data: String(datatosend),
        success: function (response) {
            print(response);
            return response;
        },
        failure: function (response) {
            alert(response.d);
        }
    });

}
