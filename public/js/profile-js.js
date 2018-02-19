$(document).ready(function () {
    //alert('gregre');
    $('#profile-btn').click(function() {
        $('#profile-info').show();
        $('#edit-profile').hide();
        $('#change-password').hide();
    });

    $('#edit-profile-btn').click(function() {
        $('#profile-info').hide();
        $('#edit-profile').show();
        $('#change-password').hide();
    });

    $('#change-password-btn').click(function() {
        $('#profile-info').hide();
        $('#edit-profile').hide();
        $('#change-password').show();
    });
});