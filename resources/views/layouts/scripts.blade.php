<script>
    $(function() {

        if (window.location.href == "http://127.0.0.1:8000/dashboard") {
            loadUserBookings();
        }

        if (window.location.href == "http://127.0.0.1:8000/calendar") {
            loadAllBookings();
        }

        if (window.location.href == "http://127.0.0.1:8000/login") {
            loadUser();
        }

        function loadUser() {
            let loggedIn = JSON.parse(sessionStorage.getItem('UniqueUserToken'));
            if (loggedIn) {
                window.location.href = "{{ url('dashboard') }}";
            }
        }

        $('#saveUser').on('click', function() {
            let firstname = $('#firstname').val();
            let lastname = $('#lastname').val();
            let email = $('#email').val();
            let password = $('#password').val();

            let request = $.ajax({
                url: "/api/register",
                method: "POST",
                data: {
                    firstname,
                    lastname,
                    email,
                    password
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                let data = response.data;
                console.log(data);
                window.location.href = "{{ url('login') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                let errorMsg = jqXHR.responseJSON
                $('#errorMsg').html(errorMsg.error).removeClass('d-none');
            });
        });

        $('#userLogin').on('click', function() {
            let email = $('#email').val();
            let password = $('#password').val();

            let request = $.ajax({
                url: "/api/login",
                method: "POST",
                data: {
                    email,
                    password
                }
            });

            request.done(function(response, textStatus, jqXHR, result) {
                let data = response.data;
                let token = data.token;
                let userId = data.id;


                console.log(userId);

                sessionStorage.setItem('UniqueUserToken', JSON.stringify(token));
                sessionStorage.setItem('UserId', JSON.stringify(userId));
                window.location.href = "{{ url('dashboard') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                let errorMsg = jqXHR.responseJSON
                $('#errorMsg').html(errorMsg.error).removeClass('d-none');
            });
        });

        $('#reserveDesk').on('click', function() {
            let token = JSON.parse(sessionStorage.getItem('UniqueUserToken'));

            let title = $('#title').val();
            let description = $('#description').val();
            let date = $('#date').val();
            let location = $('#location').val();

            let request = $.ajax({
                url: "/api/booking",
                method: "POST",
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                data: {
                    title,
                    description,
                    date,
                    location
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                let data = response.data;
                console.log(data);
                window.location.href = "{{ url('dashboard') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                let errorMsg = jqXHR.responseJSON
                $('#errorMsg').html(errorMsg.error).removeClass('d-none');
            });
        });

        function loadUserBookings() {
            $('#userBookingList').html("");

            let token = JSON.parse(sessionStorage.getItem('UniqueUserToken'));
            let userId = JSON.parse(sessionStorage.getItem('UserId'));

            let request = $.ajax({
                url: `/api/booking/${userId}`,
                method: "GET",
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                let data = response.data;
                console.log(data);
                data.map(booking => {
                    $('#userBookingList').append(`
                        <tr>
                            <td>${booking.title}</td>
                            <td>${booking.description}</td>
                            <td>${booking.date}</td>
                            <td>${booking.location}</td>
                        </tr>
                    `);
                })
            });
        }

        function loadAllBookings() {
            $('#bookingList').html("");

            let token = JSON.parse(sessionStorage.getItem('UniqueUserToken'));

            let request = $.ajax({
                url: "/api/bookings",
                method: "GET",
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                let data = response.data;
                console.log(data);
                data.map(booking => {
                    $('#bookingList').append(`
                        <tr>
                            <td>${booking.title}</td>
                            <td>${booking.description}</td>
                            <td>${booking.date}</td>
                            <td>${booking.location}</td>
                        </tr>
                    `);
                })
            });
        }

        $('#logout').on('click', function() {

            let token = JSON.parse(sessionStorage.getItem('UniqueUserToken'));

            let request = $.ajax({
                url: "/api/logout",
                method: "GET",
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            request.done(function(response, textStatus, jqXHR) {
                let data = response.data;
                sessionStorage.clear();
                window.location.href = "{{ url('login') }}";
            });

            request.fail(function(jqXHR, textStatus, errorThrown) {
                let errorMsg = jqXHR.responseJSON
                console.log(errorMsg);
            });
        });
    });
</script>