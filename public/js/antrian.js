$(document).ready(function () {
    lastCall();
    setInterval(lastCall, 1000);

    function lastCall() {
        $.ajax({
            url: window.location.origin + "/tampil_antrian/json",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $("#antrianCallA").text(data["A"]);
                $("#antrianCallB").text(data["B"]);
                $("#antrianCallC").text(data["C"]);
            },
        });
    }
});
