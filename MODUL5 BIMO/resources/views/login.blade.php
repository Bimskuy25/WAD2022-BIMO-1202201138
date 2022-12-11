@include('layouts.layout')
    <section id="login" class="vh-100" style="background-color: #444aee;">
                <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="assets/img/testcar.jpg"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
            
                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="d-flex align-items-center mb-3 pb-1">
                                <span class="h1 fw-bold mb-0">Login</span>
                                </div>
            
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            
                                <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" name="email" 
                                value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"/>
                                <label class="form-label" for="email">Email address</label>
                                </div>
            
                                <div class="form-outline mb-4">
                                <input type="password" id="pass" class="form-control form-control-lg" name="password"
                                value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>"/>
                                <label class="form-label" for="pass">Password</label>
                                </div>
            
                                <div class="pt-1 mb-4">
                                <button class="btn btn-dark btn-lg btn-block" name="login" type="submit">Login</button>
                                </div>
                                
                                <!-- Checkbox -->
                                <div class="form-check justify-content-start mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="check" name="check"/>
                                    <label class="form-check-label" for="check"> Remember password </label>
                                </div>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{'register'}}"
                                    style="color: #ff0026;">Register here</a></p>
                                <a href="#!" class="small text-muted">Terms of use.</a>
                                <a href="#!" class="small text-muted">Privacy policy</a>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        </section>