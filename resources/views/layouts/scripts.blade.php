<script>
    $(function() {
        loadNav();
        checkUser();
        checkAuth();

        function checkAuth() {
            let loggedIn = JSON.parse(sessionStorage.getItem('UniqueUserToken'));

            if (loggedIn) {
                $('#dashboardBtn').removeClass('d-none');
                $('#loginBtn').addClass('d-none');
            }
        }

        if (window.location.href == "http://127.0.0.1:8000/dashboard") {
            loadUserBookings();
        }

        if (window.location.href == "http://127.0.0.1:8000/bookings") {
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

        function checkUser() {
            let loggedIn = JSON.parse(sessionStorage.getItem('UniqueUserToken'));

            if (!loggedIn) {
                if (window.location.href == "http://127.0.0.1:8000/dashboard") {
                    window.location.href = "{{ url('login') }}";
                } else if (window.location.href == "http://127.0.0.1:8000/bookings") {
                    window.location.href = "{{ url('login') }}";
                } else if (window.location.href == "http://127.0.0.1:8000/booking") {
                    window.location.href = "{{ url('login') }}";
                }
            }
        }

        function loadNav() {
            let fname = JSON.parse(sessionStorage.getItem('firstname'));
            let lname = JSON.parse(sessionStorage.getItem('lastname'));
            let email = JSON.parse(sessionStorage.getItem('email'));

            $('#dashboardName').html(`${fname} ${lname}`);
            $('#dashboardEmail').html(email);
            $('#userName').html(`${fname} ${lname}`);
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
                let firstname = data.firstname;
                let lastname = data.lastname;
                let email = data.email;

                sessionStorage.setItem('UniqueUserToken', JSON.stringify(token));
                sessionStorage.setItem('UserId', JSON.stringify(userId));
                sessionStorage.setItem('firstname', JSON.stringify(firstname));
                sessionStorage.setItem('lastname', JSON.stringify(lastname));
                sessionStorage.setItem('email', JSON.stringify(email));
                window.location.href = "{{ url('dashboard') }}";
            });

            request.fail(function(xhr, status, error) {
                let err = eval("(" + xhr.responseText + ")");
                console.log(err);
                $('#errorMsg').html(err.error).removeClass('d-none');
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

            request.fail(function(xhr, status, error) {
                let err = eval("(" + xhr.responseText + ")");
                console.log(err);
                $('#errorMsg').html(err.error).removeClass('d-none');
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
                            <td>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </td>
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