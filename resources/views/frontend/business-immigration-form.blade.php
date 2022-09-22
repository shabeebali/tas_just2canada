<x-layouts.frontend>
    <div id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <div class="carousel-inner" role="listbox">
                    <div class="item active slide1"><img src="images/banner/form2.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <section id="aboutus" class="about_us_area   row">
        <div class="container">
            <div class="row about_row" style="padding-top:0;">
                <div class="tittle wow fadeInUpBig" style="text-align: left; visibility: visible;">
                    <h1 class="welc-text"> BUSINESS IMMIGRATION ASSESSMENT FORM
                        <a href="obtain-free-assessment.html" class="backlink pull-right">
                            <i class="fa-chevron-left fa"></i> Back
                        </a>
                    </h1>
                    <!-- <br> -->
                    <p style="font-style:italic;color:red;font-weight:bold;">The best 5 minutes you would have ever invested in obtaining an accurate assessment of your Canadian immigration qualifications!</p>
                </div>
                <div class="form-div" x-data="businessform">
                    <form class="text-left   row-20 ng-pristine ng-valid" action="{{ route('business-immigration.store') }}" method="POST" enctype="multipart/form-data" id="contactus"  accept-charset="UTF-8">
                        @csrf
                        <input type="hidden" name="submitted" id="submitted" value="1">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p>
                            Upon reviewing your Business Immigration form and assessing your eligibility under one of Canada’s business immigration programs, if we feel that you qualify under one of them,  our office will invite you for a ‘No-charge’ detailed one-to-one Zoom video discussion with Mr. Anoo Lal, RCIC, a Certified Canadian Immigration Practitioner. This meeting may last between 30 to 60 minutes.
                        </p>
                        <p>
                            If you would like to proceed further with your application after the discussion, you will be required to pay a File Admin fee of Cad$150. This fee will be fully adjusted in your first installment if you decide to retain services of Just To Canada Immigration Services Group within 30 days from the date of consultation. Please tick the box below that you acknowledge and understand these obligations
                        </p>
                        <p>
                            <input type="checkbox" name="agree"/> By clicking this box, I acknowledge that a fee of Cad $150 or equivalent towards the File Administration fee shall apply to me if I wish to proceed with my application based on my assessment and interaction with Mr. Lal.
                        </p>
                        <h4>CONFIDENTIAL WHEN COMPLETED.</h4>
                        Just To Canada case assessment specialists will use the collected information from this form to
                        assess all Canadian immigration possibilities. None of the information will be shared with any
                        third parties for any purposes whatsoever.
                        <br>
                        <br>
                        <div class="form-inner">
                            <div class="col-md-6"><strong>1.</strong> Full Name
                                <span class="spanHighlight">*</span> (As per your Passport)
                                <input id="txtName" type="text" class="form-control col-12" maxlength="40" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="col-md-6">E-mail<span class="spanHighlight">*</span>
                                <input id="txtEmail" type="email" class="form-control col-12" maxlength="40" name="email" value="{{ old('email') }}"></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">Phone Number (with country and area code)<span class="spanHighlight">*</span> <br>
                                <input id="txtTelephone" type="text" class="form-control col-12" style="" placeholder="000-000-0000" maxlength="40" name="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="col-md-6">What is your current country of residence?<span class="spanHighlight">*</span>
                                <select id="txtCountry" class="form-control col-12" name="country">
                                    <option value="0">--Select--</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}" @if(old('country') == $country->name) selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">What is your current city of residence?<span class="spanHighlight">*</span>
                                <input id="txtNationality" type="text" class="form-control col-12" maxlength="40" name="city_of_residence" value="{{ old('city_of_residence') }}">
                            </div>
                            <div class="col-md-6">What is your nationality?<span class="spanHighlight">*</span>
                                <input id="txtNationality" type="text" class="form-control col-12" maxlength="40" name="nationality" value="{{ old('nationality') }}">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">How did you obtain our reference? (optional)<span class="spanHighlight"></span>
                                <input id="txtReference" type="text" class="form-control col-12" maxlength="40"  name="reference" value="{{ old('reference') }}"></div>
                            <div class="clearfix"></div>
                            <div class="col-md-4"><strong>2.</strong> Date of Birth of Principal Applicant<span class="spanHighlight">*</span>
                                <input id="txtDate_of_birth_of_Principal_Applicant" type="date" class="form-control col-12" maxlength="40" name="dob" value="{{ old('dob') }}">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12"><strong>3.</strong> Marital Status<span class="spanHighlight">*</span><br>
                                <input class="radMarital_status" name="marital_status" x-model="marital_status" type="radio" value="Married" @if(old('marital_status') == 'Married') checked @endif>Married <br>
                                <input class="radMarital_status" name="marital_status" x-model="marital_status" type="radio" value="Divorced" @if(old('marital_status') == 'Divorced') checked @endif>Divorced <br>
                                <input class="radMarital_status" name="marital_status" x-model="marital_status" type="radio" value="Legally Separated" @if(old('marital_status') == 'Legally Separated') checked @endif> Legally Separated <br>
                                <input class="radMarital_status" name="marital_status" x-model="marital_status" type="radio" value="Never Married"  @if(old('marital_status') == 'Never Married') checked @endif> Never Married
                            </div>
                            <div class="clearfix"></div>



                            <br>
                            <template x-if="marital_status == 'Married'">
                                <div>
                                    <div class="col-md-4 divIfmarried">Your Spouse's Date of Birth
                                        <input id="txtSpouse_Date_Of_Birth" type="date" class="form-control col-12" maxlength="40" name="spouse_dob" value="{{ old('spouse_dob') }}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 divIfmarried">Your spouse’s experience?<br>
                                        <input name="spouse_experience" class="radSpouse_Experience" type="radio" value="Work Experience as a Business person" @if(old('spouse_experience') == 'Work Experience as a Business person') checked @endif> Work Experience as a Business person <br>
                                        <input class="radSpouse_Experience" name="spouse_experience" type="radio" value="Work Experience as a Skilled Worker" @if(old('spouse_experience') == 'Work Experience as a Skilled Worker') checked @endif> Work Experience as a Skilled Worker
                                        <input class="radSpouse_Experience" name="spouse_experience" type="radio" value="Not employed currently" @if(old('spouse_experience') == 'Not employed currently') checked @endif> Not employed currently <br>
                                        <input class="radSpouse_Experience" name="spouse_experience" type="radio" value="Never employed" @if(old('spouse_experience') == 'Never employed') checked @endif> Never employed <br>
                                        <input name="spouse_experience" class="radSpouse_Experience" type="radio" value="NA" @if(old('spouse_experience') == 'NA') checked @endif> NA
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                </div>
                            </template>
                            <template x-if="marital_status !== 'Never Married'">
                                <div class="col-md-4 divIfmarried divChildren">How many children do you have?<span class="spanHighlight">*</span>
                                    <select id="txtHow_many_Children" class="form-control col-12" name="no_of_children">
                                        <option value="0"  @if(old('no_of_children') == '0') selected @endif>0</option>
                                        <option value="1" @if(old('no_of_children') == '1') selected @endif>1</option>
                                        <option value="2" @if(old('no_of_children') == '2') selected @endif>2</option>
                                        <option value="3" @if(old('no_of_children') == '3') selected @endif>3</option>
                                        <option value="4" @if(old('no_of_children') == '4') selected @endif>4</option>
                                        <option value="5" @if(old('no_of_children') == '5') selected @endif>5</option>
                                        <option value="6" @if(old('no_of_children') == '6') selected @endif>6</option>
                                        <option value="7" @if(old('no_of_children') == '7') selected @endif>7</option>
                                        <option value="8" @if(old('no_of_children') == '8') selected @endif>8</option>
                                        <option value="9" @if(old('no_of_children') == '9') selected @endif>9</option>
                                        <option value="10" @if(old('no_of_children') == '10') selected @endif>10</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>




                                <div class="col-md-12 divIfmarried divChildren">Do you have children less than 22 years of age? You can include them in your PR application<span class="spanHighlight">*</span><br>
                                    <input class="radDo_you_have_Children_less_than_22_years_of_age " name="children_lt_20" type="radio" value="Yes" @if(old('children_lt_20') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                    <input class="radDo_you_have_Children_less_than_22_years_of_age" name="children_lt_20" type="radio" value="No" @if(old('children_lt_20') == 'No') checked @endif> No &nbsp;&nbsp;
                                    <br><br>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 divIfmarried divChildren">Do you have children enrolled in accredited Canadian education institution/s and are actively pursuing academic, professional or vocational training on a full-time basis? <span class="spanHighlight">*</span><br>
                                    <input
                                        class="radDo_you_have_children_enrolled_in_accredited_Canadian_education_institutions"
                                        name="children_enrolled" type="radio"
                                        value="Yes" @if(old('children_enrolled') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                    <input
                                        class="radDo_you_have_children_enrolled_in_accredited_Canadian_education_institutions"
                                        name="children_enrolled" type="radio"
                                        value="No" @if(old('children_enrolled') == 'No') checked @endif> No &nbsp;&nbsp; <br> <br></div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 divIfmarried divChildren">Do you have any of your children who are Canadian citizens or permanent residents of Canada? <span class="spanHighlight">*</span><br>
                                    <input class="radDo_you_have_any_of_your_children_who_are_Canadian_citizens_or_permanent_residents_of_Canada"
                                           name="children_canadian" type="radio"
                                           value="Yes" @if(old('children_canadian') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                    <input class="radDo_you_have_any_of_your_children_who_are_Canadian_citizens_or_permanent_residents_of_Canada"
                                           name="children_canadian" type="radio"
                                           value="No" @if(old('children_canadian') == 'No') checked @endif> No &nbsp;&nbsp; <br> <br></div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 divIfmarried divChildren">Do you, your spouse
                                    or your children have a physical or mental disorder that requires medical
                                    attention?<span class="spanHighlight">*</span><br>
                                    <input class="radDo_you_your_spouse_or_your_children_have_a_physical_or_mental_disorder"
                                           name="spouse_children_mental"
                                           type="radio" value="Yes" @if(old('spouse_children_mental') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                    <input class="radDo_you_your_spouse_or_your_children_have_a_physical_or_mental_disorder"
                                           name="spouse_children_mental"
                                           type="radio" value="No" @if(old('spouse_children_mental') == 'No') checked @endif> No &nbsp;&nbsp; <br> <br>
                                </div>
                            </template>
                            <div class="clearfix"></div>

                            <template x-if="marital_status !== 'Never Married'">
                                <!-- changes done 23-08-2022 -->
                                <div id="txtChildrenage" class="col-md-4">How old are your children? <span class="spanHighlight">*</span>  <input value="{{old('children_age')}}"  type="text" class="form-control col-12"  name="children_age" /></div>
                            </template>

                            <div class="clearfix"></div>
                            <template x-if="marital_status !== 'Never Married'">
                                <div id="is_children_on_study_permit" class="col-md-6"> Are any of your children studying in Canada at this time on a study permit?<span class="spanHighlight">*</span><br>
                                    <input  name="is_children_on_study_permit" @if(old('is_children_on_study_permit') == 'Yes') checked @endif class="radAre_you_Currently_In_Canada" type="radio" value="Yes">Yes &nbsp;&nbsp;  <input @if(old('is_children_on_study_permit') == 'No') checked @endif  name="is_children_on_study_permit"  class="radAre_you_Currently_In_Canada" name=" " type="radio" value="No">No &nbsp;&nbsp; </div>
                            </template>
                            <div class="clearfix"></div>

                            <!-- end changes -->

                            <br>
                            <div class="col-md-6"><strong>4.</strong> Are you currently in Canada ?<span class="spanHighlight">*</span>
                                <br>
                                <input name="in_canada" class="radAre_you_Currently_In_Canada" type="radio" value="Yes" @if(old('in_canada') == 'Yes') checked @endif> Yes &nbsp;&nbsp
                                <input class="radAre_you_Currently_In_Canada" name="in_canada" type="radio" value="No" @if(old('in_canada') == 'No') checked @endif> No &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>




                            <!-- changes done 23-08-2022 -->

                            <br>
                            <div class="col-md-6"><strong>5.</strong> Did you ever visit Canada?<span class="spanHighlight">*</span><br>
                                <input name="Did_you_ever_visit_Canada" @if(old('Did_you_ever_visit_Canada') == 'Yes') checked @endif  class="radDid_you_ever_visit_Canada" type="radio" value="Yes">Yes &nbsp;&nbsp;  <input @if(old('Did_you_ever_visit_Canada') == 'No') checked @endif class="radDid_you_ever_visit_Canada" name="Did_you_ever_visit_Canada" type="radio" value="No">No &nbsp;&nbsp; </div>
                            <div class="clearfix"></div>
                            <br>

                            <div id="divIfyesVisitinCanada" class="col-md-4">If Yes, when? <span class="spanHighlight">*</span>  <input  value="{{old('if_yes_visited_canada_when')}}" type="date" class="form-control col-12"  name="if_yes_visited_canada_when" /></div>
                            <div class="clearfix"></div>
                            <br>



                            <div class="col-md-6"><strong>6.</strong> Is your Canadian Temporary Residence Visa or any other visa currently valid?<span class="spanHighlight">*</span><br>
                                <input name="is_currently_have_valid_visa"  @if(old('is_currently_have_valid_visa') == 'Yes') checked @endif  class="Txtis_currently_have_valid_visa" type="radio" value="Yes">Yes &nbsp;&nbsp;  <input @if(old('is_currently_have_valid_visa') == 'No') checked @endif  class="Txtis_currently_have_valid_visa" name="is_currently_have_valid_visa" type="radio" value="No">No &nbsp;&nbsp; </div>
                            <div class="clearfix"></div>
                            <br>

                            <div id="divIfyesis_currently_have_valid_visa" class="col-md-4">If yes, till when? <span class="spanHighlight">*</span>  <input  value="{{old('your_current_visa_validity')}}"  type="date" class="form-control col-12"  maxlength="40" name="your_current_visa_validity" /></div>
                            <div class="clearfix"></div>
                            <br>

                            <!-- end changes -->


                            <br>
                            <div class="col-md-8"><strong>7.</strong> Please select which experience pertains to you<span class="spanHighlight">*</span><br>
                                <input class="chkExperience" name="experience" type="radio" value="Business Person" @if(old('experience') == 'Business Person') checked @endif> Business Person <br>
                                <input name="experience" class="chkExperience" type="radio" value="Senior Manager" @if(old('experience') == 'Senior Manager') checked @endif> Senior Manager <br>
                                <input name="experience" class="chkExperience" type="radio" value="Self Employed Artist" @if(old('experience') == 'Self Employed Artist') checked @endif> Self Employed Artist <br>
                                <input name="experience" class="chkExperience" type="radio" value="I am a professional and am willing to invest in a business in Canada" @if(old('experience') == 'I am a professional and am willing to invest in a business in Canada') checked @endif> I am a professional and am willing to invest in a business in Canada <br>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>8.</strong> What area of business or management experience have you acquired in the past 10 years (you can select more than one option)<span class="spanHighlight">*</span><br>
                                <input class="radArea_of_business" name="area_of_business[]" type="checkbox" value="Manufacturing / trading"  @if(in_array('Manufacturing / trading',old('area_of_business',[]))) checked @endif> Manufacturing / trading <br>
                                <input name="area_of_business[]" type="checkbox" class="radArea_of_business" value="Only trading / Import / Export" @if(in_array('Only trading / Import / Export',old('area_of_business',[]))) checked @endif> Only trading / Import / Export <br>
                                <input name="area_of_business[]" type="checkbox" class="radArea_of_business" value="Project work (builder / Construction etc)" @if(in_array('Project work (builder / Construction etc)',old('area_of_business',[]))) checked @endif> Project work (builder / Construction etc) <br>
                                <input name="area_of_business[]" type="checkbox" class="radArea_of_business" value="Wholesale / Retail establishment" @if(in_array('Wholesale / Retail establishment',old('area_of_business',[]))) checked @endif> Wholesale / Retail establishment <br>
                                <input name="area_of_business[]" class="radArea_of_business" type="checkbox" value="Information Techlology" @if(in_array('Information Techlology',old('area_of_business',[]))) checked @endif> Information Techlology <br>
                                <input name="area_of_business[]" type="checkbox" class="radArea_of_business" value="Consulting" @if(in_array('Consulting',old('area_of_business',[]))) checked @endif> Consulting <br>
                                <input name="area_of_business[]" class="radArea_of_business" type="checkbox" value="Other" @if(in_array('Other',old('area_of_business',[]))) checked @endif> Other <br>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12">Briefly describe product/commodity you deal in your business<span class="spanHighlight">*</span>
                                <textarea id="texProduct_Description" name="product_description" cols="" rows="4" class="form-control">{{ old('product_description') }}</textarea>
                            </div>

                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>9.</strong> Certain business immigration programs allow two applicants to apply for permanent residence in Canada for the same project as long as both of the respective applicants meet the qualifying criteria of the program. Would you consider two applicants to apply under the entrepreneur stream in the same application?
                                <br>
                                <input class="" name="apply_same" type="radio" value="Yes" @if(old('apply_same') == 'Yes') checked @endif> Yes &nbsp;&nbsp;&nbsp;
                                <input class="" name="apply_same" type="radio" value="No, not applicable to me" @if(old('apply_same') == 'No, not applicable to me') checked @endif> No, not applicable to me
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>10.</strong> What is your education qualification?<span class="spanHighlight">*</span><br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Post graduate" @if(old('qualification') == 'Post graduate') checked @endif>Post graduate <br>
                                <input name="qualification" class="radEducational_Qualification" type="radio" value="Bachelors degree (15 years of education)" @if(old('qualification') == 'Bachelors degree (15 years of education)') checked @endif> Bachelors degree (15 years of education) <br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Did not complete Bachelors degree" @if(old('qualification') == 'Did not complete Bachelors degree') checked @endif> Did not complete Bachelors degree <br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Grade 12 education with at least one year diploma / certificate" @if(old('qualification') == 'Grade 12 education with at least one year diploma / certificate') checked @endif> Grade 12 education with at least one year diploma / certificate <br>
                                <input name="qualification" class="radEducational_Qualification" type="radio" value="Grade 12 (Secondary school) completed" @if(old('qualification') == 'Grade 12 (Secondary school) completed') checked @endif> Grade 12 (Secondary school) completed <br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Grade 10 completed" @if(old('qualification') == 'Grade 10 completed') checked @endif> Grade 10 completed <br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Grade 10 not completed" @if(old('qualification') == 'Grade 10 not completed') checked @endif> Grade 10 not completed <br>
                                <input class="radEducational_Qualification" name="qualification" type="radio" value="Other" @if(old('qualification') == 'Other') checked @endif> Other &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>

                            <!-- changes done 23-08-2022 -->
                            <br>
                            <div class="col-md-6"><strong>11.</strong> Do you have your educational documents to prove your education identified above?<span class="spanHighlight">*</span><br>
                                <input @if(old('have_your_educational_documents_to_prove') == 'Yes') checked @endif name="have_your_educational_documents_to_prove"  class="radAre_you_Currently_In_Canada" type="radio" value="Yes">Yes &nbsp;&nbsp;  <input @if(old('have_your_educational_documents_to_prove') == 'No') checked @endif class="radAre_you_Currently_In_Canada" name="have_your_educational_documents_to_prove" type="radio" value="No">No &nbsp;&nbsp; </div>
                            <div class="clearfix"></div>
                            <br>

                            <!-- end changes -->

                            <br>
                            <div class="col-md-12"><strong>12.</strong> Have you been ordered to leave Canada or any other country?<span
                                    class="spanHighlight">*</span><br>
                                <input class="radHave_you_been_ordered_to_leave_Canada_or_any_other_country"
                                       name="leave_canada" type="radio" value="Yes" @if(old('leave_canada') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radHave_you_been_ordered_to_leave_Canada_or_any_other_country"
                                       name="leave_canada" type="radio" value="No" @if(old('leave_canada') == 'No') checked @endif> No &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>13.</strong> Have you ever committed, been arrested for, or been charged with any
                                offense in any country, including driving under the influence of alcohol or drugs?<span
                                    class="spanHighlight">*</span><br>
                                <input
                                    class="radHave_you_ever_committed_been_arrested_for_or_been_charged_with_any_offense_in_any_country"
                                    name="arrested" type="radio" value="Yes" @if(old('arrested') == 'Yes') checked @endif> Yes
                                &nbsp;&nbsp; <input
                                    class="radHave_you_ever_committed_been_arrested_for_or_been_charged_with_any_offense_in_any_country"
                                    name="arrested" type="radio" value="No" @if(old('arrested') == 'No') checked @endif> No &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>14.</strong> Have you ever been in the military (including mandatory service), a
                                militia, or a civil defense unit or the police?<span class="spanHighlight">*</span><br>
                                <input class="radHave_you_ever_been_in_the_military_including_mandatory_service_a_militia_or_a_civil_defense_unit_or_the_police"
                                       name="in_military"
                                       type="radio" value="Yes" @if(old('in_military') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radHave_you_ever_been_in_the_military_including_mandatory_service_a_militia_or_a_civil_defense_unit_or_the_police"
                                       name="in_military"
                                       type="radio" value="No" @if(old('in_military') == 'No') checked @endif> No &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>15.</strong> Have you ever been employed by a government in a security-related
                                capacity?<span class="spanHighlight">*</span><br>
                                <input class="radHave_you_ever_been_employed_by_a_government_in_a_security_related_capacity"
                                       name="employed_in_security" type="radio" value="Yes" @if(old('employed_in_security') == 'Yes') checked @endif> Yes
                                &nbsp;&nbsp;
                                <input class="radHave_you_ever_been_employed_by_a_government_in_a_security_related_capacity"
                                       name="employed_in_security" type="radio" value="No" @if(old('employed_in_security') == 'No') checked @endif> No
                                &nbsp;&nbsp;
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>16.</strong> Have you visited other countries within the last 10 years?<span
                                    class="spanHighlight">*</span><br>
                                <input class="radHave_you_visited_other_countries_within_the_last_10_years"
                                       name="visited_in_10_years" type="radio" x-model="visited_in_10_years" value="Yes" @if(old('visited_in_10_years') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radHave_you_visited_other_countries_within_the_last_10_years"
                                       name="visited_in_10_years" type="radio" x-model="visited_in_10_years" value="No" @if(old('visited_in_10_years') == 'No') checked @endif> No &nbsp;&nbsp;
                            </div>
                            <template x-if="visited_in_10_years == 'Yes'">
                                <div class="col-md-12 divListofcountriesvisited">
                                    If Yes, please type the countries below (comma separated)
                                    <textarea id="txtlist_of_countries_visited" name="visited_countries" cols="" rows="4" class="form-control col-12">{{ old('visited_countries') }}</textarea>
                                </div>
                            </template>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>17.</strong> Do you or your spouse have blood relatives in Canada<span
                                    class="spanHighlight">*</span><br>
                                <input class="radDo_you_or_your_spouse_have_Blood_relatives_in_Canada" x-model="spouse_have_relatives" name="spouse_have_relatives" type="radio" value="Yes" @if(old('spouse_have_relatives') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radDo_you_or_your_spouse_have_Blood_relatives_in_Canada" x-model="spouse_have_relatives" name="spouse_have_relatives" type="radio" value="No" @if(old('spouse_have_relatives') == 'No') checked @endif> No
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <template x-if="spouse_have_relatives == 'Yes'">
                                <div class="col-md-12 divProvincerelativesReside">If yes, please state the province they reside in (you can select more than one)<span class="spanHighlight">*</span><br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state[]" type="checkbox"
                                           @if(in_array('British Columbia', old('spouse_relative_state',[]))) checked @endif
                                           value="British Columbia"> British Columbia <br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state[]" type="checkbox"
                                           @if(in_array('Alberta', old('spouse_relative_state',[]))) checked @endif
                                           value="Alberta">Alberta <br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state[]" type="checkbox"
                                           @if(in_array('Saskatchewan', old('spouse_relative_state',[]))) checked @endif
                                           value="Saskatchewan">Saskatchewan <br>
                                    <input name="spouse_relative_state[]"
                                           class="radIf_yes_State_the_province_they_reside" type="checkbox"
                                           @if(in_array('Manitoba', old('spouse_relative_state',[]))) checked @endif
                                           value="Manitoba"> Manitoba <br>
                                    <input name="spouse_relative_state[]"
                                           class="radIf_yes_State_the_province_they_reside" type="checkbox"
                                           @if(in_array('Ontario', old('spouse_relative_state',[]))) checked @endif
                                           value="Ontario">Ontario <br>
                                    <input name="spouse_relative_state[]"
                                           class="radIf_yes_State_the_province_they_reside" type="checkbox"
                                           @if(in_array('Quebec', old('spouse_relative_state',[]))) checked @endif
                                           value="Quebec">Quebec <br>
                                    <input name="spouse_relative_state[]"
                                           class="radIf_yes_State_the_province_they_reside" type="checkbox"
                                           @if(in_array('Nova Scotia', old('spouse_relative_state',[]))) checked @endif
                                           value="Nova Scotia"> Nova Scotia <br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state[]" type="checkbox"
                                           @if(in_array('New Brunswick', old('spouse_relative_state',[]))) checked @endif
                                           value="New Brunswick">New Brunswick <br>
                                    <input name="spouse_relative_state[]"
                                           class="radIf_yes_State_the_province_they_reside" type="checkbox"
                                           @if(in_array('Prince Edward Island', old('spouse_relative_state',[]))) checked @endif
                                           value="Prince Edward Island"> Prince Edward Island <br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state[]" type="checkbox"
                                           @if(in_array('Newfoundland', old('spouse_relative_state',[]))) checked @endif
                                           value="Newfoundland &amp; Labrador"> Newfoundland &amp; Labrador <br>
                                    <input class="radIf_yes_State_the_province_they_reside"
                                           name="spouse_relative_state]" type="checkbox"
                                           @if(in_array('My spouse or myself do not have any blood relatives residing in Canada', old('spouse_relative_state',[]))) checked @endif
                                           value="My spouse or myself do not have any blood relatives residing in Canada">My spouse or myself do not have any blood relatives residing in Canada &nbsp;&nbsp;
                                </div>
                            </template>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>18.</strong> Have you ever visited Canada ?<span
                                    class="spanHighlight">*</span><br>
                                <input class="txtHave_you_Visited_Canada" x-model="visited_canada" name="visited_canada" type="radio" value="Yes" @if(old('visited_canada') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="txtHave_you_Visited_Canada" x-model="visited_canada" name="visited_canada" type="radio" value="No" @if(old('visited_canada') == 'No') checked @endif> No
                            </div>
                            <div class="clearfix"></div>
                            <template x-if="visited_canada == 'Yes'">
                                <div class="col-md-12 divVisitedLast2years">Did you visit Canada in
                                    the last 2 years?<span class="spanHighlight">*</span><br>
                                    <input class="txtHave_you_Visited_Canada_in_last_2_years" x-model="visited_in_2" name="visited_in_2" type="radio" value="Yes" @if(old('visited_in_2') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                    <input class="txtHave_you_Visited_Canada_in_last_2_years" x-model="visited_in_2" name="visited_in_2" type="radio" value="No" @if(old('visited_in_2') == 'No') checked @endif> No
                                </div>
                            </template>
                            <div class="clearfix"></div>
                            <br>
                            <template x-if="visited_in_2 == 'Yes'">
                                <div class="col-md-12 divProvincesVisitedlast2years">If yes, please
                                    state the provinces visited (you can select more than one)<br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('British Columbia', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="British Columbia"> British Columbia <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Alberta', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Alberta"> Alberta <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Saskatchewan', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Saskatchewan"> Saskatchewan <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Manitoba', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Manitoba"> Manitoba <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Ontario', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Ontario"> Ontario <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Quebec', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Quebec"> Quebec <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Nova Scotia', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Nova Scotia"> Nova Scotia <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('New Brunswick', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="New Brunswick"> New Brunswick <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Prince Edward Island', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Prince Edward Island"> Prince Edward Island <br>
                                    <input class="chkif_yes_last_visted_Provinces" name="provinces_visited[]"
                                           @if(in_array('Newfoundland', old('provinces_visited',[]))) checked @endif
                                           type="checkbox" value="Newfoundland &amp; Labrador"> Newfoundland &amp; Labrador
                                </div>
                            </template>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12 divParentVisatoCanadarefusedDetail"><strong>19.</strong> Has your visa to Canada ever been refused?<span class="spanHighlight"></span><br>
                                <input class="radHas_your_Visa_to_Canada_ever_been_refused"
                                       name="visa_refused" x-model="visa_refused" type="radio" value="Yes" @if(old('visa_refused') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radHas_your_Visa_to_Canada_ever_been_refused"
                                       name="visa_refused" x-model="visa_refused" type="radio" value="No" @if(old('visa_refused') == 'No') checked @endif> No <br>
                                <template x-if="visa_refused == 'Yes'">
                                    <div class="divVisatoCanadarefusedDetail">
                                        If Yes, please provide when and related details
                                        <input id="txtVisa_to_Canada_ever_been_refused_detail"
                                               name="visa_refused_details" type="text"
                                               class="form-control" value="{{ old('visa_refused_details') }}">
                                    </div>
                                </template>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>20.</strong> Between you and your spouse, please calculate the total value of your
                                assets, including movable, immovable property/properties, cash in the bank, mutual
                                funds, fixed deposits, etc. Please calculate in Canadian dollars. If you wish to convert
                                from any currency to Canadian dollars, please visit www.xe.com. Please remember to
                                include and assess only those assets that are in your and your spouse’s name.
                                <span class="spanHighlight">*</span><br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       name="assets" type="radio"
                                       @if(old('assets') == '$100,000 to $150,000') checked @endif
                                       value="$100,000 to $150,000"> $100,000 to $150,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$150,000 to $200,000') checked @endif
                                       name="assets" type="radio"
                                       value="$150,000 to $200,000"> $150,000 to $200,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$200,000 to $250,000') checked @endif
                                       name="assets" type="radio"
                                       value="$200,000 to $250,000"> $200,000 to $250,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$250,000 to $300,000') checked @endif
                                       name="assets" type="radio"
                                       value="$250,000 to $300,000"> $250,000 to $300,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$300,000 to $350,000') checked @endif
                                       name="assets" type="radio"
                                       value="$300,000 to $350,000"> $300,000 to $350,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$350,000 to $400,000') checked @endif
                                       name="assets" type="radio"
                                       value="$350,000 to $400,000"> $350,000 to $400,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$400,000 to $450,000') checked @endif
                                       name="Bassets" type="radio"
                                       value="$400,000 to $450,000"> $400,000 to $450,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$450,000 to $500,000') checked @endif
                                       name="assets" type="radio"
                                       value="$450,000 to $500,000"> $450,000 to $500,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$500,000 to $550,000') checked @endif
                                       name="assets" type="radio"
                                       value="$500,000 to $550,000"> $500,000 to $550,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$550,000 to $600,000') checked @endif
                                       name="assets" type="radio"
                                       value="$550,000 to $600,000"> $550,000 to $600,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$650,000 to $700,000') checked @endif
                                       name="assets" type="radio"
                                       value="$650,000 to $700,000"> $650,000 to $700,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$700,000 to $750,000') checked @endif
                                       name="assets" type="radio"
                                       value="$700,000 to $750,000"> $700,000 to $750,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$750,000 to $800,000') checked @endif
                                       name="assets" type="radio"
                                       value="$750,000 to $800,000"> $750,000 to $800,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$800,000 to $850,000') checked @endif
                                       name="assets" type="radio"
                                       value="$800,000 to $850,000"> $800,000 to $850,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$850,000 to $900,000') checked @endif
                                       name="assets" type="radio"
                                       value="$850,000 to $900,000"> $850,000 to $900,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$900,000 to $950,000') checked @endif
                                       name="assets" type="radio"
                                       value="$900,000 to $950,000"> $900,000 to $950,000 <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$950,000 to $1 million') checked @endif
                                       name="assets" type="radio"
                                       value="$950,000 to $1 million"> $950,000 to $1 million <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$1 million to $2 million') checked @endif
                                       name="assets" type="radio"
                                       value="$1 million to $2 million"> $1 million to $2 million <br>
                                <input class="radTotal_value_of_you_and_your_spouse_assets"
                                       @if(old('assets') == '$2 million and up') checked @endif
                                       name="assets" type="radio"
                                       value="$2 million and up">$2 million and up
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12"><strong>21.</strong> Funds available to invest in Canada from the total net-worth you reported above.:<span class="spanHighlight">*</span><br>
                                <input class="radEducational_Qualification" name="funds_available" type="radio" value="$150,000 - $250,000" @if(old('funds_available') == '$150,000 - $250,000') checked @endif> $150,000 - $250,000 <br>
                                <input name="funds_available" class="radEducational_Qualification" type="radio" value="$250,000 - $300,000" @if(old('funds_available') == '$250,000 - $300,000') checked @endif> $250,000 - $300,000 <br>
                                <input class="radEducational_Qualification" name="funds_available" type="radio" value="$300,000 - $350,000" @if(old('funds_available') == '$300,000 - $350,000') checked @endif> $300,000 - $350,000 <br>
                                <input class="radEducational_Qualification" name="funds_available" type="radio" value="$500,000 to $1 million" @if(old('funds_available') == '$500,000 to $1 million') checked @endif> $500,000 to $1 million <br>
                                <input name="funds_available" class="radEducational_Qualification" type="radio" value="Above $1 million" @if(old('funds_available') == 'Above $1 million') checked @endif> Above $1 million <br>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>22.</strong> Have you taken English proficiency test (IELTS or CELPIP) ?<span
                                    class="spanHighlight">*</span><br>
                                <input class="radHave_you_taken_English_Proficiency_test" x-model="taken_english_test" name="taken_english_test" type="radio" value="Yes" @if(old('taken_english_test') == 'Yes') checked @endif> Yes &nbsp;&nbsp;
                                <input class="radHave_you_taken_English_Proficiency_test" x-model="taken_english_test" name="taken_english_test" type="radio" value="No" @if(old('taken_english_test') == 'No') checked @endif> No
                            </div>
                            <div class="clearfix"></div>
                            <template x-if="taken_english_test == 'Yes'">
                                <div class="col-md-12 divEnglishproficiencyTesttaken">If yes, what is
                                    your score in <br>
                                    <div class="col-md-6">
                                        Reading
                                        <input type="text"
                                               id="txtIf_yes_what_is_your_score_in_Reading" class="form-control col-12"
                                               value="{{ old('reading') }}"
                                               name="reading">
                                        Writing
                                        <input type="text"
                                               id="txtIf_yes_what_is_your_score_in_Writing" class="form-control col-12"
                                               value="{{ old('writing') }}"
                                               name="writing">
                                    </div>
                                    <div class="col-md-6">
                                        Speaking
                                        <input type="text"
                                               id="txtIf_yes_what_is_your_score_in_Speaking" class="form-control col-12"
                                               value="{{ old('speaking') }}"
                                               name="speaking">
                                        Listening
                                        <input type="text"
                                               id="txtIf_yes_what_is_your_score_in_Listening" class="form-control col-12"
                                               value="{{ old('listening') }}"
                                               name="listening">
                                    </div>
                                </div>
                            </template>
                            <div class="clearfix"></div>
                            <div class="col-md-12 divEnglishtestnotTaken">If you have not taken an English proficiency
                                test, how do you rate your English language proficiency?<br>
                                <input class="radIf_not_taken_proficiency_test_rate_your_English_language_proficiency"
                                       name="language_proficiency" type="radio" value="Very Good / Fluent" @if(old('language_proficiency') == 'Very Good / Fluent') checked @endif> Very
                                Good / Fluent <br>
                                <input name="language_proficiency"
                                       class="radIf_not_taken_proficiency_test_rate_your_English_language_proficiency"
                                       type="radio" value="Moderate to Good" @if(old('language_proficiency') == 'Moderate to Good') checked @endif> Moderate to Good <br>
                                <input class="radIf_not_taken_proficiency_test_rate_your_English_language_proficiency"
                                       name="language_proficiency" type="radio" value="With difficulty" @if(old('language_proficiency') == 'With difficulty') checked @endif> With
                                difficulty
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12"><strong>Do you have any queries ?</strong><br>
                                <textarea id="texComments_and_Questions" name="queries" cols="" rows="4"
                                          class="form-control col-12">{{ old('queries') }}</textarea>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12">I am planning to relocate / start the immigration process:<span class="spanHighlight">*</span><br>
                                <input name="planning_to_start" class="radEducational_Qualification" type="radio" value="Immediately" @if(old('planning_to_start') == 'Immediately') checked @endif> Immediately <br>
                                <input class="radEducational_Qualification" name="planning_to_start" type="radio" value="In 6 months" @if(old('planning_to_start') == 'In 6 months') checked @endif> In 6 months <br>
                                <input class="radEducational_Qualification" name="planning_to_start" type="radio" value="Not decided yet" @if(old('planning_to_start') == 'Not decided yet') checked @endif> Not decided yet <br>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-12">I intend to move to Canada in:<span class="spanHighlight">*</span><br>
                                <input name="intend_to_move" class="radEducational_Qualification" type="radio" value="Immediately" @if(old('intend_to_move') == 'Immediately') checked @endif> Immediately <br>
                                <input class="radEducational_Qualification" name="intend_to_move" type="radio" value="6 months from now" @if(old('intend_to_move') == '6 months from now') checked @endif> 6 months from now <br>
                                <input class="radEducational_Qualification" name="intend_to_move" type="radio" value="1 year from now" @if(old('intend_to_move') == '1 year from now') checked @endif> 1 year from now <br>
                                <input class="radEducational_Qualification" name="intend_to_move" type="radio" value="2 years from now" @if(old('intend_to_move') == '2 years from now') checked @endif> 2 years from now <br>
                                <input class="radEducational_Qualification" name="intend_to_move" type="radio" value="Not decided yet" @if(old('intend_to_move') == 'Not decided yet') checked @endif> Not decided yet <br>
                            </div>
                            <div class="clearfix"></div>

                            <!-- changes done 23-08-2022 -->
                            <br>
                            <div class="col-md-6"><strong>23.</strong> Have you obtained an official assessment of your education by applying for an Education Credentials Assessment (ECA)?<span class="spanHighlight">*</span><br>
                                <input @if(old('have_you_obtained_educational_credentials_assessment') == 'Yes') checked @endif name="have_you_obtained_educational_credentials_assessment"  class="radAre_you_Currently_In_Canada" type="radio" value="Yes">Yes &nbsp;&nbsp;  <input @if(old('have_you_obtained_educational_credentials_assessment') == 'No') checked @endif class="radAre_you_Currently_In_Canada" name="have_you_obtained_educational_credentials_assessment" type="radio" value="No">No &nbsp;&nbsp; </div>
                            <div class="clearfix"></div>
                            <br>

                            <!-- end changes -->


                            <br>
                            <div class="col-md-12"><strong>24. I am interested in the following Canada's business immigration / business work permit programs (you can select one or more options)<span class="spanHighlight">*</span></strong><br>
                                <!-- changes done 04-02-2022 -->
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('I have experience in operating my business / have experience as a Senior Manager in a company and wish to start a business in Canada under ‘C-11’ Entrepreneur stream which is LMIA exempt.', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="I have experience in operating my business / have experience as a Senior Manager in a company and wish to start a business in Canada under ‘C-11’ Entrepreneur stream which is LMIA exempt.">
                                I have experience in operating my business / have experience as a Senior Manager in a company and wish to start a business in Canada under ‘C-11’ Entrepreneur stream which is LMIA exempt.<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('My current company is well established outside of Canada and intends to transfer me to Canada by setting up its branch / subsidiary in Canada', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="My current company is well established outside of Canada and intends to transfer me to Canada by setting up its branch / subsidiary in Canada">
                                My current company is well established outside of Canada and intends to transfer me to
                                Canada by setting up its branch / subsidiary in Canada<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('My business, if established in Canada,  can bring economic / social / cultural benefits to Canada and create jobs and economic stimulus.', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="My business, if established in Canada,  can bring economic / social / cultural benefits to Canada and create jobs and economic stimulus.">
                                My business, if established in Canada, can bring economic / social / cultural benefits
                                to Canada and create jobs and economic stimulus.<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('Buy a running business in Canada', old('interests',[]))) checked @endif
                                       type="checkbox" value="Buy a running business in Canada"> Buy a running business
                                in Canada<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('Canada Star-Up Visa leading to permanent residence in Canada by bringing  introducing a unique business idea', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="Canada Star-Up Visa leading to permanent residence in Canada by bringing  introducing a unique business idea">
                                Canada Star-Up Visa leading to permanent residence in Canada by bringing introducing a
                                unique business idea<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('I also acknowledge this is not an employment visa or I am not applying for a job based LMIA as a skilled worker.', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="I also acknowledge this is not an employment visa or I am not applying for a job based LMIA as a skilled worker.">
                                I also acknowledge this is not an employment visa or I am not applying for a job based
                                LMIA as a skilled worker.<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('I fully understand that by completing this questionnaire, I am not applying for a job or skilled workers-related LMIA in Canada. I very well understand that this is a Business Immigration / Business related Work Permit assessment form and not for assessing my application as a skilled worker.', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="I fully understand that by completing this questionnaire, I am not applying for a job or skilled workers-related LMIA in Canada. I very well understand that this is a Business Immigration / Business related Work Permit assessment form and not for assessing my application as a skilled worker.">
                                I fully understand that by completing this questionnaire, I am not applying for a job or skilled workers-related LMIA in Canada. I very well understand that this is a Business Immigration / Business related Work Permit assessment form and not for assessing my application as a skilled worker.<br>
                                <br>
                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('My inquiry is serious and pertains to setting up a business through investment in Canada and by completing this questionnaire I  wish to explore business options and opportunities only.', old('interests',[]))) checked @endif
                                       type="checkbox"
                                       value="My inquiry is serious and pertains to setting up a business through investment in Canada and by completing this questionnaire I  wish to explore business options and opportunities only.">
                                My inquiry is serious and pertains to setting up a business through investment in Canada
                                and by completing this questionnaire I wish to explore business options and
                                opportunities only.<br>
                                <br>

                                <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('Please ensure to retain the services of a legal Practitioner who is a licensed and accredited member in good standing of the CICC (College of Immigration & Citizenship Consultants, Canada) or an accredited Member of the Canadian Bar Association.
                                ', old('interests',[]))) checked @endif
                                       type="checkbox" value="Please ensure to retain the services of a legal Practitioner who is a licensed and accredited member in good standing of the CICC (College of Immigration & Citizenship Consultants, Canada) or an accredited Member of the Canadian Bar Association.
                                ">
                                Please ensure to retain the services of a legal Practitioner who is a licensed and accredited member in good standing of the CICC (College of Immigration & Citizenship Consultants, Canada) or an accredited Member of the Canadian Bar Association.
                                <br>
                                <br>
                                <span class="spanHighlight">NOTE:


IT IS ILLEGAL TO HIRE SERVICES OF A NON-LICENSED REPRESENTATIVE WHO POSES TO REPRESENT YOU WITH THE GOVERNMENT OF CANADA.</span>
                                <br>
                                <!-- <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('I would like to consider a Business Franchise in Canada', old('interests',[]))) checked @endif
                                type="checkbox" value="I would like to consider a Business Franchise in Canada">
                         I would like to consider a Business Franchise in Canada<br>
                         <br> -->
                                <!-- <input class="chkCanada_business_immigration_Type" name="interests[]"
                                       @if(in_array('I am open to discuss all the possible options', old('interests',[]))) checked @endif
                                type="checkbox" value="I am open to discuss all the possible options"> I am open
                         to discuss all the possible options.<br>
                         <br>-->
                                <!-- end changes -->
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <center>
                                <div class="g-recaptcha" data-sitekey="{{config('app.recaptcha_key')}}"></div>
                                <br>
                                <input type="submit" value="Submit" class="btn">
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('businessform', () => ({
                marital_status: '{{ old('marital_status','') }}',
                visited_in_10_years: '{{ old('visited_in_10_years','') }}',
                spouse_have_relatives: '{{ old('spouse_have_relatives','') }}',
                visited_canada: '{{ old('visited_canada','') }}',
                visited_in_2: '{{ old('visited_in_2','') }}',
                taken_english_test: '{{ old('taken_english_test','') }}',
                visa_refused: '{{ old('visa_refused','') }}',
                init() {
                    this.$watch('visited_canada', value => {
                        if(value === 'No') {
                            this.visited_in_2 = null
                        }
                    })
                }
            }))
        })
    </script>

</x-layouts.frontend>
