<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BusinessApplicationCopyMail;
use App\Mail\BusinessApplicationMail;
use App\Models\Country;
use App\Models\FormSubmission;
use App\Models\FormType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BusinessImmigrationController extends Controller
{
    public function form()
    {
        return view('frontend.business-immigration-form',[
            'countries' => Country::select('name')->get()
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'city_of_residence' => 'required',
            'nationality' => 'required',
            'in_canada' => 'required',
            'Did_you_ever_visit_Canada'=>'required',
            'if_yes_visited_canada_when' => 'required_if:Did_you_ever_visit_Canada,Yes',
            'is_currently_have_valid_visa' => 'required_if:in_canada,Yes',
            'your_current_visa_validity'=>'required_if:is_currently_have_valid_visa,Yes',
            'experience' => 'required',
            'area_of_business' => 'required',
            'product_description' => 'required',
            'qualification' => 'required',
            'have_your_educational_documents_to_prove'=>'required',
            'dob' => 'required',
            'marital_status' => 'required',
            'spouse_dob' => 'required_if:marital_status,Married',
            'no_of_children' => 'required_unless:marital_status,Never Married',
            'children_age' =>'required_if:no_of_children,>=,1',
            'is_children_on_study_permit' => 'required_if:no_of_children,>=,1',
            'leave_canada' => 'required',
            'arrested' => 'required',
            'in_military' => 'required',
            'employed_in_security' => 'required',
            'visited_in_10_years' => 'required',
            'spouse_have_relatives' => 'required',
            'spouse_relative_state' => 'required_if:spouse_have_relatives,Yes',
            'visited_canada' => 'required',
            'visited_in_2' => 'required_if:visited_canada,Yes',
            'provinces_visited' => 'required_if:visited_in_2,Yes',
            'visa_refused' => 'required',
            'assets' => 'required',
            'taken_english_test' => 'required',
            'have_you_obtained_educational_credentials_assessment'=>'required',
            'interests' => 'required',
            'g-recaptcha-response' => 'required',
            'apply_same' => 'required',
        ],[
            'in_canada.required' => 'Please specify whether you are in canada or not',
            'Did_you_ever_visit_Canada.required' => 'Did you ever visited Canada?',
            'if_yes_visited_canada_when.required_if' => 'When you visited Canada?',
            'is_currently_have_valid_visa.required_if' => 'Do you have valid visa currently?',
            'your_current_visa_validity.required_if'=>'You Current visa Validity',
            'experience.required' => 'Please state your experience',
            'area_of_business.required' => 'Please select at least one of area of business or management experience',
            'product_description.required' => 'Please describe your product / commodity',
            'qualification.required' => 'Please select your educational qualification',
            'have_your_educational_documents_to_prove.required'=>'Do you have your Educational Documents to prove',
            'dob.required' => 'Please enter your date of birth',
            'marital_status.required' => 'Please specify your marital status',
            'spouse_dob.required_if' => 'Please enter your spouse\'s date of birth',
            'no_of_children.required_unless' => 'Please select how many children you have.',
            'children_age.required_if' => 'Please enter your children age',
            'is_children_on_study_permit.required_if' =>'Please select whether your children studying on permit',
            'leave_canada.required' => 'Please specify whether you have been ordered to leave Canada or any other country or not',
            'arrested.required' => 'Please specify whether you have been arrested or charged with any offence or not',
            'in_military.required' => 'Please specify whether you have ever been in the military (including mandatory service), a militia, or a civil defense unit or the police or not',
            'employed_in_security.required' => 'Please specify whether you have ever been employed by a government in a security-related capacity or not',
            'visited_in_10_years.required' => 'Please specify whether you have visited other countries within the last 10 years or not',
            'spouse_have_relatives.required' => 'Please specify whether you or your spouse have blood relatives in Canada or not',
            'visited_canada.required' => 'Please specify whether you have visited canada or not',
            'visited_in_2.required_if' => 'Please specify whether you visited Canada in the last 2 years',
            'provinces_visited.required_if' => 'Please select at least one province(s) you visited',
            'visa_refused.required_if' => 'Please specify whether your visa to Canada has ever been refused or not',
            'assets.required' => 'Please specify total value of assets between you and your spouse',
            'taken_english_test.required' => 'Please specify whether you have taken English proficiency test or not',
            'have_you_obtained_educational_credentials_assessment.required'=>'Have you Obtained Educational Credentials Assessment?',
            'interests.required' => 'Please select at least one of interests mentioned in the bottom of this form',
            'g-recaptcha-response.required' => 'Please check I\'m not robot box',
            'apply_same.required' => 'Please specify whether you consider two applicants to apply under the entrepreneur stream in the same application or not',
            'spouse_relative_state.required_if' => 'Please select the provinces(s) where your or your spouse\'s relatives reside in'
        ]);
        $validator->validate();

        $lastModel = FormSubmission::where('form_type_id',2)->orderBy('id','DESC')->first();

        $formType = FormType::where('id',2)->first();

        if($lastModel) {
            $client_id = $formType->shortname.str_pad(($lastModel->id + 1),4,'0',STR_PAD_LEFT);
        } else {
            $client_id = $formType->shortname.'0001';
        }
        $formSubmission = new FormSubmission();

        $formSubmission->client_id = $client_id;

        $formSubmission->form_type_id = $formType->id;

        $formData = $request->except([
            '_token',
            'submitted',
            'g-recaptcha-response'
        ]);

        $formSubmission->form_data = $formData;

        $formSubmission->save();

        Mail::to($request->input('mail'))
            ->bcc([
                'businessclient@just2canada.ca',
                'info@tastechnologies.com',
                'testing0415048@gmail.com'
            ])
            ->send(new BusinessApplicationMail($formSubmission));

        Mail::to($request->input('mail'))
            ->bcc([
                'businessclient@just2canada.ca',
                'info@tastechnologies.com',
                'testing0415048@gmail.com'
            ])
            ->send(new BusinessApplicationCopyMail($formSubmission));

        return Response::redirectToRoute('business-immigration.form')->with('success','Your form has been submitted successfully. We will contact you soon');
    }
}
