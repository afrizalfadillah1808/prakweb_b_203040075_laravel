@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center mt-3">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                                @enderror
                            </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

                </form>

                <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>

            </main>
        </div>
    </div>
@endsection