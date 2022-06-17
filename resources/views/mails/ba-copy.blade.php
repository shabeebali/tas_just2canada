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
        <td align="center" style="padding:10px;" valign="top" colspan="2">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                    <td align="center"><img src="https://just2canada.ca/images/logo.png"/></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">1</span> <strong>Full Name (As per passport):</strong> {{ $data->form_data['name'] }}
        </td>
        <td class="{{ $valueClass }}">
            <strong>Email:</strong> {{ $data->form_data['email'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <strong>Phone Number (with country and area code):</strong> {{ $data->form_data['phone'] }}
        </td>
        <td class="{{ $valueClass }}">
            <strong>Country of residence:</strong> {{ $data->form_data['country'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <strong>City of residence:</strong> {{ isset($data->form_data['city_of_residence']) ? $data->form_data['city_of_residence'] : '' }}
        </td>
        <td class="{{ $valueClass }}">
            <strong>Nationality:</strong> {{ $data->form_data['nationality'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <strong>How did the applicant obtain our reference:</strong> {{ $data->form_data['reference'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">2</span> <strong>Date of Birth of the applicant:</strong> {{ \Carbon\Carbon::parse($data->form_data['dob'])->toDateString() }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">3</span> <strong>Marital Status:</strong> {{ $data->form_data['marital_status'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        @if(isset($data->form_data['spouse_dob']))
            <td class="{{ $valueClass }}">
                <strong>Spouse's Date of Birth ?:</strong> {{ \Carbon\Carbon::parse($data->form_data['spouse_dob'])->toDateString() }}
            </td>
        @endif
        @if(isset($data->form_data['spouse_experience']))
            <td class="{{ $valueClass }}">
                <strong>Spouse's Experience:</strong> {{ $data->form_data['spouse_experience'] ?? '' }}
            </td>
        @endif
    </tr>
    <tr class="{{ $rowClass }}">
        @if(isset($data->form_data['no_of_children']))
            <td class="{{ $valueClass }}">
                <strong>No. of children:</strong> {{ $data->form_data['no_of_children'] ?? '' }}
            </td>
        @endif
    </tr>
    @if(isset($data->form_data['children_lt_20']) || isset($data->form_data['children_enrolled']))
        <tr class="{{ $rowClass }}">
            @if(isset($data->form_data['children_lt_20']))
                <td class="{{ $valueClass }}">
                    <strong>Have children less than 22 years of age?:</strong> {{ $data->form_data['children_lt_20'] ?? '' }}
                </td>
            @endif
            @if(isset($data->form_data['children_enrolled']))
                <td class="{{ $valueClass }}">
                    <strong>Have children enrolled in accredited Canadian education institution/s and are actively pursuing academic, professional or vocational training on a full-time basis?:</strong> {{ $data->form_data['children_enrolled'] ?? '' }}
                </td>
            @endif
        </tr>
    @endif
    @if(isset($data->form_data['children_canadian']) || isset($data->form_data['spouse_children_mental']))
        <tr class="{{ $rowClass }}">
            @if(isset($data->form_data['children_canadian']))
                <td class="{{ $valueClass }}">
                    <strong>Have any of the applicant's children who are Canadian citizens or permanent residents of Canada?:</strong> {{ $data->form_data['children_canadian'] ?? '' }}
                </td>
            @endif
            @if(isset($data->form_data['spouse_children_mental']))
                <td class="{{ $valueClass }}">
                    <strong>Do the applicant's spouse or their children have a physical or mental disorder that requires medical attention?:</strong> {{ $data->form_data['spouse_children_mental'] ?? '' }}
                </td>
            @endif
        </tr>
    @endif
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">4</span> <strong>Currently in canada ?:</strong> {{ $data->form_data['in_canada'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">5</span> <strong>Experience that applies to the applicant:</strong> {{ $data->form_data['experience']  ?? ''}}
        </td>
    </tr>
    @if(isset($data->form_data['area_of_business']))
        <tr class="{{ $rowClass }}">
            <td class="{{ $valueClass }}">
                <span class="bg-gray-900 text-white px-2">6</span> <strong>Area of business or management experience acquired in past 10 years:</strong>
                <ul>
                    @foreach($data->form_data['area_of_business'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </td>
            <td class="{{ $valueClass }}">
                <strong>Product / Commodity description that the applicant deals in/her business :</strong> {{ $data->form_data['product_description'] ?? '' }}
            </td>
        </tr>
    @endif
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">7</span> <strong>Will the applicant consider two applicants to apply under the entrepreneur stream in the same application?:</strong> {{ isset($data->form_data['apply_same']) ? $data->form_data['apply_same'] : '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">8</span> <strong>Educational Qualification:</strong> {{ $data->form_data['qualification'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">9</span> <strong>Ordered to leave Canada or any other country?:</strong> {{ $data->form_data['leave_canada'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">10</span> <strong>Arrested for, or been charged with any offense in any country, including driving under the influence of alcohol or drugs?:</strong> {{ $data->form_data['arrested'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">11</span> <strong>Been in the military (including mandatory service), a militia, or a civil defense unit or the police?:</strong> {{ $data->form_data['in_military'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">12</span> <strong>Been employed by a government in a security-related capacity?:</strong> {{ $data->form_data['employed_in_security'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">13</span> <strong>Visited other countries within the last 10 years?:</strong> {{ $data->form_data['visited_in_10_years'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <strong>Visited Countries:</strong> {{ isset($data->form_data['visited_countries']) ? $data->form_data['visited_countries'] : ''}}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">14</span> <strong> Applicant or spouse have blood relatives in Canada?:</strong> {{ $data->form_data['spouse_have_relatives'] ?? '' }}
        </td>
        @if(isset($data->form_data['spouse_relative_state']))
            <td class="{{ $valueClass }}">
                <strong>If Yes, Province(s) they are in:</strong>
                <ul>
                    @foreach($data->form_data['spouse_relative_state'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </td>
        @endif
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">15</span> <strong> Ever visited Canada?:</strong> {{ $data->form_data['visited_canada']  ?? ''}}
        </td>
    </tr>
    @if(isset($data->form_data['visited_in_2']) || isset($data->form_data['provinces_visited']))
        <tr class="{{ $rowClass }}">
            <td class="{{ $valueClass }}">
                Visited Canada in last 2 years?:</strong> {{ isset($data->form_data['visited_in_2']) ? $data->form_data['visited_in_2'] : '' }}
            </td>
            @if(isset($data->form_data['provinces_visited']))
                <td class="{{ $valueClass }}">
                    <strong>If Yes, Province(s) visited:</strong>
                    <ul>
                        @foreach($data->form_data['provinces_visited'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </td>
            @endif
        </tr>
    @endif
    <tr class="{{ $rowClass }}">
        @if(isset($data->form_data['visa_refused']))
            <td class="{{ $valueClass }}">
                <span class="bg-gray-900 text-white px-2">16</span> <strong> Visa to Canada ever been refused?:</strong> {{ $data->form_data['visa_refused'] ?? '' }}
            </td>
        @endif
    </tr>
    <tr>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">17</span> <strong> Total assets between applicant and spouse:</strong> {{ $data->form_data['assets'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">18</span> <strong>Funds Available to invest in canada:</strong> {{ isset($data->form_data['funds_available']) ? $data->form_data['funds_available'] : ''}}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">19</span> <strong> Taken English proficiency test (IELTS or CELPIP) ?:</strong> {{ $data->form_data['taken_english_test']  ?? ''}}
            @if($data->form_data['taken_english_test'] == 'Yes')
                <p>Scores:</p>
                <ul>
                    <li>Reading: {{isset($data->form_data['reading']) ? $data->form_data['reading'] : ''}}</li>
                    <li>Speaking: {{isset($data->form_data['speaking']) ? $data->form_data['speaking'] : ''}}</li>
                    <li>Writing: {{isset($data->form_data['writing']) ? $data->form_data['writing'] : ''}}</li>
                    <li>Listening: {{isset($data->form_data['listening']) ? $data->form_data['listening'] : ''}}</li>
                </ul>
            @endif
        </td>
        <td class="{{ $valueClass }}">
            <strong> English Language Proficiency:</strong> {{ isset($data->form_data['language_proficiency']) ? $data->form_data['language_proficiency'] : ''}}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            <strong> Planning to relocate / start the immigration process:</strong> {{ $data->form_data['planning_to_start'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <strong> Intend to move to Canada in:</strong> {{ $data->form_data['intend_to_move'] ?? '' }}
        </td>
    </tr>
    <tr class="{{ $rowClass }}">
        <td class="{{ $valueClass }}">
            Queries:</strong> {{ $data->form_data['queries'] ?? '' }}
        </td>
        <td class="{{ $valueClass }}">
            <span class="bg-gray-900 text-white px-2">20</span> <strong> Interests:</strong>
            <ul>
                @foreach($data->form_data['interests'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </td>
    </tr>
    <tr>
        <td align="center" bgcolor="#1c3e93" height="70" colspan="2"
            style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#ffffff;font-weight:normal; "
            valign="middle">
            <table border="0" cellpadding="0" cellspacing="0" width="95%">
                <tbody>
                <tr>
                    <td width="53%">Call Us: <a href="tel:9055860440" value="9055860440" target="_blank" style="color:#fff">
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
