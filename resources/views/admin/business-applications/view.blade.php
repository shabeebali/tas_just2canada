<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.card class="w-full">
        <div class="grid grid-cols-1">
            <div class="font-bold pb-2.5 text-white bg-slate-700 flex justify-between px-4 py-2">
                <div class="text-xl">Client ID: {{$data->client_id}}</div>
                <div class="">Created At: {{ \Carbon\Carbon::parse($data->created_at)->toDateTimeString() }}</div>
            </div>
            <table class="w-full text-sm text-left text-gray-800 dark:text-gray-400">
                @php
                    $rowClass = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200';
                    $headingClass = 'px-6 py-4 font-semifold text-gray-900 dark:text-white';
                    $valueClass = 'px-6 py-4';
                @endphp
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 w-1/2">
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/2">
                    </th>
                </tr>
                </thead>
                <tbody>
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
                            <span class="bg-gray-900 text-white px-2">2</span> <strong>Currently in canada ?:</strong> {{ $data->form_data['in_canada'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">3</span> <strong>Experience that applies to the applicant:</strong> {{ $data->form_data['experience']  ?? ''}}
                        </td>
                    </tr>
                    @if(isset($data->form_data['area_of_business']))
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <span class="bg-gray-900 text-white px-2">4</span> <strong>Area of business or management experience acquired in past 10 years:</strong>
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
                            <span class="bg-gray-900 text-white px-2">5</span> <strong>Funds Available to invest in canada:</strong> {{ isset($data->form_data['funds_available']) ? $data->form_data['funds_available'] : ''}}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">6</span> <strong>Will the applicant consider two applicants to apply under the entrepreneur stream in the same application?:</strong> {{ isset($data->form_data['apply_same']) ? $data->form_data['apply_same'] : '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">7</span> <strong>Educational Qualification:</strong> {{ $data->form_data['qualification'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">8</span> <strong>Date of Birth of the applicant:</strong> {{ \Carbon\Carbon::parse($data->form_data['dob'])->toDateString() }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">9</span> <strong>Marital Status:</strong> {{ $data->form_data['marital_status'] ?? '' }}
                        </td>
                        @if(isset($data->form_data['spouse_dob']))
                            <td class="{{ $valueClass }}">
                                <strong>Spouse's Date of Birth ?:</strong> {{ \Carbon\Carbon::parse($data->form_data['spouse_dob'])->toDateString() }}
                            </td>
                        @endif
                    </tr>
                    <tr class="{{ $rowClass }}">
                        @if(isset($data->form_data['spouse_experience']))
                            <td class="{{ $valueClass }}">
                                <strong>Spouse's Experience:</strong> {{ $data->form_data['spouse_experience'] ?? '' }}
                            </td>
                        @endif
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
                            <span class="bg-gray-900 text-white px-2">10</span> <strong>Ordered to leave Canada or any other country?:</strong> {{ $data->form_data['leave_canada'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">11</span> <strong>Arrested for, or been charged with any offense in any country, including driving under the influence of alcohol or drugs?:</strong> {{ $data->form_data['arrested'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">12</span> <strong>Been in the military (including mandatory service), a militia, or a civil defense unit or the police?:</strong> {{ $data->form_data['in_military'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">13</span> <strong>Been employed by a government in a security-related capacity?:</strong> {{ $data->form_data['employed_in_security'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">14</span> <strong>Visited other countries within the last 10 years?:</strong> {{ $data->form_data['visited_in_10_years'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <strong>Visited Countries:</strong> {{ isset($data->form_data['visited_countries']) ? $data->form_data['visited_countries'] : ''}}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">15</span> <strong> Applicant or spouse have blood relatives in Canada?:</strong> {{ $data->form_data['spouse_have_relatives'] ?? '' }}
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
                            <span class="bg-gray-900 text-white px-2">16</span> <strong> Ever visited Canada?:</strong> {{ $data->form_data['visited_canada']  ?? ''}}
                        </td>
                    </tr>
                    @if(isset($data->form_data['visited_in_2']) || isset($data->form_data['provinces_visited']))
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <span class="bg-gray-900 text-white px-2">17</span> <strong> Visited Canada in last 2 years?:</strong> {{ isset($data->form_data['visited_in_2']) ? $data->form_data['visited_in_2'] : '' }}
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
                                <span class="bg-gray-900 text-white px-2">17</span> <strong> Visa to Canada ever been refused?:</strong> {{ $data->form_data['visa_refused'] ?? '' }}
                            </td>
                        @endif
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">18</span> <strong> Total assets between applicant and spouse:</strong> {{ $data->form_data['assets'] ?? '' }}
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
                            <span class="bg-gray-900 text-white px-2">19</span> <strong> Queries:</strong> {{ $data->form_data['queries'] ?? '' }}
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
                </tbody>
            </table>
        </div>
    </x-blocks.card>
    <x-blocks.card>
        <div class="grid grid-cols-2">
            <div class="font-semibold">Remarks</div>
            <div class="flex justify-end">
                <x-blocks.button label="Add Remark" data-modal-toggle="popup-modal"></x-blocks.button>
            </div>
        </div>
        <div class="grid grid-cols-1">
            @foreach($data->remarks as $remark)
            <x-blocks.card class="mt-2">
                <div class="text-blue-700 mb-4">
                    [Created At: {{$remark->created_at->toDateTimeString() }}]
                </div>
                <div class="text-semibold">
                    Remark: {{ $remark->remark }}
                </div>
                @if($remark->next_follow)
                <div class="text-semibold">
                    Next Follow Up: {{ $remark->next_follow }}
                </div>
                @endif
                @if($remark->quoted_fee)
                    <div class="text-semibold">
                        Quoted Fee: {{ $remark->quoted_fee }}
                    </div>
                @endif
            </x-blocks.card>
            @endforeach
        </div>
    </x-blocks.card>
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <form action="{{ route('admin.form-remarks.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $data->id }}" name="form_submission_id"/>
                    <x-blocks.card>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your Remark</label>
                        <textarea id="message" rows="4" name="remark" required class="mb-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your remark here..."></textarea>
                        <x-blocks.input-field type="text" class="mb-4" label="Quoted Fee?" name="quoted_fee"></x-blocks.input-field>
                        <x-blocks.input-field type="date" class="mb-4" label="Next Follow Up?" name="next_follow"></x-blocks.input-field>
                        <x-blocks.button type="submit" label="Save"></x-blocks.button>
                        <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </x-blocks.card>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
