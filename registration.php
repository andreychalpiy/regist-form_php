<?php
include("index.html");
?>

<div class="row registration " id="registBlock">
    <div class="col-md-4">
        <div class="registration-img">
            <div class="registration-img_color"></div>
        </div>
    </div>
    <div class="col-md-8">
        <form class="row g-3 registration-form">
            <div class="col-12 d-flex">
                <h3>Registration </h3>
                <div type="button" class="btn-close"></div>
            </div>
            <div class=" col-md-12 col-lg-6">
                <label for="user" class="form-label">
                    User Name
                    <span class="form-required">*</span>
                </label>
                <input type="text" class="form-control" name="userName" placeholder="User Name">
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="inputEmail4" class="form-label">
                    E-mail
                    <span class="form-required">*</span>
                </label>
                <input type="email" class="form-control" name="email" id="inputEmai" placeholder="E-mail">
            </div>
            <div class="col-md-12 col-lg-6 ">
                <label for="inputPassword4" class="form-label">
                    Password
                    <span class="form-required">*</span>
                </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="confirmPassword" class="form-label">
                    Confirm Password
                    <span class="form-required">*</span>
                </label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPass" placeholder="Confirm Password">
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="firstName" class="form-label">
                    First Name
                    <span class="form-required">*</span>
                </label>
                <input type="text" class="form-control" name="firstName" placeholder="First Name">
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lastName">
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="date" class="form-label">Birth Date</label>
                <input class="form-control" data-mask="00/00/0000" placeholder="Birth Date" name="date" id="birthDate" type="text" />
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="interest" class="form-label">Interest</label>
                <select id="multi" multiple="multiple">
                    <option value="Animals">Animals</option>
                    <option value="Cars">Cars</option>
                    <option value="Music">Music</option>
                </select>

            </div>
            <div class="col-md-12 col-lg-6 d-flex" style="
                    padding-right: 20px;" name="gender">
                <label for="Sex" class="form-label" style="margin-top: 0">
                    Sex
                    <span class="form-required">*</span>
                </label>
                <div class="form-check">
                    <label class="form-check-label" for="">Male</label>
                    <input class="form-check-input" type="radio" name="radio" id="">
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="">
                        Female
                    </label>
                    <input class="form-check-input" type="radio" name="radio" id="">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <label for="" class="form-label">How much do you want to earn?</label>
                <div class="slider-container-5">
                    <input type="text" class="slider-input-5-left" />
                    <input type="text" class="slider-input-5-right " />
                    <div class="slider-5"></div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="confirmCheck">
                    <label class="form-check-label" for="confirmCheck">
                        I confirm that I agree
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button id="submitRegist" disabled class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-light reset" id="resetForm">Reset</button>
            </div>
        </form>
    </div>
</div>
<hr class="featurette-divider">
<div class="footer">
    <p class="footer-text">© 2021 Company, Inc.
    <p class="float-end"><a href="#">Back to top</a></p>
    </p>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="./appSlider.js"></script>
<script src="./app.js"></script>
</body>

</html>