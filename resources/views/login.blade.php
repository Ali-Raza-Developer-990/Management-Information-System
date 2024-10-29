<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Form with Captcha</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css" />
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  body {
    font-family: sans-serif;
    background: #f5f5f5;
  }

  .login-form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    max-width: 450px;
    background: #fff;
    padding: 20px 30px;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    border: 1px solid rgba(17, 12, 46, 0.15);
    border-radius: 10px;
  }

  .login-form .form-title {
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    margin: 20px 0px 30px;
    color: #111;
  }

  .login-form .form-input {
    margin: 10px 0px;
  }

  .login-form .form-input label,
  .login-form .captcha label {
    display: block;
    font-size: 15px;
    color: #111;
    margin-bottom: 10px;
  }

  .login-form .form-input input {
    width: 100%;
    padding: 10px;
    outline: none;
    border-radius: 4px;
    border: 1px solid #888;
    font-size: 15px;
  }

  .login-form .captcha {
    margin: 15px 0px;
  }

  .login-form .captcha .preview {
    color: #555;
    width: 100%;
    text-align: center;
    height: 40px;
    line-height: 40px;
    letter-spacing: 8px;
    border: 1px dashed #888;
    border-radius: 4px;
    font-family: "monospace";
  }

  .login-form .captcha .preview span {
    display: inline-block;
    user-select: none;
  }

  .login-form .captcha .captcha-form {
    display: flex;
  }

  .login-form .captcha .captcha-form input {
    width: 100%;
    outline: none;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #888;
  }

  .login-form .captcha .captcha-form .captcha-refresh {
    width: 40px;
    border: none;
    outline: none;
    background: #888;
    border-radius: 4px;
    color: #eee;
    cursor: pointer;
  }

  #login-btn {
    margin-top: 5px;
    width: 100%;
    padding: 12px;
    border: none;
    outline: none;
    font-size: 15px;
    text-transform: uppercase;
    background: #4c81ff;
    border-radius: 5px;
    color: #fff;
    transition: .3s;
    cursor: pointer;
  }

  #login-btn:hover {
    opacity: .8;
  }
</style>

<body>
  <div class="login-form">
    <div class="form-title">
      Login
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('loginstore') }}" method="POST">
        @csrf
    <div class="form-input">
      <label for="username">Username</label>
      <input name="email" type="text" id="username">
    </div>
    <div class="form-input">
      <label for="password">Password</label>
      <input name="password" type="password" id="password">
    </div>

    <div class="form-input">
      <button id="login-btn">Login</button>
    </div>
</form>
  </div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="script.js"></script>
</body>

</html>