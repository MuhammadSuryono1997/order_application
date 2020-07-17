<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <img src="https://image.flaticon.com/icons/svg/3154/3154276.svg" alt="logo" width="100" class="shadow-light rounded-circle">
  <title>Order Application</title>
</head>

<body>
  <div>

    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus />
        <div class="invalid-feedback">
          Please fill in your email
        </div>
      </div>

      <div class="form-group">
        <div class="d-block">
          <label for="password" class="control-label">Password</label>
        </div>
        <input id="password" type="password" class="form-control" name="password" tabindex="2" required />
        <div class="invalid-feedback">
          please fill in your password
        </div>
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" />
          <label class="custom-control-label" for="remember-me">Remember Me</label>
        </div>
      </div>

      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
          Login
        </button>
      </div>
    </form>
  </div>
</body>

</html>