var settings = {
    url: "http://127.0.0.1:8000/keyresults/update/2",
    method: "PATCH",
    timeout: 0,
};

$.ajax(settings).done(function (response) {
    console.log(response);
});

$("#action1").change(function () {
    var value = $(this).val();
    $.ajax({
        type: "PATCH",
        url: "key_results",
        async: true,
        data: {
            action1: value, // as you are getting in php $_POST['action1']
        },
        success: function (msg) {
            alert("Success");
            if (msg != "success") {
                alert("Fail");
            }
        },
    });
});
