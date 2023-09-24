@include('components.header')
<body>
<section class="container">
    <header>Login</header>
    <div class="form">
        <div class="input-box">
            <label>Email</label>
            <input id="login-email" type="text" placeholder="Enter email address" required />
        </div>
        <div class="input-box">
            <label>Password</label>
            <input id="login-password" type="password" placeholder="Enter password" required />
        </div>
        <button id="login">Login</button>
        <div class="login-signup-link">Don't have an account? <a href= "{{ route('signup')}}">Signup</a></div>
    </div>
</section>
<script src="{{ asset('js/common-functions.js') }}"></script>
<script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>
