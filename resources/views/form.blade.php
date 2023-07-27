<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        
        <h1 class="text-center mt-5 mb-5">Registration</h1>
        <div class="container">
            <div class="mb-3">
                <label for="" class="form-label col-2">Name</label>
                <input type="text" class="form-control col-10" name="name" id="name-field" aria-describedby="emailHelpId" placeholder="please Enter your name" value=" {{old('name')}} ">
                <small id="emailHelpId" class="form-text text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label col-2">E-mail</label>
                <input type="email" class="form-control col-10" name="mail" id="mail-field" aria-describedby="emailHelpId" placeholder="Please Enter e-mail address">
                <small id="emailHelpId" class="form-text text-danger">
                    @error('mail')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label col-2">Password</label>
                <input type="password" class="form-control col-10" name="password" id="password-field" aria-describedby="emailHelpId" placeholder="Please enter your password">
                <small id="emailHelpId" class="form-text text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label col-2">Confirm Password</label>
                <input type="password" class="form-control col-10" name="cnf_password" id="password-field" aria-describedby="emailHelpId" placeholder="Please enter your password">
                <small id="emailHelpId" class="form-text text-danger">
                    @error('cnf_password')
                        {{$message}}
                    @enderror
                </small>
            </div>
            <input type="submit" class="btn btn-primary" value="Register" name="register" />
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>