<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
<div class="page-wrapper">
    @include('navbar')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" onclick="window.location='{{ url("/") }}'"><i
                                class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"
                        onclick="window.location='{{ url("/login") }}'">Login
                    </li>
                </ol>
            </div>
        </nav>

        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Login</h2>
                        <p>If you have an account with us, please log in.</p>
                    </div><!-- End .heading -->

                    <form action="#">
                        <input type="text" id="username" class="form-control" placeholder="Username" required>
                        <input type="password" id="password" class="form-control" placeholder="Password" required>

                        <div class="form-footer">
                            <button type="button" onclick="loginOnClick()" class="btn btn-primary">LOGIN</button>
                            {{--									<a href="#" class="forget-pass"> Forgot your password?</a>--}}
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Create An Account</h2>
                        <p>By creating an account with our store, you will be able to move through the checkout process
                            faster, store multiple shipping addresses, view and track your orders in your account and
                            more.</p>
                    </div><!-- End .heading -->

                    <form>
                        <input id="firstname" type="text" class="form-control" placeholder="First Name" required>
                        <input id="lastname" type="text" class="form-control" placeholder="Last Name" required>
                        <input id="address" type="text" class="form-control" placeholder="Address" required>
                        <input id="mobilenumber" type="text" class="form-control" placeholder="Mobile Number" required>

                        <h2 class="title mb-2">Login information</h2>
                        <input id="regusername" type="text" class="form-control" placeholder="Username" required>
                        <input id="regpassword" type="password" class="form-control" placeholder="Password" required>
                        <input id="cpassword" type="password" class="form-control" placeholder="Confirm Password"
                               required>
                        <div class="form-footer">
                            <button type="button" onclick="onClickCreateAccount()" class="btn btn-primary">Create
                                Account
                            </button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->

    @include('footer')
</div><!-- End .page-wrapper -->

@include('othercontent')
<script>
    let result = null;

    function loginOnClick() {
        let loginob = {"userName": $('#username').val().trim(), "password": $('#password').val().trim()};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseurlAPI + "login",
            method: "POST",
            dataType: 'json',
            contentType: 'application/json',
            headers: {"Authorization": localStorage.getItem('token')},
            data: JSON.stringify(loginob),
            processData: false,
            async: true,
            success: function (res) {
                let username = res['username'];
                let token = res['token'];


                let form_data = new FormData();
                form_data.append("_token", "{{ csrf_token() }}");
                form_data.append("token", token);
                form_data.append("username", username);


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: baseurl + "session/call",
                    method: 'post',
                    data: form_data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    async: true,
                    success: function (result) {
                        // localStorage.setItem("name", "data");
                        toastr.success('Login Successfully !', 'Success ! ');
                        window.location = baseurl;


                    },
                    error: function (error) {
                        toastr.error('Credentials are incorrect ! check and resubmit', 'Error ! ');

                    }
                });


            },
            error: function (res) {
                toastr.error('Credentials are incorrect ! check and resubmit', 'Error ! ');

            }
        })
    }


    function onClickCreateAccount() {

        let firstname = $('#firstname').val().trim();
        let lastname = $('#lastname').val().trim();
        let address = $('#address').val().trim();
        let mobilenumber = $('#mobilenumber').val().trim();
        let regusername = $('#regusername').val().trim();
        let regpassword = $('#regpassword').val();
        let cpassword = $('#cpassword').val();


        let data1 = JSON.stringify({
            "_token": "{{ csrf_token() }}",
            "userName": regusername,
            "password": regpassword,
            "role": "Client",
            "firstName": firstname,
            "lastName": lastname,
            "address": address,
            "contact": mobilenumber
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (cpassword == regpassword) {
            if (true) {
                $.ajax({
                    url: baseurlAPI + "user/check-user",
                    method: 'post',
                    data: data1,
                    async: true,
                    processData: false,
                    contentType: 'application/json',
                    success: function (data) {
                        if (data == 0) {
                            $.ajax({
                                url: baseurlAPI + "user/sign-up",
                                method: 'post',
                                data: data1,
                                async: true,
                                processData: false,
                                contentType: 'application/json',
                                success: function (result) {
                                    // localStorage.setItem("name", "data");
                                    toastr.success('Registration Successfully !', 'Success ! ');
                                    $('#regusername').css('border-color', '');
                                    $('#cpassword').css('border-color', '');
                                    $('#regpassword').css('border-color', '');
                                    clearAll();

                                },
                                error: function (error) {
                                    toastr.error('Something Went Wrong! ', 'Error ! ');

                                }
                            });
                        } else if (data == 1) {
                            toastr.error('This username is exist ! check & resubmit ', 'Error ! ');
                            $('#regusername').css('border-color', 'red');
                            $('#cpassword').css('border-color', '');
                            $('#regpassword').css('border-color', '');
                        }
                    },
                    error: function (error) {
                        toastr.error('Something Went Wrong! ', 'Error ! ');

                    }
                });
            } else {
                toastr.error('Something Went Wrong! ', 'Error ! ');
                $('#cpassword').css('border-color', '');
                $('#regpassword').css('border-color', '');
            }

        } else {
            toastr.error('Password mismatch ! Please re enter password ', 'Error ! ');
            $('#cpassword').css('border-color', 'red');
            $('#regpassword').css('border-color', 'red');
            $('#regusername').css('border-color', '');
        }

    }

    function clearAll() {
        $('#cpassword').val('');
        $('#regpassword').val('');
        $('#regusername').val('');
        $('#mobilenumber').val('');
        $('#address').val('');
        $('#lastname').val('');
        $('#firstname').val('');
    }

    function checkuser(jsondata, handleData) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseurlAPI + "user/check-user",
            method: 'post',
            data: jsondata,
            async: true,
            processData: false,
            contentType: 'application/json',
            success: function (data) {
                handleData = data;
            },
            error: function (error) {
                toastr.error('Something Went Wrong! ', 'Error ! ');

            }
        });
    }
</script>
</body>
</html>


