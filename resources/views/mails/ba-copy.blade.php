<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <style>
        body, .label, .value {
            font-family: Arial, Verdana;
        }

        .label {
            font-weight: bold;
            margin-top: 5px;
            font-size: 1em;
            color: #333;
        }

        td.px-6 {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }

        .value {
            margin-bottom: 15px;
            font-size: 1.0em;
            padding-left: 5px;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    </style>
</head>
<body>
<table align="center"
       style="background-color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:12px; border:1px solid #006; color:#000;"
       width="650">
    <tbody>
    <tr>
        <td align="center" style="padding:10px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                    <td align="center"><img src="https://just2canada.ca/images/logo.png"/></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <div></div>
        </td>
    </tr>
    <tr>
        <td style="padding:10px 20px" valign="top">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td style="background-color:#ececec;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000;padding:7px 0 6px 13px;text-transform:uppercase;border:1px solid #ececec;border-bottom:0px"
                        height="20">Detail:
                    </td>
                </tr>
                <tr>
                    <td style="padding:10px 10px;border:1px solid #ececec" bgcolor="#fff">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                            <tr>
                                <td width="80%" valign="top">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Your Client ID</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->client_id}}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Name</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['name'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Email</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%"><a href="{{ $data->form_data['email'] ?? '' }}" target="_blank">{{ $data->form_data['email'] ?? '' }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Phone</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['phone'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Country</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['country'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>City</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['city_of_residence'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Nationality</b>
                                            </td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['nationality'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Reference</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['reference'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Date of Birth</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['dob'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Marital Status</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['marital_status'] ?? '' }}</td>
                                        </tr>
                                        @if(isset($data->form_data['spouse_dob']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Spouse's Date of Birth</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ \Carbon\Carbon::parse($data->form_data['spouse_dob'])->toDateString() }}</td>
                                            </tr>
                                        @endif
                                        @if(isset($data->form_data['spouse_experience']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Spouse's Experience</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['spouse_experience'] }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>No. of Children</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['no_of_children'] ?? '' }}</td>
                                        </tr>
                                        @if(isset($data->form_data['children_lt_20']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Have children less than 22 years of age?</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['children_lt_20'] }}</td>
                                            </tr>
                                        @endif
                                        @if(isset($data->form_data['children_enrolled']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Have children enrolled in accredited Canadian education institution/s and are actively pursuing academic, professional or vocational training on a full-time basis?</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['children_enrolled'] }}</td>
                                            </tr>
                                        @endif
                                        @if(isset($data->form_data['children_canadian']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Have any of the applicant's children who are Canadian citizens or permanent residents of Canada?</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['children_canadian'] }}</td>
                                            </tr>
                                        @endif
                                        @if(isset($data->form_data['spouse_children_mental']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Do the applicant's spouse or their children have a physical or mental disorder that requires medical attention?</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['spouse_children_mental'] }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Currently
                                                    in Canada</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['in_canada'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Experience that applies to the applicant</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['experience']  ?? ''}}</td>
                                        </tr>
                                        @if(isset($data->form_data['area_of_business']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Area of business or management experience acquired in past 10 years</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">
                                                    <ul>
                                                        @foreach($data->form_data['area_of_business'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Will the applicant consider two applicants to apply under the entrepreneur stream in the same application?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['apply_same'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Educational Qualification</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['qualification'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Have ever ordered to leave Canada or any other country?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['leave_canada'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Have ever arrested for, or been charged with any offense in any country, including driving under the influence of alcohol or drugs?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['arrested'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Have ever been in the military including mandatory service a militia or a civil defense unit or the police</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['in_military'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Have ever been employed by a government</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['employed_in_security'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Visited other countries within the last 10 years?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['visited_in_10_years'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Visited Countries</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['visited_countries'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Blood relatives in Canada</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['spouse_have_relatives'] ?? '' }}</td>
                                        </tr>
                                        @if(isset($data->form_data['spouse_relative_state']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>If Yes, Province(s) they are in</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">
                                                    <ul>
                                                        @foreach($data->form_data['spouse_relative_state'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Ever visited Canada?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['visited_canada']  ?? ''}}</td>
                                        </tr>
                                        @if(isset($data->form_data['visited_in_2']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Visited Canada in last 2 years?</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['visited_in_2']  ?? ''}}</td>
                                            </tr>
                                        @endif
                                        @if(isset($data->form_data['provinces_visited']))
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>If Yes, Province(s) visited</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">
                                                    <ul>
                                                        @foreach($data->form_data['provinces_visited'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Visa to Canada ever been refused</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['visa_refused'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Visa to Canada ever been refused detail</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['visa_refused_details'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Between you and your spouse Assets</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['assets'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Funds Available to invest in canada</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['funds_available'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Taken english proficiency test?</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['taken_english_test']  ?? ''}}</td>
                                        </tr>
                                        @if($data->form_data['taken_english_test'] == 'Yes')
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Reading</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['reading'] ?? ''}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Writing</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['writing'] ?? ''}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Speaking</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['speaking'] ?? ''}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:10px" width="40%" height="20"><b>Listening</b></td>
                                                <td width="5%">:</td>
                                                <td width="65%">{{ $data->form_data['listening'] ?? ''}}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Rate your English language</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['language_proficiency'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Planning to relocate / start the immigration process</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['planning_to_start'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Intend to move to Canada in</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['intend_to_move'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Queries</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">{{ $data->form_data['queries'] ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:10px" width="40%" height="20"><b>Interested in</b></td>
                                            <td width="5%">:</td>
                                            <td width="65%">
                                                <ul>
                                                    @foreach($data->form_data['interests'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:100%"><h1>Thank you for contacting us.</h1><br><br> We have received
                                    your Form Submission our Staff will be contacting you within 24 hours.
                                    <br><br><strong>Have a great day ahead!</strong></td>
                            </tr>
                            </tbody>

                        </table>

                    </td>

                </tr>

                </tbody>

            </table>

        </td>

    </tr>
    <tr>

        <td>&nbsp;</td>

    </tr>
    <tr>

        <td>&nbsp;</td>

    </tr>
    <tr>
        <td align="center" bgcolor="#1c3e93" height="70"
            style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#ffffff;font-weight:normal; "
            valign="middle">
            <table border="0" cellpadding="0" cellspacing="0" width="95%">
                <tbody>
                <tr>
                    <td width="53%">Call Us: <a href="tel:9055860440" value="9055860440" target="_blank"
                                                style="color:#fff">
                            (905) 586 0440 </a><br/>
                        Email Id: <a href="mailto:info@just2canada.ca" style="color:#fff;"> info@just2canada.ca</a>
                        &nbsp;
                    </td>

                    <td align="right" width="47%"> Address: 2233 Argentia Road,
                        East Tower, Suite 302
                        Mississauga, ON L5N 2X7
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
