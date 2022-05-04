<script>
    var userToken;
    $(function() {

        loadBookings();

        // if (window.location.href == "http://127.0.0.1:8000/login") {
        //     loadUser();
        // }

        function loadUser() {
            var loggedIn = "{{ auth()->check() ? 'true' : 'false' }}";
            if (loggedIn) {
                window.location.href = "{{ url('dashboard') }}";
            }
        }

        $('#userLogin').on('click', function() {
            var email = $('#email').val();
            var password = $('#password').val();

            var request = $.ajax({
                url: "/api/login",
                type: "POST",
                data: {
                    email,
                    password
                }
            });

            request.done(function(response, textStatus, jqXHR, result) {
                var data = response.data;
                console.log(data);
                window.location.href = "{{ url('dashboard') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                var errorMsg = jqXHR.responseJSON
                $('#errorMsg').html(errorMsg.error).removeClass('d-none');
            });
        });

        function loadBookings() {
            $('#bookingList').html("");
            var request = $.ajax({
                url: "/api/bookings",
                type: "GET",
            });

            request.done(function(response, textStatus, jqXHR) {
                var data = response.data;

                data.map(booking => {
                    $('#bookingList').append(`
                        <tr>
                            
                        </tr>
                    `);
                })
            });
        }

        $('#logout').on('click', function() {

            var request = $.ajax({
                url: "/api/logout",
                type: "GET"
            });

            request.done(function(response, textStatus, jqXHR) {
                var data = response.data;
                console.log(response);
                window.location.href = "{{ url('login') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                var errorMsg = jqXHR.responseJSON
                console.log(errorMsg);
            });
        });
    });
</script>