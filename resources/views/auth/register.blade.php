@include('components.header')
<body>
<section class="container">
    <header>SignUp</header>
    <form action="#" class="form">
        <div class="column">
            <div class="input-box">
                <label>First Name</label>
                <input id="reg-first-name" type="text" placeholder="Enter first name" required />
            </div>
            <div class="input-box">
                <label>Last Name</label>
                <input id="reg-last-name" type="text" placeholder="Enter last name" required />
            </div>
        </div>

        <div class="input-box">
            <label>Email</label>
            <input id="reg-email" type="text" placeholder="Enter email address" required />
        </div>

        <div class="input-box">
            <label>Password</label>
            <input id="reg-password" type="password" placeholder="Enter password" required />
        </div>

        <button id="signup">Signup</button>
        <div class="login-signup-link">Already have an account? <a href= "{{ route('login')}}">Login</a></div>
    </form>
</section>
<script src="{{ asset('js/common-functions.js') }}"></script>
<script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>
