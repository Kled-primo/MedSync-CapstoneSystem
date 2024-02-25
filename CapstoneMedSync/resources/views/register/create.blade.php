<x-layout bodyClass="">

    <div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Sign Up</h4>
                                        <p class="mb-0">Enter your name, email and password to register</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                        <div class="add-user-form">
                                            @csrf
                                            @method('post')
                                            <div class="input-group input-group-outline mt-3">
                                            <input type="first_name" class="form-control" name="first_name" placeholder="Firstname">
                                            </div>
                                            @error('name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                            <input type="last_name" class="form-control" name="last_name" placeholder="Lastname">
                                            </div>
                                            @error('name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                            <input type="username" class="form-control" name="username" placeholder="Username">
                                            </div>
                                            @error('name')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            @error('email')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            @error('password')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="text-center">
                                                <input type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value = "Sign Up">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Already have an account?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @push('js')
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script>
        $(function() {
    
        var text_val = $(".input-group input").val();
        if (text_val === "") {
          $(".input-group").removeClass('is-filled');
        } else {
          $(".input-group").addClass('is-filled');
        }
    });
    </script>
    @endpush
</x-layout>
