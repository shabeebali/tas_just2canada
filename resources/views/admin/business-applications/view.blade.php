<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.card class="w-full">
        <div class="grid grid-cols-1">
            <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400">
                @php
                    $rowClass = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200';
                    $headingClass = 'px-6 py-4 font-semifold text-gray-900 dark:text-white';
                    $valueClass = 'px-6 py-4';
                @endphp
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 w-1/2 md:w-1/3">
                        Details
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/2 md:w-2/3">
                        Data
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Name
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['name'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Email
                        </th>
                        <td class="{{ $valueClass }}">
                            <a href="mailto:{{ $data->form_data['email'] }}">{{ $data->form_data['email'] }}</a>
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Phone
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['phone'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Country
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['country'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            City of residence
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['city_of_residence'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Nationality
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['nationality'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['reference']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Reference
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['reference'] }}
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Currently in canada
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['in_canada'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Experience
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['experience'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Area of business or management experience acquired in past 10 years
                        </th>
                        <td class="{{ $valueClass }}">
                            <ul>
                                @foreach($data->form_data['area_of_business'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Product / Commodity Description
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['product_description'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Education Qualification
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['qualification'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Date of Birth of applicant
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ \Carbon\Carbon::parse($data->form_data['dob'])->toFormattedDateString() }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Marital Status
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['marital_status'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['spouse_dob']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Spouse's Date of Birth
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ \Carbon\Carbon::parse($data->form_data['spouse_dob'])->toFormattedDateString() }}
                            </td>
                        </tr>
                    @endif
                    @if(isset($data->form_data['spouse_experience']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Spouse's Experience
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['spouse_experience'] }}
                            </td>
                        </tr>
                    @endif
                    @if(isset($data->form_data['no_of_children']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                No. of children
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['no_of_children'] }}
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Ordered to leave Canada or any other country?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['leave_canada'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Arrested for, or been charged with any offense in any country, including driving under the influence of alcohol or drugs?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['arrested'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Been in the military (including mandatory service), a militia, or a civil defense unit or the police?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['in_military'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Been employed by a government in a security-related capacity?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['employed_in_security'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Visited other countries within the last 10 years?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['visited_in_10_years'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['visited_countries']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Visited Countries
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['visited_countries'] }}
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Have applicant or spouse have blood relatives in Canada?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['spouse_have_relatives'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['spouse_relative_state']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Province(s) they are in
                            </th>
                            <td class="{{ $valueClass }}">
                                <ul>
                                    @foreach($data->form_data['spouse_relative_state'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Ever visited Canada?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['visited_canada'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['visited_in_2']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Visited Canada in last 2 years?
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['visited_in_2'] }}
                            </td>
                        </tr>
                    @endif
                    @if(isset($data->form_data['provinces_visited']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Province(s) visited
                            </th>
                            <td class="{{ $valueClass }}">
                                <ul>
                                    @foreach($data->form_data['provinces_visited'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endif
                    @if(isset($data->form_data['visa_refused']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Visa to Canada ever been refused?
                            </th>
                            <td class="{{ $valueClass }}">
                                {{ $data->form_data['visa_refused'] }}
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Total assets between applicant and spouse
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['assets'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Taken English proficiency test (IELTS or CELPIP) ?
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['taken_english_test'] }}
                        </td>
                    </tr>
                    @if($data->form_data['taken_english_test'] == 'Yes')
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Test Score
                            </th>
                            <td class="{{ $valueClass }}">
                                <ul>
                                    <li>Reading: {{$data->form_data['reading']}}</li>
                                    <li>Speaking: {{$data->form_data['speaking']}}</li>
                                    <li>Writing: {{$data->form_data['writing']}}</li>
                                    <li>Listening: {{$data->form_data['listening']}}</li>
                                </ul>
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            English Language Proficiency
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['language_proficiency'] }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <th scope="row" class="{{ $headingClass }}">
                            Queries
                        </th>
                        <td class="{{ $valueClass }}">
                            {{ $data->form_data['queries'] }}
                        </td>
                    </tr>
                    @if(isset($data->form_data['interests']))
                        <tr class="{{ $rowClass }}">
                            <th scope="row" class="{{ $headingClass }}">
                                Interest(s)
                            </th>
                            <td class="{{ $valueClass }}">
                                <ul>
                                    @foreach($data->form_data['interests'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </x-blocks.card>
</x-layouts.admin>
