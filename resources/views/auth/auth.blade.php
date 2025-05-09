

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Auth Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #62605b; /* светлый фон */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
<div class="auth-container">
    <!-- Sign In -->
    <div id="signInSection" >
        <h3 class="text-center mb-4">Sign In</h3>
        <form id="loginForm">
            <div class="mb-3">
                <label for="signinEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="signinEmail" name="email" placeholder="Enter email" />
            </div>
            <div class="mb-3">
                <label for="signinPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signinPassword" name="password" placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-success w-100">Sign In</button>
        </form>
        <button class="btn btn-link d-block mx-auto mb-3" id="toSignUpBtn" type="button">Don't have an account? Sign Up</button>

    </div>

    <!-- Sign Up -->
    <div id="signUpSection" style="display: none;">
        <h3 class="text-center mb-4">Sign Up</h3>
        <form id="registerForm">
            <div class="mb-3">
                <label for="signupName" class="form-label">Name</label>
                <input type="text" class="form-control" id="signupName" name="name" placeholder="Enter name" />
            </div>
            <div class="mb-3">
                <label for="signupEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter email" />
            </div>
            <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
        <button class="btn btn-link d-block mx-auto mb-3" id="toSignInBtn" type="button">Already have an account? Sign In</button>
    </div>


</div>
</body>
</html>
@vite('resources/js/auth.js')
