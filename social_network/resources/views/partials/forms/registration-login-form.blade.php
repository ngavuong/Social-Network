
<!-- Login-Registration Form  -->

<div class="registration-login-form">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                <svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                <svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
            </a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
            <div class="title h6">Register to Olympus</div>
            <form class="content">
                <div class="row">
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">First Name</label>
                            <input class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Last Name</label>
                            <input class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Email</label>
                            <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Password</label>
                            <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="form-group date-time-picker label-floating">
                            <label class="control-label">Your Birthday</label>
                            <input name="datetimepicker" value="10/24/1984" />
                            <span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
                        </div>

                        <div class="form-group label-floating is-select">
                            <label class="control-label">Your Gender</label>
                            <select class="selectpicker form-control">
                                <option value="MA">Male</option>
                                <option value="FE">Female</option>
                            </select>
                        </div>

                        <div class="remember">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    I accept the <a href="#">Terms and Conditions</a> of the website
                                </label>
                            </div>
                        </div>

                        <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
            <div class="title h6">Login to your Account</div>
            <form class="content">
                <div class="row">
                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Email</label>
                            <input class="form-control" placeholder="" type="email">
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Password</label>
                            <input class="form-control" placeholder="" type="password">
                        </div>

                        <div class="remember">

                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    Remember Me
                                </label>
                            </div>
                            <a href="#" class="forgot">Forgot my Password</a>
                        </div>

                        <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                        <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ... end Login-Registration Form  -->