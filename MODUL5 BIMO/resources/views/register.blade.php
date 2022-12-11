@include('layouts.layout')
        <section class="vh-150" style="background-color: #444aee;">
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
                            <form action="{{ url('/register')}}" method="POST" enctype="multipart/form-data"> 
                                @csrf
                                <div class="d-flex align-items-center mb-2 pb-1">
                                <span class="h1 fw-bold mb-0">Register</span>
                                </div>
                                <h5 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Register your account</h5>
                                <div class="form-outline mb-2">
                                    <input type="email" id="email" class="form-control" name="email"/>
                                    <label class="form-label" for="email">Email address</label>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="text" id="nama" class="form-control" name="name"/>
                                    <label class="form-label" for="nama">Nama</label>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="password" class="form-control" name="password" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="password2" class="form-control" name="password2"/>
                                    <label class="form-label" for="password2">Konfirmasi Password</label>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="number" id="no_hp" class="form-control" name="no_hp"/>
                                    <label class="form-label" for="no_hp">Nomor Handphone</label>
                                </div>
                                <div class="pt-1 mb-2">
                                    <button class="btn btn-dark" onclick="" type="submit" name="register">Register</button>
                                </div>
                                <p class="test" style="color: #393f81;">Already have an account? <a href="{{'login'}}"
                                    style="color: #ff0026;">Login here</a></p>
                            </form>
            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        </section>