<?php
include "configuracion.php"
?>
@extends('layout.layout')

@section('title', 'Sign Up')

@section('content')
    <div class="SignUpContent">
        <div class="CommonArea">
            <div class="container-fluid" id="grad1">
                <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="border: none;">
                            <div id="stepper1" class="bs-stepper">
                                <!--SliderFade  Esta es la funcion de fade-->
                                <div class="Insider">
                                    <div class="FormWrapper">
                                        <form
                                            id="SignUpForm"
                                            method="post"
                                            class="needs-validation"
                                            enctype="multipart/form-data"
                                            novalidate>
                                            @csrf
                                            <ul id="progressbar">
                                                <li class="active" id="account"><h1 class="d-inline">1</h1><strong>
                                                        Driver <br>Registration</strong></li>
                                                <li id="personal"><h1 class="d-inline">2</h1><strong> Car <br>Registration</strong>
                                                </li>
                                                <li id="payment"><h1 class="d-inline">3</h1><strong> Conditions <br>Review</strong>
                                                </li>
                                                <li id="confirm"><h1 class="d-inline">4</h1><strong> Documents <br>Upload</strong>
                                                </li>
                                            </ul>
                                            <div class="FormSection  bs-stepper-content">
                                                <!--Step 1-->
                                                <fieldset id="step-1">
                                                    <h2 id="account-2"
                                                        class="fs-title text-center"><?php echo $lang['DRIVER REGISTRATION'] ?></h2>

                                                    <p class="fs-title-3 text-center"><?php echo $lang['Please fill this form with your documents information'] ?></p>

                                                    <span class="legend"><?php echo $lang['DRIVER INFO'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationFirstname" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationFirstname" name="First-Name" placeholder="First name"
                                                                   aria-label="First name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a First name.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationLastname" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationLastname" name="Last-Name" placeholder="Last name"
                                                                   aria-label="Last name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Last name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="legend"></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationSocialSecurity"
                                                                   class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationSocialSecurity" name="Social-Security"
                                                                   placeholder="Social Security No."
                                                                   aria-label="Social Security No." required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Social Security No.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationNumber" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationNumber" name="Desired-Number" placeholder="Desired Number"
                                                                   aria-label="Desired Number" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Desired Number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <span class="legend"><?php echo $lang['ADDRESS'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationAddress" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationAddress" name="Street-Address" placeholder="Street Address"
                                                                   aria-label="Street Address" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Street Address.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="signUp_content">
                                                        <span class="legend"></span>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label for="validationApartment"
                                                                       class="form-label"></label>
                                                                <input type="text" class="form-control"
                                                                       id="validationApartment" name="Apartment"
                                                                       placeholder="Apartment / Unit #"
                                                                       aria-label="Apartment / Unit #" required>
                                                                <div class="invalid-feedback">
                                                                    Please choose a Appartment / Unit #.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="validationCity" class="form-label"></label>
                                                                <input type="text" class="form-control"
                                                                       id="validationCity" name="City" placeholder="City"
                                                                       aria-label="City" required>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid City.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="legend"></span>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label for="validationState" class="form-label"></label>
                                                                <select id="validationState" name="State" class="form-select"
                                                                        required>
                                                                    <option
                                                                        selected><?php echo $lang['State'] ?></option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="CA">California</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="DC">District Of Columbia</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="HI">Hawaii</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NV">Nevada</option>
                                                                    <option value="NH">New Hampshire</option>
                                                                    <option value="NJ">New Jersey</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="PA">Pennsylvania</option>
                                                                    <option value="RI">Rhode Island</option>
                                                                    <option value="SC">South Carolina</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="VT">Vermont</option>
                                                                    <option value="VA">Virginia</option>
                                                                    <option value="WA">Washington</option>
                                                                    <option value="WV">West Virginia</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid state.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="validationZip" class="form-label"></label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    id="validationZip" name="Zip-Code"
                                                                    placeholder="Zip Code"
                                                                    aria-label="Zip Code"
                                                                    required
                                                                />
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid zip.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <span class="legend"><?php echo $lang['CONTACT'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationPhone" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationPhone" name="Contact-Phone"
                                                                   placeholder="Phone" aria-label="Phone" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Phone.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationEmail" class="form-label"></label>
                                                            <input type="email" class="form-control"
                                                                   id="validationEmail" name="Contact-Email" placeholder="Email"
                                                                   aria-label="Email" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Email.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <span
                                                        class="legend"><?php echo $lang['EMERGENCY CONTACT '] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationName" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationName" name="Emergency-Contact-Name"
                                                                   placeholder="Name" aria-label="Name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Name.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationEmergencyPhone" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationEmergencyPhone" name="Emergency-Phone"
                                                                   placeholder="Phone" aria-label="Phone" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Phone.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <span class="legend"><?php echo $lang['DRIVER DOCUMENTS'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationDMV" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationDMV" name="DMV"
                                                                   placeholder="DMV License #"
                                                                   aria-label="DMV License #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a DMV License #.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label for="validationTLC" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationTLC" name="TLC"
                                                                   placeholder="TLC License #"
                                                                   aria-label="TLC License #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a TLC License #.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label for="validationExpiration"
                                                                   class="form-label"></label>
                                                            <input type="date" class="form-control"
                                                                   id="validationExpiration" name="TLC-Expiration"
                                                                   placeholder="TLC Expiration Date MM/DD/YYYY"
                                                                   aria-label="TLC Expiration Date MM/DD/YYYY" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a TLC Expiration Date MM/DD/YYYY.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <span class="legend"><?php echo $lang['ACCOUNT'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationUsername" class="form-label"></label>
                                                            <input type="email" class="form-control"
                                                                   id="validationUsername" name="Username" placeholder="Email"
                                                                   aria-label="Username or email" required>
                                                            <div id="validationUsername" class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>

                                                            <div class="col-md-5" style="padding-left: 0px;">
                                                                <label for="validationPassword"
                                                                       class="form-label"></label>
                                                                <input type="password" class="form-control"
                                                                       id="validationPassword" name="Password"
                                                                       placeholder="<?php echo $lang['Password'] ?>"
                                                                       aria-label="Create a password" required>
                                                                <div id="validationUsername" class="invalid-feedback">
                                                                    Please choose a Create a password.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="validationConfirmPassword"
                                                                       class="form-label"></label>
                                                                <input type="password" class="form-control"
                                                                       id="validationConfirmPassword" name="Confirm-Password"
                                                                       placeholder="<?php echo $lang['Confirm Password'] ?>"
                                                                       aria-label="Confirm password" required>
                                                                <div id="validationUsername" class="invalid-feedback">
                                                                    The password does not match .
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="signup_checkbox">
                                                        <span class="legend"></span>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="radio"
                                                                           id="invalidCheck" required>
                                                                    <label class="form-check-label label_agree"
                                                                           for="invalidCheck">
                                                                        I AGREE AND ACCEPT
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p class="fs-title-2">DRIVER OBLIGATIONS: The driver
                                                                    agrees to use the services of Metro Luxury Inc. upon
                                                                    the term and conditions here of and in exchange
                                                                    therefore shall pay to Metro Luxury Inc. a daily or
                                                                    weekly fee in accordance to this agreement.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next"/>


                                                </fieldset>


                                                <!--Step 2-->
                                                <fieldset id="step-2">
                                                    <h2 id="personal"
                                                        class="fs-title text-center"><?php echo $lang['VEHICLE REGISTRATION'] ?></h2>

                                                    <p class="fs-title-3 text-center"><?php echo $lang['Please fill this form with your documents information'] ?></p>

                                                    <span class="legend"><?php echo $lang['YEAR'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectYear"
                                                                   class="form-label"></label>
                                                            <select id="validationSelectYear" name="Car-Year" class="form-select"
                                                                    required>
                                                                <option
                                                                    selected><?php echo $lang['Select Year'] ?></option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Year.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['CAR MAKE'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectMaker"
                                                                   class="form-label"></label>
                                                            <select id="validationSelectMaker" name="Car-Maker" class="form-select"
                                                                    required>
                                                                <option
                                                                    selected><?php echo $lang['Select Maker'] ?></option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Make.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['CAR MODEL'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectModel"
                                                                   class="form-label"></label>
                                                            <select id="validationSelectModel" name="Car-Model" class="form-select"
                                                                    required>
                                                                <option
                                                                    selected><?php echo $lang['Select Model'] ?></option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Model.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['COLOR'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectColor"
                                                                   class="form-label"></label>
                                                            <select id="validationSelectColor" name="Car-Color" class="form-select"
                                                                    required>
                                                                <option
                                                                    selected><?php echo $lang['Select Color'] ?></option>

                                                                <option value="Yellow">Yellow</option><!-- Amarillo --><!-- Yellow -->
                                                                <option value="Blue">Blue</option><!-- Azul --><!-- Blue -->
                                                                <option value="Blue Water">Blue Water</option><!-- Azul Agua --><!-- Blue Water -->
                                                                <option value="Sky Blue">Sky Blue</option><!-- Azul Cielo --><!-- Sky Blue -->
                                                                <option value="Light Blue">Light Blue</option><!-- Azul claro --><!-- Light Blue -->
                                                                <option value="Navy Blue">Navy Blue</option><!-- Azul Marino --><!-- Navy Blue -->
                                                                <option value="Blue Gray">Blue Gray</option><!-- Azul/Grís --><!-- Blue Gray -->
                                                                <option value="Beige">Beige</option><!-- Beige --><!-- Beige -->
                                                                <option value="White">White</option><!-- Blanco --><!-- White -->
                                                                <option value="White Pearl">White Pearl</option><!-- Blanco perla --><!-- White Pearl -->
                                                                <option value="Bronze">Bronze</option><!-- Bronce --><!-- Bronze -->
                                                                <option value="Champang">Champang</option><!-- Champang --><!-- Champang -->
                                                                <option value="Cream">Cream</option><!-- Crema --><!-- Cream -->
                                                                <option value="Golden">Golden</option><!-- Dorado --><!-- Golden -->
                                                                <option value="Gray">Gray</option><!-- Gris --><!-- Gray -->
                                                                <option value="Dark Gray">Dark Gray</option><!-- Gris oscuro --><!-- Dark Gray -->
                                                                <option value="Grey Silver">Grey Silver</option><!-- Gris Plata --><!-- Grey Silver -->
                                                                <option value="Brick">Brick</option><!-- Ladrillo --><!-- Brick -->
                                                                <option value="Brown">Brown</option><!-- Marrón --><!-- Brown -->
                                                                <option value="Purple">Purple</option><!-- Morado --><!-- Purple -->
                                                                <option value="Purple/Gray">Purple/Gray</option><!-- Morado/Gris --><!-- Purple/Gray -->
                                                                <option value="Orange">Orange</option><!-- Naranja --><!-- Orange -->
                                                                <option value="Black">Black</option><!-- Negro --><!-- Black -->
                                                                <option value="Black/Cream">Black/Cream</option><!-- Negro/Crema --><!-- Black/Cream -->
                                                                <option value="Black/Gray">Black/Gray</option><!-- Negro/Gris --><!-- Black/Gray -->
                                                                <option value="Black/Gray">Black/Gray</option><!-- Negro/Gris --><!-- Black/Gray -->
                                                                <option value="Black Red">Black Red</option><!-- Negro/Rojo --><!-- Black Red -->
                                                                <option value="Silver">Silver</option><!-- Plata --><!-- Silver -->
                                                                <option value="Red">Red</option><!-- Rojo --><!-- Red -->
                                                                <option value="Escarlet Red">Escarlet Red</option><!-- Rojo Esacarlata --><!-- Escarlet Red -->
                                                                <option value="Red Wine">Red Wine</option><!-- Rojo Vino --><!-- Red Wine -->
                                                                <option value="Red/Gold">Red/Gold</option><!-- Rojo/Dorado --><!-- Red/Gold -->
                                                                <option value="Pinkish">Pinkish</option><!-- Rosado --><!-- Pinkish -->
                                                                <option value="Silver">Silver</option><!-- Silver --><!-- Silver -->
                                                                <option value="Terracotta">Terracotta</option><!-- Terracota --><!-- Terracotta -->
                                                                <option value="Green">Green</option><!-- Verde --><!-- Green -->
                                                                <option value="Green/Gray">Green/Gray</option><!-- Verde/Gris --><!-- Green/Gray -->
                                                                <option value="Wine">Wine</option><!-- Vino --><!-- Wine -->

                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Color.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['PLATE NUMBER #'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationPlateNumber#"
                                                                   class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationPlateNumber#" placeholder=""
                                                                   aria-label="PLATE NUMBER #" name="plate-number" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a PLATE NUMBER #.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['VIN'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationVin" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationVin" name="Vin"
                                                                   placeholder="" aria-label="VIN" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Vin.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['DIAMOND'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationDIAMOND" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationDIAMOND" name="Diamond" placeholder=""
                                                                   aria-label="DIAMOND" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Diamond.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['BASE NUMBER /NAME'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationBASENUMBER/NAME"
                                                                   class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationBASENUMBER/NAME" name="Base-number" placeholder=""
                                                                   aria-label="Base Number /Name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Base Number /Name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <span class="legend"><?php echo $lang['TABLET #'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationTABLET#" class="form-label"></label>
                                                            <input type="text" class="form-control"
                                                                   id="validationTABLET#" name="Tablet-number" placeholder=""
                                                                   aria-label="TABLET #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Tablet #.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <span
                                                        class="legend"><?php echo $lang['INSURRANCE CERTIFICATE PROVIDED'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10" style="text-align: left;">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="insurance_certificate_provided" id="inlineRadio1"
                                                                       value="option1" style="margin-bottom: 0px;">
                                                                <label class="form-check-label"
                                                                       for="inlineRadio1">YES</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="inlineRadioOptions2" id="inlineRadio2"
                                                                       value="option2" style="margin-bottom: 0px;">
                                                                <label class="form-check-label"
                                                                       for="inlineRadio2">NO</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>


                                                    <span class="legend"><?php echo $lang['NYS REGISTRATION'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10" style="text-align: left;">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="nys_registration" id="inlineRadio3"
                                                                       value="option3" style="margin-bottom: 0px;">
                                                                <label class="form-check-label"
                                                                       for="inlineRadio3">YES</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="inlineRadioOptions4" id="inlineRadio4"
                                                                       value="option4" style="margin-bottom: 0px;">
                                                                <label class="form-check-label"
                                                                       for="inlineRadio4">NO</label>
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>

                                                    <input type="button" name="previous"
                                                           class="previous action-button-previous" value="Previous"/>
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next"/>


                                                </fieldset>


                                                <!--Step 3-->
                                                <fieldset id="step-3">
                                                    <h2 id="payment"
                                                        class="fs-title text-left"><?php echo $lang['CONDITIONS  REVIEW'] ?></h2>

                                                    <p class="fs-title-3 text-left"><?php echo $lang['Please read carefully the following conditions and check the box if you agree.'] ?></p>

                                                    <div class="list-step3">
                                                        <ul>
                                                            <li>• All reports are due on Tuesdays before 12am.</li>
                                                            <li>• Cutoff dates for all reports are from Wednesdays to
                                                                Tuesdays.
                                                            </li>
                                                            <li>• Reports can be sent via email to <a
                                                                    href="mailto:drvreport@metroluxurycorp.com">drvreport@metroluxurycorp.com</a>
                                                                or in person.
                                                            </li>
                                                            <li>• All payments are done every Friday. Payments via check
                                                                are available after 2pm.
                                                            </li>
                                                            <li>• There is no base fee the first week of work. (Please
                                                                make a note on your report)
                                                            </li>
                                                            <li>• Base fees are charged based on the number of vouchers.
                                                                Fees are as follow:
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-step3">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-6 col-sm-3 step3-upercase">UNDER 40
                                                                </div>
                                                                <div class="col-6 col-sm-3 step3-color">$70</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">BETWEEN
                                                                    40-49
                                                                </div>
                                                                <div class="col-6 col-sm-3 step3-color">$50</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">OVER 50</div>
                                                                <div class="col-6 col-sm-3 step3-color">NO CHARGE</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">20 VOUCHERS
                                                                    <p class="p-vouchers">IN THE OUTSIDE OF MANHATTAN
                                                                        AND THE BRONX </p></div>
                                                                <div class="col-6 col-sm-3 step3-color">NO CHARGE</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="list-step3">
                                                        <ul>
                                                            <li>• No shows are only paid with an ETA of 15 minutes or
                                                                more. (not included the 15 minutes mandatory wait time)
                                                            </li>
                                                            <li>• Tolls are only paid crossings with the member. Below
                                                                110th st from Manhattan to Brooklyn/Queens or Vice versa
                                                                before 4pm are not paid unless authorized. After 4pm all
                                                                toll crossings with the member are paid. Bronx to
                                                                Manhattan tolls are not paid.
                                                            </li>
                                                            <li>• All tolls are paid at the EZPASS rate.</li>
                                                            <li>• The Direct Deposit fee is $5</li>
                                                        </ul>
                                                    </div>


                                                    <div id="signup_checkbox">
                                                        <div class="row">
                                                            <div class="col-md-10 step-3-agree">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="radio"
                                                                           id="invalidCheck" name="inlineRadioOptions5" required>
                                                                    <label class="form-check-label label_agree"
                                                                           for="invalidCheck">
                                                                        I AGREE AND ACCEPT THIS TERMS
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p class="fs-title-2">By clicking here, I acknowledge
                                                                    that I have reviewed all the above information and
                                                                    have complete understanding of everything that has
                                                                    been explained to me.</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <input type="button" name="previous"
                                                           class="previous action-button-previous" value="Previous"/>
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next"/>


                                                </fieldset>

                                                <!--Step 4-->
                                                <fieldset id="step-4">
                                                    <h2 id="payment"
                                                        class="fs-title text-center"><?php echo $lang['DOCUMENTS UPLOAD'] ?></h2>

                                                    <p class="fs-title-3 text-center"><?php echo $lang['Please scan and upload the required documents below'] ?></p>

                                                    <div id="stpep-4"
                                                         class="step-4-imput d-flex justify-content-center">
                                                        <div class="">
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="TLC-License-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="TLC-License-Img" placeholder="TLC-License-Img" class="d-none" >
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="TLC LICENSE" x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group ">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="TLC-Inspection-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="TLC-Inspection-Img" placeholder="TLC-Inspection-Img" class="d-none">
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="TLC INSPECTION"
                                                                           x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group ">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="DMV-License-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="DMV-License-Img" placeholder="DMV-License-Img" class="d-none">
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="DMV LICENSE" x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group ">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="Car-Registration-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="Car-Registration-Img" placeholder="Car-Registration-Img" class="d-none">
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="CAR REGISTRATION"
                                                                           x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group ">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="Proof-Of-Insurance-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="Proof-Of-Insurance-Img" placeholder="Proof-Of-Insurance-Img" class="d-none">
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="PROOF OF INSURANCE"
                                                                           x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" x-data="{ fileName: '' }">
                                                                <div class="input-group ">
                                                                    <span id="img-camara"
                                                                          class="input-group-text px-3 text-muted"></span>
                                                                    <input type="file" x-ref="file"
                                                                           id="Certificate-Of-Insurance-Img"
                                                                           @change="fileName = $refs.file.files[0].name"
                                                                           name="Certificate-Of-Insurance-Img" placeholder="Certificate-Of-Insurance-Img" class="d-none">
                                                                    <input class="step-4-imput" type="text"
                                                                           class="form-control form-control-lg"
                                                                           placeholder="CERTIFICATE OF INSURANCE"
                                                                           x-model="fileName"
                                                                           style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                    <button id="img-upload"
                                                                            class="browse btn btn-primary px-4"
                                                                            type="button"
                                                                            x-on:click.prevent="$refs.file.click()">
                                                                        Browse
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br><br>


                                                    <input type="button" name="previous"
                                                           class="previous action-button-previous" value="Previous"/>
                                                    <input id="finish-button" type="button" name="next" class="next action-button"
                                                           value="FINISH"/>


                                                </fieldset>

                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3"><img
                                                                    src="https://img.icons8.com/clouds/100/000000/email.png"
                                                                    class="fit-image"></div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5>You Have Successfully Signed Up</h5>
                                                                <h5>We will send you an email once we verify the data so
                                                                    that you can log in</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--este es el js de file upload-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"/>
    <!--End este es el js de file upload-->


    <!--Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <!--font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
    <!--Boostrap-->




    <!--Este es el JS de el Stepper-->
    <script type="text/javascript">
        var currentStep = 'step-1';
        var steps = ['step-1', 'step-2', 'step-3', 'step-4'];

        function validateStepNoInputEmpty(step) {
            var valid = true;
            var fields = step.find('input[type=text]');
            fields.each(function (i, f) {
                var field = $(f);
                if (!field.prop('required')) {
                    return;
                }

                if (f.value.length <= 0) {
                    valid = false;
                }
            });

            return valid;
        }

        function validateStepNoDropdownSelected(step) {
            var valid = true;
            var fields = step.find('select');
            fields.each(function (i, f) {
                var field = $(f);
                if (!field.prop('required')) {
                    return;
                }

                if (f.value.length <= 0) {
                    valid = false;
                }
            });

            return valid;
        }

        function validateStepNoCheckboxRadioSelected(step) {
            var valid = true;
            var fields = step.find('input[type=radio]');
            fields.each(function (i, f) {
                var field = $(f);
                if (!field.prop('required')) {
                    return;
                }

                if (!f.checked) {
                    valid = false;
                }
            });

            return valid;
        }

        function validateDriverReg() {
            var step = $('#step-1').first();
            var valid = validateStepNoInputEmpty(step);
            valid = validateStepNoDropdownSelected(step) && valid;
            valid = validateStepNoCheckboxRadioSelected(step) && valid;
            return valid;
        }

        function validateCarReg() {
            var step = $('#step-2').first();
            var valid = validateStepNoInputEmpty(step);
            valid = validateStepNoDropdownSelected(step) && valid;
            valid = validateStepNoCheckboxRadioSelected(step) && valid;
            return valid;
        }

        function validateConditionsReview() {
            var step = $('#step-3').first();
            var valid = validateStepNoInputEmpty(step);
            valid = validateStepNoDropdownSelected(step) && valid;
            valid = validateStepNoCheckboxRadioSelected(step) && valid;
            return valid;
        }

        function validateDocumentsUpload() {
            var step = $('#step-4').first();
            var valid = validateStepNoInputEmpty(step);
            valid = validateStepNoDropdownSelected(step) && valid;
            valid = validateStepNoCheckboxRadioSelected(step) && valid;
            return valid;
        }

        function showError() {
            alert('Algo esta mal');
        }

        $(document).ready(function () {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            var valid = false;

            $(".next").click(function (event) {
                switch (currentStep) {
                    case "step-2":
                        valid = validateCarReg();
                        break;
                    case "step-3":
                        valid = validateConditionsReview();
                        break;
                    case "step-4":
                        valid = validateDocumentsUpload();
                        break;
                    default:
                    case "step-1":
                        valid = validateDriverReg();
                        break;
                }

                try {
                    currentStep = steps[steps.indexOf(currentStep) + 1]
                } catch (err) {
                    // ignore
                }

                var parent = $(this).parent();

                if (!valid) {
                    parent.addClass('was-validated');
                    return;
                }

                current_fs = parent;
                next_fs = parent.next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {
                switch (currentStep) {
                    case "step-2":
                        valid = validateCarReg();
                        break;
                    case "step-3":
                        valid = validateConditionsReview();
                        break;
                    case "step-4":
                        valid = validateDocumentsUpload();
                        break;
                    default:
                    case "step-1":
                        valid = validateDriverReg();
                        break;
                }

                try {
                    currentStep = steps[steps.indexOf(currentStep) - 1]
                } catch (err) {
                    // ignore
                }

                var parent = $(this).parent();

                current_fs = parent;
                previous_fs = parent.prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });
        });
    </script>
    <!--End este es el JS de el Stepper-->


    <!--Cargar Marcas / Modelos-->
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        var years = [];
        var makes = [];
        var models = [];
        var apiUrl = "http://localhost/api";
        var selectedMake = 'Honda';
        var selectedModel = 'Civic';
        var selectedYear = new Date().getFullYear();
        var currentYear = new Date().getFullYear();
        var minYear = new Date().getFullYear() - 25;

        $(function () {
            'use strict'
            function loadYears() {
                var control = $("#validationSelectYear");
                control.html('<option selected>{{ $lang['Select Year'] }}</option>');
                for (var i = currentYear; i >= minYear; i--) {
                    control.append('<option value="' + i + '">' + i + '</option>');
                }
            }

            function loadVehicleMakes() {
                var url = apiUrl + "/vehicle/makes/" + selectedYear;
                $.get(url, function (response) {
                    makes = response.data;
                    var control = $("#validationSelectMaker");
                    control.html('<option selected>{{ $lang['Select Maker'] }}</option>');
                    $.each(makes, function (i, d) {
                        // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                        control.append('<option value="' + d + '">' + d + '</option>');
                    });
                });
            }

            function loadVehicleModels() {
                var url = apiUrl + "/vehicle/" + selectedMake.toLowerCase() + "/models/" + selectedYear;
                $.get(url, function (response) {
                    models = response.data;
                    var control = $('#validationSelectModel');
                    control.html('<option selected>{{ $lang['Select Model'] }}</option>');
                    $.each(models, function (i, d) {
                        // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                        control.append('<option value="' + d + '">' + d + '</option>');
                    });
                });
            }

            $('#validationSelectMaker').change(function (val) {
                selectedMake = val.target.value;
                loadVehicleModels();
            });

            $('#validationSelectYear').change(function (val) {
                selectedYear = val.target.value;
                loadVehicleMakes();
            });

            loadYears();
            loadVehicleMakes();
            // loadVehicleModels();
        });
    </script>

    <!--Este es el JS para la Validacion-->
    <script type="text/javascript">
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var form = $('#SignUpForm');

            $('#finish-button').on('click', function(event) {

                event.preventDefault();
                event.stopPropagation();
                form.addClass('was-validated');

                if (!validateDriverReg()
                    || !validateCarReg()
                    || !validateConditionsReview()
                    || !validateDocumentsUpload()) {
                    return;
                }

                // var files = {
                //     tlc_license_img: $('#TLC-License-Img')[0].files,
                //     tlc_inspection_img: $('#TLC-Inspection-Img')[0].files,
                //     dmv_license_img: $('#DMV-License-Img')[0].files,
                //     car_registration_img: $('#Car-Registration-Img')[0].files,
                //     proof_of_insurance_img: $('#Proof-Of-Insurance-Img')[0].files,
                //     certificate_of_insurance_img: $('#Certificate-Of-Insurance-Img')[0].files,
                // };
                //
                // for (var file in files) {
                //     if (files.hasOwnProperty(file) && files[file].length > 0) {
                //         fd.append(file, file[0]);
                //     }
                // }
                debugger;

                // var fd = new FormData(form[0]);
                var fd = new FormData(document.getElementById("SignUpForm"));

                $.ajax({
                    url: 'http://localhost/api/signup',
                    type: 'post',
                    // dataType: 'json',
                    data: fd,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        debugger;
                    }
                });
            });
        })();
    </script>
@endsection
