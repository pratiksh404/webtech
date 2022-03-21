<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex" style="height: 100vh">
                    <div class="justify-content-center align-self-center">
                        <img src="https://i.pinimg.com/originals/f4/4f/3f/f44f3f1b3b9f38e9ac23b8df51cae911.png"
                            alt="logo" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex" style="height: 100vh">
                    <div class="justify-content-end align-self-center">
                        <div class="card mr-3">
                            <img src="https://i.pinimg.com/originals/f4/4f/3f/f44f3f1b3b9f38e9ac23b8df51cae911.png"
                                class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Sign in to account</h5>
                                <span class="text-muted">Enter your email & password to login</span>

                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger fade show" role="alert">
                                    <strong>Error !</strong> {{$message}}
                                </div>
                                @endif

                                <div class="mt-2">
                                    <form action="{{ route('authenticate') }}" method="POST">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email" />
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mb-2">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="********" />
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-outline-primary">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>