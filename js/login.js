/**
 * Created by Davis on 2/22/2016.
 */
$(document).ready(function () {

    $("#companyNameForm").submit(function (event) {
        // cancels the form submission
        event.preventDefault();
    });

    $('#goBtn').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        var entry = $.trim($('#companyNameInput').val().toLowerCase());
        if (entry == 'wjma') {
            window.location.replace("http://realsimpleemail.com/wjma/dashboard.php");
        } else if (entry === 'teaparty') {
            window.location.replace("http://realsimpleemail.com/teaparty/dashboard.php");
        } else {
            $('#warningSpan').removeClass('hidden');
        }

    })


});