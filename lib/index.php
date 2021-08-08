Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@thomasonyemechi 
livepetal
/
onlineCourses
Private
0
10
Code
Issues
Pull requests
Actions
Projects
Security
Insights
onlineCourses/resources/views/register.blade.php

= More features Added
Latest commit 974a4df 7 days ago
 History
 0 contributors
381 lines (351 sloc)  19.3 KB
  
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/raque/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 15:31:21 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{--    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css?h=a636fbf0224e7b4ed5de5161a2e82cdd")}}">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,900i&amp;subset=latin-ext">--}}
{{--    <link rel="stylesheet" href="{{asset("assets/css/Footer-Basic.css?h=19c49f513ee5dda433e73c1a8fce2f6c")}}">--}}
{{--    <link rel="stylesheet" href="{{asset("assets/css/animate.min.css")}}">--}}
{{--    <link rel="stylesheet" href="{{asset("assets/css/Navigation-with-Button.css?h=d4496580de134cfc853a627fedfa2b83")}}">--}}
{{--    <link rel="stylesheet" href="{{asset("assets/css/styles.css?h=8a152247c6efccba9e1df2d4f62d1e61")}}">--}}

    <link rel="stylesheet" href="{{asset('assets1/css/bootstrap..min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/viewer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css?h=a636fbf0224e7b4ed5de5161a2e82cdd")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,900i&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{asset("assets/fonts/fontawesome-all.min.css?h=2c0fc24b3d3038317dc51c05339856d0")}}">
    <link rel="stylesheet" href="{{asset("assets/fonts/font-awesome.min.css?h=2c0fc24b3d3038317dc51c05339856d0")}}">
    <link rel="stylesheet" href="{{asset("assets/fonts/fontawesome5-overrides.min.css?h=2c0fc24b3d3038317dc51c05339856d0")}}">
    <link rel="stylesheet" href="{{asset("assets/css/Footer-Basic.css?h=3373ef6a1dfa2a22f10d665f6802b4c3")}}">
    <link rel="stylesheet" href="{{asset("assets/css/Navigation-with-Button.css?h=d4496580de134cfc853a627fedfa2b83")}}">
    <link rel="stylesheet" href="{{asset("assets/css/styles.css?h=2645bb3a2995da0b40d573b5026b0e42")}}">
    <title>Lentoria - Register</title>
    <link rel="icon" type="image/png" href="{{asset('assets1/img/favicon.png')}}">
</head>
<body>

@include('inc.message_toast')
{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <div class="shadow"></div>--}}
{{--        <div class="box"></div>--}}
{{--    </div>--}}
{{--</div>--}}


<section class="login-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-image">
                <img src="{{asset('assets1/img/login-bg.jpg')}}" alt="image">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-content">
                <div class="d-table">
                    <div class="d-table-cell" style="padding: 30px">
                        <div class="login-form">
                            <div class="logo mr-3">
                                <a href="/homepage">
                                    <img class="img-fluid" src="{{asset("assets/img/150x30.png?h=859fca863c9f387e678c2acfae8e300e")}}" />
                                </a>
                            </div>
                            <h3>You are Welcome</h3>
                            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                            <span id="showMessage" style="display: none"></span>
                            <form id="submitForm" method="POST" action="{{ route('user.register.store') }}">
                                @csrf
                                @include('inc.message')
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="firstname">First Name</label>
                                    </div>
                                    <input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="off" autofocus placeholder="First Name">
                                    <span class="text-danger" style="display: none" id="showFirstNameError"></span>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="lastname">Last Name</label>
                                    </div>
                                    <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="off" autofocus placeholder="Last Name">
                                    <span class="text-danger" style="display: none" id="showLastNameError"></span>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="phone">Phone No</label>
                                    </div>
                                    <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off" autofocus placeholder="Phone Number">
                                    <span class="text-danger align-items-start" style="display: none" id="showPhoneError"></span>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="email">Email</label>
                                    </div>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="email">
                                    <span class="text-danger" style="display: none" id="showEmailError"></span>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password">Password</label>
                                        <a id="view_pass" href="javascript:void(0)"><i class="fa fa-eye-slash" style="color: initial;"></i></a>
                                    </div>
                                    <input type="password" minlength="5" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password" >
                                    <span class="text-danger" style="display: none" id="showError"></span>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="confirm">Confirm Password</label>
                                    </div>
                                    <input type="password" id="confirm" class="form-control @error('confirm') is-invalid @enderror" name="confirm" required autocomplete="current-password" placeholder="Confirm Password" >
                                    <span class="text-danger" style="display: none" id="showError1"></span>
                                </div>
                                <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                                <button type="submit" id="submit">Sign Up</button>
{{--                                <div class="forgot-password">--}}
{{--                                    <a href="#">Forgot Password?</a>--}}
{{--                                </div>--}}
{{--                                <div class="connect-with-social">--}}
{{--                                    <button type="submit" class="facebook"><i class='bx bxl-facebook'></i> Connect with Facebook</button>--}}
{{--                                    <button type="submit" class="twitter"><i class='bx bxl-twitter'></i> Connect with Twitter</button>--}}
{{--                                </div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('assets1/js/jquery.min.js')}}"></script>
<script src="{{asset('assets1/js/popper.min.js')}}"></script>
<script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets1/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets1/js/mixitup.min.js')}}"></script>
<script src="{{asset('assets1/js/parallax.min.js')}}"></script>
<script src="{{asset('assets1/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets1/js/odometer.min.js')}}"></script>
<script src="{{asset('assets1/js/particles.min.js')}}"></script>
<script src="{{asset('assets1/js/meanmenu.min.js')}}"></script>
<script src="{{asset('assets1/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets1/js/viewer.min.js')}}"></script>
<script src="{{asset('assets1/js/slick.min.js')}}"></script>
<script src="{{asset('assets1/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets1/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets1/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets1/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets1/js/main.js')}}"></script>

<script src="{{asset("assets/js/jquery.min.js?h=89312d34339dcd686309fe284b3f226f")}}"></script>
<script src="{{asset("assets/bootstrap/js/bootstrap.min.js?h=7c038681746a729e2fff9520a575e78c")}}"></script>
<script src="{{asset("assets/js/custom.js?h=f3f0cf0e61dfa84848d09d688da2c383")}}"></script>
<script src="{{asset("assets/js/image-uploader.js?h=bf97f34c280b32f5361cd9283b68038a")}}"></script>
<script src="{{asset("assets/js/login.js?h=e6a13f7fb80f8dd5a8bd936c4b92ade4")}}"></script>


<script>
    let password = document.querySelector('input#password');
    let phone = document.querySelector('input#phone');
    let firstname = document.querySelector('input#firstname');
    let lastname = document.querySelector('input#lastname');
    let confirm = document.querySelector('input#confirm');
    let submit = document.querySelector('button#submit')
    let email = document.querySelector('input#email')
    firstname.addEventListener('input', function () {
        let firstVal = this.value.trim()
        if(firstVal.length > 2){
            $('#showFirstNameError').hide()
            firstname.className = 'form-control';
            submit.removeAttribute('disabled')
        } else {
            $('#showFirstNameError').show().html('Please Enter a valid Name')
            firstname.className = 'form-control is-invalid';
            submit.setAttribute('disabled', 'disabled')
        }
    })
    lastname.addEventListener('input', function () {
        let lastVal = this.value.trim()
        if(lastVal.length > 2){
            $('#showLastNameError').hide()
            lastname.className = 'form-control';
            submit.removeAttribute('disabled')
        } else {
            $('#showLastNameError').show().html('Please Enter a valid Name')
            lastname.className = 'form-control is-invalid';
            submit.setAttribute('disabled', 'disabled')
        }
    })
    phone.addEventListener('input', function () {
        let digit = this.value
        if(digit.length > 10){
            $('#showPhoneError').hide()
            phone.className = 'form-control';
            submit.removeAttribute('disabled')
            $.ajax({
                url: 'https://livepetal.com/testapi/api/onlinecourse/api?phoneNumberChecker='+digit,
                method: 'GET'
            }).done((res) => {
                res = JSON.parse(res)
                // console.log(res)
                if(!res.success){
                    $('#showPhoneError').show().html('Phone No already exists')
                    phone.className =  'form-control is-invalid';
                    submit.setAttribute('disabled', 'disabled')
                } else {
                    $('#showPhoneError').hide()
                    phone.className = 'form-control valid';
                    submit.removeAttribute('disabled')
                }
            }).fail((err) => {
                console.log('Server Error')
            })
        } else {
            $('#showPhoneError').show().html('Please Enter a valid Phone No e.g 07011111111')
            phone.className = 'form-control is-invalid';
            submit.setAttribute('disabled', 'disabled')
        }
    })
    email.addEventListener('input', function () {
        let emailVal = this.value
        // console.log(emailVal)
        $.ajax({
            url: 'https://livepetal.com/testapi/api/onlinecourse/api?emailChecker='+emailVal,
            method: 'GET'
        }).done((res) => {
            res = JSON.parse(res)
            // console.log(res)
            if(!res.success){
                $('#showEmailError').show().html('Email already exists')
                email.className =  'form-control is-invalid';
                submit.setAttribute('disabled', 'disabled')
            } else {
                $('#showEmailError').hide()
                email.className = 'form-control';
                submit.removeAttribute('disabled')
            }
        }).fail((err) => {
            console.log('Sever Error')
        })
    })
    password.addEventListener('input', function () {
            let pwd = this.value;
            const regEx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{5,})")
            if(!regEx.test(pwd)) {
                $('#showError').show().html('Password Must Contain at least one Upper case, Lower case and a Number')
                password.className = password.className + ' is-invalid';
                submit.setAttribute('disabled', 'disabled')
            } else {
                $('#showError').hide()
                password.className = 'form-control';
                submit.removeAttribute('disabled')
            }
        })
    confirm.addEventListener('input', function () {
        let confirmVal = this.value;
        let pwd = password.value;
        // const regEx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{5,})")
        if(confirmVal !== pwd) {
            $('#showError1').show().html('Password Must be the same with Confirm Password')
            confirm.className = confirm.className + ' is-invalid';
            submit.setAttribute('disabled', 'disabled')
        } else {
            $('#showError1').hide()
            confirm.className = 'form-control';
            submit.removeAttribute('disabled')
        }
    })
    // $('#submitForm').on('submit', function (e) {
    //     e.preventDefault()
    //     const fname = $('#firstname').val()
    //     const lname = $('#lastname').val()
    //     const phoneNo = $('#phone').val()
    //     const email = $('#email').val()
    //     const password = $('#password').val()
    //     const token = $('#token').val()
    //     // const confirm = $('#confirm').val()
    //
    //     const data = {
    //         firstname: fname, lastname: lname, phone: phoneNo, _token: token,
    //         email:email,password: password, id: '2we123'
    //     }
    //     $.ajax({
    //         url: '/user/register',
    //         method: 'POST',
    //         data: data
    //     }).done((res) => {
    //         console.log(res)
    //         if(res.success){
    //             $('#showMessage').addClass('alert alert-success').html('Registration Completed').show()
    //             setTimeout(() => {
    //                 $('#showMessage').hide()
    //             }, 3500)
    //             window.location.href = '/user/login'
    //         } else {
    //             $('#showMessage').addClass('alert alert-danger').html(res.message).show()
    //             setTimeout(() => {
    //                 $('#showMessage').hide()
    //             }, 3500)
    //         }
    //     }).fail((err) => {
    //         console.log('Server Error', err.responseJSON.message)
    //     })
    // })
    $('#submitForm').on('submit', function (e) {
        e.preventDefault()
        const fname = $('#firstname').val()
        const lname = $('#lastname').val()
        const phoneNo = $('#phone').val()
        const email = $('#email').val()
        const password = $('#password').val()
        const token = $('#token').val()
        // const confirm = $('#confirm').val()
        const data = {
            firstname: fname, lastname: lname, phone: phoneNo, email:email,password: password
        }
        $.ajax({
            url: 'https://livepetal.com/testapi/api/onlinecourse/api?signupDetails='+JSON.stringify(data),
            method: 'GET'
        }).done((res) => {
            console.log(res)
            res = JSON.parse(res)
            if(res.success){
                $('#showMessage').addClass('alert alert-success').html('Registration Successful, Please Log in').show()
                setTimeout(() => {
                    $('#showMessage').hide()
                }, 5000)
                $.ajax({
                    url: '/user/register',
                    method: 'POST',
                    data: {
                        firstname: res.data.firstname,
                        lastname: res.data.lastname,
                        phone: res.data.phone,
                        email: res.data.email,
                        id: res.id,
                        sn: res.data.sn,
                        _token: token
                    }
                }).done((res) => {
                    if(res.success){
                        window.location.href = '/login'
                    }
                })
            } else {
                $('#showMessage').addClass('alert alert-danger').html(res.message).show()
                setTimeout(() => {
                    $('#showMessage').hide()
                }, 3500)
            }
        }).fail((err) => {
            console.log('Server Error', err.responseJSON.message)
        })
    })
</script>
</body>

<!-- Mirrored from templates.envytheme.com/raque/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 15:31:21 GMT -->
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About






<script>
    // let password = document.querySelector('input#password');
    // let submit = document.querySelector('button#submit')
    //
    // password.addEventListener('input', function () {
    //     let pwd = this.value;
    //     const regEx = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{5,})")
    //
    //     if(!regEx.test(pwd)) {
    //         $('#showError').show().html('Password Must Contain at least one upper case, lower case and a number')
    //         password.className = password.className + ' is-invalid';
    //         submit.setAttribute('disabled', 'disabled')
    //     } else {
    //         $('#showError').hide()
    //         password.className = 'form-control';
    //         submit.removeAttribute('disabled')
    //     }
    // })
</script>



