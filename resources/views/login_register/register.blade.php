<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
    <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
    </style>
</head>

<body>
 
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="image/anhkhanh.jpg" alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-center text-uppercase">register</h3>
                                <form action="{{url('register/registerrun')}}" method="get">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="firtname" name="firtname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="lastname" name="lastname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="email" name="email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Email</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Username</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Password</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password1" name="password1"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Confirm password</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="file" id="image" name="image" class="form-control form-control-lg"
                                            placeholder="Hình ảnh" />
                                        <label class="form-label" for="form3Example8">Avarta</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="tel" id="phone" name="phone" class="form-control form-control-lg"
                                            placeholder="+84" />
                                        <label class="form-label" for="form3Example8">Phone</label>
                                    </div>
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender:</h6>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" id="gender" name="gender" type="radio" name="inlineRadioOptions"
                                                id="femaleGender" value="option1"/>
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" id="gender" name="gender" type="radio" name="inlineRadioOptions"
                                                id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" id="gender" name="gender" type="radio" name="inlineRadioOptions"
                                                id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                               
                                        <div class="col-md-4 mb-4">
                                            <select data-mdb-select-init>
                                                <option value="1">Thành Phố</option>
                                                <option value="2">Hồ Chí Minh</option>
                                                <option value="3">Trà Vinh</option>
                                                <option value="4">Bình Thuận</option>
                                                <option value="5">Vĩnh Long</option>
                                                <option value="6">Long An</option>
                                                <option value="7">Cần Thơ</option>
                                                <option value="8">Ninh Binh</option>
                                                <option value="9">Cần Thơ</option>
                                                <option value="10">Nịnh Thuận</option>
                                                <option value="11">Vũng Tàu</option>
                                                <option value="12">Sóc Trăng</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex justify-content-end pt-3">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-danger mb-3 btn-lg btn-block">Submit</button>
                                        </div>
                                        <div class="col-lg-4"></div>
                                      
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>