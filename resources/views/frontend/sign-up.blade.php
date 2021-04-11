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
                                        <form id="SignUpForm" method="post" class="needs-validation" novalidate>
                                            <ul id="progressbar">
                                                <li class="active" id="account"><h1 class="d-inline">1</h1><strong> Driver <br>Registration</strong></li>
                                                <li id="personal"><h1 class="d-inline">2</h1><strong> Car <br>Registration</strong></li>
                                                <li id="payment"><h1 class="d-inline">3</h1><strong> Conditions <br>Review</strong></li>
                                                <li id="confirm"><h1 class="d-inline">4</h1><strong> Documents <br>Upload</strong></li>
                                            </ul>
                                            <div class="FormSection  bs-stepper-content">
                                                <!--Step 1-->
                                                <fieldset id="progressbar">
                                                    <h2 id="account-2" class="fs-title text-center"><?php echo $lang['DRIVER REGISTRATION'] ?></h2>

                                                    <p class="fs-title-3 text-center"><?php echo $lang['Please fill this form with your documents information'] ?></p>

                                                    <span class="legend"><?php echo $lang['DRIVER INFO'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationFirstname" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationFirstname" placeholder="First name" aria-label="First name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a First name.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationLastname" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationLastname" placeholder="Last name" aria-label="Last name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Last name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="legend"></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationSocialSecurity" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationSocialSecurity" placeholder="Social Security No." aria-label="Social Security No." required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Social Security No.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationNumber" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationNumber" placeholder="Desired Number" aria-label="Desired Number" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Desired Number.
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <span class="legend"><?php echo $lang['ADDRESS'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationAddress" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationAddress" placeholder="Street Address" aria-label="Street Address" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Street Address.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="signUp_content">
                                                    <span class="legend"></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationAppartment" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationAppartment" placeholder="Appartment / Unit #" aria-label="Appartment / Unit #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Appartment / Unit #.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationCity" class="form-label"></label>
                                                            <select id="validationCity" class="form-select" required>
                                                                <option selected><?php echo $lang['City'] ?></option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid City.
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <span class="legend"></span>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label for="validationState" class="form-label"></label>
                                                                <select id="validationState" class="form-select" required>
                                                                    <option selected><?php echo $lang['State'] ?></option>
                                                                    <option>...</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid state.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="validationZip" class="form-label"></label>
                                                                <input type="text" class="form-control" id="validationZip" placeholder="Zip Code" aria-label="Zip Code" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid zip.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <span class="legend"><?php echo $lang['CONTACT'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationPhone" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationPhone" placeholder="Phone" aria-label="Phone" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Phone.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationEmail" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationEmail" placeholder="Email" aria-label="Email" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Email.
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <span class="legend"><?php echo $lang['EMERGENCY CONTACT '] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for="validationName" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationName" placeholder="Name" aria-label="Name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Name.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="validationPhone" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationPhone" placeholder="Phone" aria-label="Phone" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Phone.
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <span class="legend"><?php echo $lang['DRIVER DOCUMENTS'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationDMV" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationDMV" placeholder="DMV License #" aria-label="DMV License #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a DMV License #.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label for="validationTLC" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationTLC" placeholder="TLC License #" aria-label="TLC License #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a TLC License #.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <label for="validationExpiration" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationExpiration" placeholder="TLC Expiration Date MM/DD/YYYY" aria-label="TLC Expiration Date MM/DD/YYYY" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a TLC Expiration Date MM/DD/YYYY.
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <span class="legend"><?php echo $lang['ACCOUNT'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationUsername" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationUsername" placeholder="Username or email" aria-label="Username or email" required>
                                                            <div id="validationUsername" class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>

                                                            <div class="col-md-5" style="padding-left: 0px;">
                                                                <label for="validationPassword" class="form-label"></label>
                                                                <input type="text" class="form-control" id="validationPassword" placeholder="<?php echo $lang['Password'] ?>" aria-label="Create a password" required>
                                                                <div id="validationUsername" class="invalid-feedback">
                                                                    Please choose a Create a password.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="validationConfirmPassword" class="form-label"></label>
                                                                <input type="text" class="form-control" id="validationConfirmPassword" placeholder="<?php echo $lang['Confirm Password'] ?>" aria-label="Confirm password" required>
                                                                <div id="validationUsername" class="invalid-feedback">
                                                                    Please choose a Confirm password.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                        <div id="signup_checkbox">
                                                            <span class="legend"></span>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" type="radio" id="invalidCheck" required>
                                                                            <label class="form-check-label label_agree" for="invalidCheck">
                                                                                I AGREE AND ACCEPT
                                                                            </label>
                                                                            <div class="invalid-feedback">
                                                                                You must agree before submitting.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p class="fs-title-2">DRIVER OBLIGATIONS: The driver agrees to use the services of Metro Luxury Inc. upon the term and conditions here of and in exchange therefore shall pay to Metro Luxury Inc. a daily or weekly fee in accordance to this agreement.</p>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                    <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->
                                                    <input type="button" name="next" class="next action-button" value="Next" />


                                                </fieldset>


                                                <!--Step 2-->
                                                <fieldset id="step-2">
                                                    <h2 id="personal" class="fs-title text-center"><?php echo $lang['VEHICLE REGISTRATION'] ?></h2>

                                                    <p class="fs-title-3 text-center"><?php echo $lang['Please fill this form with your documents information'] ?></p>

                                                    <span class="legend"><?php echo $lang['CAR MAKE'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectMaker" class="form-label"></label>
                                                            <select id="validationSelectMaker" class="form-select" required>
                                                                <option selected><?php echo $lang['Select Maker'] ?></option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Make.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="legend"><?php echo $lang['CAR MODEL'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectModel" class="form-label"></label>
                                                            <select id="validationSelectModel" class="form-select" required>
                                                                <option selected><?php echo $lang['Select Model'] ?></option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Model.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="legend"><?php echo $lang['COLOR'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectColor" class="form-label"></label>
                                                            <select id="validationSelectColor" class="form-select" required>
                                                                <option selected><?php echo $lang['Select Color'] ?></option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Color.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="legend"><?php echo $lang['YEAR'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationSelectYear" class="form-label"></label>
                                                            <select id="validationSelectYear" class="form-select" required>
                                                                <option selected><?php echo $lang['Select Year'] ?></option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid Car Year.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['PLATE NUMBER #'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationPlateNumber#" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationPlateNumber#" placeholder="" aria-label="PLATE NUMBER #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a PLATE NUMBER #.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['VIN'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationVin" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationVin" placeholder="" aria-label="VIN" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Vin.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['DIAMOND'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationDIAMOND" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationDIAMOND" placeholder="" aria-label="DIAMOND" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Diamond.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span class="legend"><?php echo $lang['BASE NUMBER /NAME'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationBASENUMBER/NAME" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationBASENUMBER/NAME" placeholder="" aria-label="Base Number /Name" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Base Number /Name.
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <span class="legend"><?php echo $lang['TABLET #'] ?></span>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label for="validationTABLET#" class="form-label"></label>
                                                            <input type="text" class="form-control" id="validationTABLET#" placeholder="" aria-label="TABLET #" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a Tablet #.
                                                            </div>
                                                        </div>
                                                    </div>


                                                        <span class="legend"><?php echo $lang['INSURRANCE CERTIFICATE PROVIDED'] ?></span>
                                                        <div class="row">
                                                            <div class="col-md-10" style="text-align: left;">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin-bottom: 0px;">
                                                                    <label class="form-check-label" for="inlineRadio1">YES</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" style="margin-bottom: 0px;">
                                                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    You must agree before submitting.
                                                                </div>
                                                            </div>
                                                        </div><br><br>


                                                        <span class="legend"><?php echo $lang['NYS REGISTRATION'] ?></span>
                                                        <div class="row">
                                                            <div class="col-md-10" style="text-align: left;">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin-bottom: 0px;">
                                                                    <label class="form-check-label" for="inlineRadio1">YES</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" style="margin-bottom: 0px;">
                                                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    You must agree before submitting.
                                                                </div>
                                                            </div>
                                                        </div><br><br>

                                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                    <input type="button" name="next" class="next action-button" value="Next" />


                                                </fieldset>


                                                <!--Step 3-->
                                                <fieldset id="step-3">
                                                    <h2 id="payment" class="fs-title text-left"><?php echo $lang['CONDITIONS  REVIEW'] ?></h2>

                                                    <p class="fs-title-3 text-left"><?php echo $lang['Please read carefully the following conditions and check the box if you agree.'] ?></p>

                                                    <div class="list-step3">
                                                        <ul>
                                                            <li>•	All reports are due on Tuesdays before 12am.</li>
                                                            <li>•	Cutoff dates for all reports are from Wednesdays to Tuesdays.</li>
                                                            <li>•	Reports can be sent via email to <a href="mailto:drvreport@metroluxurycorp.com">drvreport@metroluxurycorp.com</a> or in person.</li>
                                                            <li>•	All payments are done every Friday.  Payments via check are available after 2pm.</li>
                                                            <li>•	There is no base fee the first week of work.  (Please make a note on your report)</li>
                                                            <li>•	Base fees are charged based on the number of vouchers.  Fees are as follow:</li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-step3">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-6 col-sm-3 step3-upercase">UNDER 40</div>
                                                                <div class="col-6 col-sm-3 step3-color">$70</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">BETWEEN 40-49</div>
                                                                <div class="col-6 col-sm-3 step3-color">$50</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">OVER 50</div>
                                                                <div class="col-6 col-sm-3 step3-color">NO CHARGE</div>
                                                                <!-- Force next columns to break to new line -->
                                                                <div class="w-100"></div>

                                                                <div class="col-6 col-sm-3 step3-upercase">20 VOUCHERS <p class="p-vouchers">IN THE OUTSIDE OF MANHATTAN AND THE BRONX </p></div>
                                                                <div class="col-6 col-sm-3 step3-color">NO CHARGE</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="list-step3">
                                                        <ul>
                                                            <li>•	No shows are only paid with an ETA of 15 minutes or more.  (not included the 15 minutes mandatory wait time)</li>
                                                            <li>•	Tolls are only paid crossings with the member.  Below 110th st from Manhattan to Brooklyn/Queens or Vice versa before 4pm are not paid unless authorized.  After 4pm all toll crossings with the member are paid.  Bronx to Manhattan tolls are not paid.</li>
                                                            <li>•	All tolls are paid at the EZPASS rate.</li>
                                                            <li>•	The Direct Deposit fee is $5</li>
                                                        </ul>
                                                    </div>


                                                    <div id="signup_checkbox">
                                                        <div class="row">
                                                            <div class="col-md-10 step-3-agree">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="radio" id="invalidCheck" required>
                                                                    <label class="form-check-label label_agree" for="invalidCheck">
                                                                        I AGREE AND ACCEPT THIS TERMS
                                                                    </label>
                                                                    <div class="invalid-feedback">
                                                                        You must agree before submitting.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p class="fs-title-2">By clicking here, I acknowledge that I have reviewed all the above information and have complete understanding of everything that has been explained to me.</p>
                                                            </div>
                                                        </div>
                                                    </div>



                                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                            <input type="button" name="next" class="next action-button" value="Next" />



                                            </fieldset>

                                            <!--Step 4-->
                                            <fieldset>
                                                <h2 id="payment" class="fs-title text-center"><?php echo $lang['DOCUMENTS UPLOAD'] ?></h2>

                                                <p class="fs-title-3 text-center"><?php echo $lang['Please scan and upload the required documents below'] ?></p>

                                                <div id="stpep-4" class="step-4-imput d-flex justify-content-center">
                                                    <div class="">
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="TLC LICENSE" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group ">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="TLC INSPECTION" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group ">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="DMV LICENSE" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group ">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="CAR REGISTRATION" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group ">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="PROOF OF INSURANCE" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" x-data="{ fileName: '' }">
                                                            <div class="input-group ">
                                                                <span id="img-camara" class="input-group-text px-3 text-muted"></span>
                                                                <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                                                                <input class="step-4-imput" type="text" class="form-control form-control-lg" placeholder="CERTIFICATE OF INSURANCE" x-model="fileName" style="margin-bottom: 0px;margin-top: 0px;border-radius: 0px;">
                                                                <button id="img-upload" class="browse btn btn-primary px-4" type="button" x-on:click.prevent="$refs.file.click()"> Browse</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br><br><br>




                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                <input type="submit" name="next" class="next action-button" value="FINISH" />


                                            </fieldset>

                                                <fieldset>
                                                    <div class="form-card">
                                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3"> <img src="https://img.icons8.com/clouds/100/000000/email.png" class="fit-image"> </div>
                                                        </div> <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5>You Have Successfully Signed Up</h5>
                                                                <h5>We will send you an email once we verify the data so that you can log in</h5>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" />
    <!--End este es el js de file upload-->

    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min_compressed.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/stripe_custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/visible_plugin.js') }}"></script>



    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />





    <!--Este es el JS de el Stepper-->
    <script type="text/javascript">

        function showError() {
            alert('Algo esta mal');
        }

        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            var valid = false;

            $(".next").click(function(){
                if (!valid && false) {
                    showError();
                    return;
                }

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
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

            $(".previous").click(function(){

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
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

            $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $("submit").click(function(){
                return false;
            })

        });


    </script>
    <!--End este es el JS de el Stepper-->





    <!--Este es el JS para la Validacion-->
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

    </script>





























@endsection
