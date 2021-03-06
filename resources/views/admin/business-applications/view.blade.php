<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <div>
        <div class="grid grid-cols-1">
            <div class="font-bold pb-2.5 text-white bg-slate-700 flex justify-between px-4 py-2">
                <div class="text-xl">Client ID: {{$data->client_id}}</div>
                <div class="">Created
                    At: {{ $data->created_at->setTimezone('Canada/Eastern')->toDayDateTimeString() }}</div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <span class="bg-gray-900 text-white px-2">1</span> <strong>Full Name (As per
                                passport):</strong> {{ $data->form_data['name'] }}
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
                            <strong>City of
                                residence:</strong> {{ isset($data->form_data['city_of_residence']) ? $data->form_data['city_of_residence'] : '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <strong>Nationality:</strong> {{ $data->form_data['nationality'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <strong>How did the applicant obtain our
                                reference:</strong> {{ $data->form_data['reference'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">2</span> <strong>Date of Birth of the
                                applicant:</strong> {{ \Carbon\Carbon::parse($data->form_data['dob'])->toDateString() }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">3</span> <strong>Marital
                                Status:</strong> {{ $data->form_data['marital_status'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        @if(isset($data->form_data['spouse_dob']))
                            <td class="{{ $valueClass }}">
                                <strong>Spouse's Date of Birth
                                    ?:</strong> {{ \Carbon\Carbon::parse($data->form_data['spouse_dob'])->toDateString() }}
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
                                    <strong>Have children less than 22 years of
                                        age?:</strong> {{ $data->form_data['children_lt_20'] ?? '' }}
                                </td>
                            @endif
                            @if(isset($data->form_data['children_enrolled']))
                                <td class="{{ $valueClass }}">
                                    <strong>Have children enrolled in accredited Canadian education institution/s and
                                        are actively pursuing academic, professional or vocational training on a
                                        full-time basis?:</strong> {{ $data->form_data['children_enrolled'] ?? '' }}
                                </td>
                            @endif
                        </tr>
                    @endif
                    @if(isset($data->form_data['children_canadian']) || isset($data->form_data['spouse_children_mental']))
                        <tr class="{{ $rowClass }}">
                            @if(isset($data->form_data['children_canadian']))
                                <td class="{{ $valueClass }}">
                                    <strong>Have any of the applicant's children who are Canadian citizens or permanent
                                        residents of Canada?:</strong> {{ $data->form_data['children_canadian'] ?? '' }}
                                </td>
                            @endif
                            @if(isset($data->form_data['spouse_children_mental']))
                                <td class="{{ $valueClass }}">
                                    <strong>Do the applicant's spouse or their children have a physical or mental
                                        disorder that requires medical
                                        attention?:</strong> {{ $data->form_data['spouse_children_mental'] ?? '' }}
                                </td>
                            @endif
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">4</span> <strong>Currently in canada
                                ?:</strong> {{ $data->form_data['in_canada'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">5</span> <strong>Experience that applies to the
                                applicant:</strong> {{ $data->form_data['experience']  ?? ''}}
                        </td>
                    </tr>
                    @if(isset($data->form_data['area_of_business']))
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <span class="bg-gray-900 text-white px-2">6</span> <strong>Area of business or
                                    management experience acquired in past 10 years:</strong>
                                <ul>
                                    @foreach($data->form_data['area_of_business'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Product / Commodity description that the applicant deals in/her business
                                    :</strong> {{ $data->form_data['product_description'] ?? '' }}
                            </td>
                        </tr>
                    @endif
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">7</span> <strong>Will the applicant consider two
                                applicants to apply under the entrepreneur stream in the same
                                application?:</strong> {{ $data->form_data['apply_same'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">8</span> <strong>Educational
                                Qualification:</strong> {{ $data->form_data['qualification'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">9</span> <strong>Ordered to leave Canada or any
                                other country?:</strong> {{ $data->form_data['leave_canada'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">10</span> <strong>Arrested for, or been charged
                                with any offense in any country, including driving under the influence of alcohol or
                                drugs?:</strong> {{ $data->form_data['arrested'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">11</span> <strong>Been in the military (including
                                mandatory service), a militia, or a civil defense unit or the
                                police?:</strong> {{ $data->form_data['in_military'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">12</span> <strong>Been employed by a government in
                                a security-related
                                capacity?:</strong> {{ $data->form_data['employed_in_security'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">13</span> <strong>Visited other countries within
                                the last 10 years?:</strong> {{ $data->form_data['visited_in_10_years'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <strong>Visited Countries:</strong> {{ $data->form_data['visited_countries'] ?? ''}}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">14</span> <strong> Applicant or spouse have blood
                                relatives in Canada?:</strong> {{ $data->form_data['spouse_have_relatives'] ?? '' }}
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
                            <span class="bg-gray-900 text-white px-2">15</span> <strong> Ever visited
                                Canada?:</strong> {{ $data->form_data['visited_canada']  ?? ''}}
                        </td>
                    </tr>
                    @if(isset($data->form_data['visited_in_2']) || isset($data->form_data['provinces_visited']))
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                Visited Canada in last 2 years?:</strong> {{ $data->form_data['visited_in_2'] ?? '' }}
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
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">16</span> <strong> Visa to Canada ever been
                                refused?:</strong> {{ $data->form_data['visa_refused'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            Visa refused details:</strong> {{ $data->form_data['visa_refused_details'] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">17</span> <strong> Total assets between applicant
                                and spouse:</strong> {{ $data->form_data['assets'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">18</span> <strong>Funds Available to invest in
                                canada:</strong> {{ $data->form_data['funds_available'] ?? ''}}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <span class="bg-gray-900 text-white px-2">19</span> <strong> Taken English proficiency test
                                (IELTS or CELPIP) ?:</strong> {{ $data->form_data['taken_english_test']  ?? ''}}
                            @if($data->form_data['taken_english_test'] == 'Yes')
                                <p>Scores:</p>
                                <ul>
                                    <li>Reading: {{ $data->form_data['reading'] ?? ''}}</li>
                                    <li>Speaking: {{ $data->form_data['speaking'] ?? '' }}</li>
                                    <li>Writing: {{ $data->form_data['writing'] ?? '' }}</li>
                                    <li>Listening: {{ $data->form_data['listening'] ?? ''}}</li>
                                </ul>
                            @endif
                        </td>
                        <td class="{{ $valueClass }}">
                            <strong> English Language
                                Proficiency:</strong> {{ $data->form_data['language_proficiency'] ?? '' }}
                        </td>
                    </tr>
                    <tr class="{{ $rowClass }}">
                        <td class="{{ $valueClass }}">
                            <strong> Planning to relocate / start the immigration
                                process:</strong> {{ $data->form_data['planning_to_start'] ?? '' }}
                        </td>
                        <td class="{{ $valueClass }}">
                            <strong> Intend to move to Canada
                                in:</strong> {{ $data->form_data['intend_to_move'] ?? '' }}
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="grid grid-cols-1">
            @if($data->remarks->count() > 0)
                <div class="text-center text-2xl font-bold my-4">Remarks</div>
            @endif
            @foreach($data->remarks as $remark)
                <div id="accordion-open" data-accordion="collapse">
                    <h2 id="accordion-open-heading-{{$remark->id}}">
                        <button aria-controls="accordion-open-body-{{$remark->id}}"
                            aria-expanded=false"
                            class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-900 mt-4 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-800"
                            data-accordion-target="#accordion-open-body-{{$remark->id}}"
                            type="button">
                            <span class="flex items-center font-bold text-xl text-ellipsis"><svg xmlns="http://www.w3.org/2000/svg"
                                                                       class="h-5 w-5" viewBox="0 0 20 20"
                                                                       fill="currentColor"><path
                            d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/></svg> {{ $remark->remark }}</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-{{$remark->id}}" class="hidden" aria-labelledby="accordion-open-heading-{{$remark->id}}">
                        <x-blocks.card class="mt-2">
                            <div class="text-blue-700 mb-4">
                                [Created At: {{$remark->created_at->setTimezone('Canada/Eastern')->toDayDateTimeString() }}]
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
                            @if($remark->file_1)
                                <div class="text-semibold">
                                    <a class="text-blue-700" href="{{url('storage/'.$remark->file_1)}}">File 1</a>
                                </div>
                            @endif
                            @if($remark->link_1)
                                <div class="text-semibold">
                                    Link 1: <a class="text-blue-700" href="{{$remark->link_1}}" target="_blank">{{$remark->link_1}}</a>
                                </div>
                            @endif
                            @if($remark->file_2)
                                <div class="text-semibold">
                                    <a class="text-blue-700" href="{{url('storage/'.$remark->file_2)}}">File 2</a>
                                </div>
                            @endif
                            @if($remark->link_2)
                                <div class="text-semibold">
                                    Link 2: <a class="text-blue-700" href="{{$remark->link_2}}" target="_blank">{{$remark->link_2}}</a>
                                </div>
                            @endif
                            @if($remark->file_3)
                                <div class="text-semibold">
                                    <a class="text-blue-700" href="{{url('storage/'.$remark->file_3)}}">File 3</a>
                                </div>
                            @endif
                            @if($remark->link_3)
                                <div class="text-semibold">
                                    Link 3: <a class="text-blue-700" href="{{$remark->link_3}}" target="_blank">{{$remark->link_3}}</a>
                                </div>
                            @endif
                            @if($remark->file_4)
                                <div class="text-semibold">
                                    <a class="text-blue-700" href="{{url('storage/'.$remark->file_4)}}">File 4</a>
                                </div>
                            @endif
                            @if($remark->link_4)
                                <div class="text-semibold">
                                    Link 4: <a class="text-blue-700" href="{{$remark->link_4}}" target="_blank">{{$remark->link_4}}</a>
                                </div>
                            @endif
                        </x-blocks.card>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-xl font-bold my-4">Add Remark</div>
    <div class="relative md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form action="{{ route('admin.form-remarks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="form_submission_id"/>
                <x-blocks.card>
                    @if ($errors->any())
                        <x-blocks.alert type="danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </x-blocks.alert>
                    @endif
                    <label for="message"
                           class="block mb-2 text-md font-bold text-gray-900 dark:text-gray-400">Your
                        Remark</label>
                    <textarea @if ($errors->any()) autofocus @endif id="message" rows="4" name="remark" required
                              class="mb-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Your remark here...">{{old('remark')}}</textarea>
                    <x-blocks.input-field type="text" class="mb-4" label="Quoted Fee?" name="quoted_fee"
                                          value="{{old('quoted_fee')}}"></x-blocks.input-field>
                    <x-blocks.input-field type="date" class="mb-4" label="Next Follow Up?" name="next_follow"
                                          value="{{old('next_follow')}}"></x-blocks.input-field>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <x-blocks.input-field type="file" class="mb-4" label="File 1"
                                              name="file_1"></x-blocks.input-field>
                        <x-blocks.input-field type="text" class="mb-4" label="Link 1"
                                              name="link_1" value="{{old('link_1')}}"></x-blocks.input-field>
                        <x-blocks.input-field type="file" class="mb-4" label="File 2"
                                              name="file_2"></x-blocks.input-field>
                        <x-blocks.input-field type="text" class="mb-4" label="Link 2"
                                              name="link_2" value="{{old('link_2')}}"></x-blocks.input-field>
                        <x-blocks.input-field type="file" class="mb-4" label="File 3"
                                              name="file_3"></x-blocks.input-field>
                        <x-blocks.input-field type="text" class="mb-4" label="Link 3"
                                              name="link_3" value="{{old('link_3')}}"></x-blocks.input-field>
                        <x-blocks.input-field type="file" class="mb-4" label="File 4"
                                              name="file_4"></x-blocks.input-field>
                        <x-blocks.input-field type="text" class="mb-4" label="Link 4"
                                              name="link_4" value="{{old('link_4')}}"></x-blocks.input-field>
                    </div>
                    <x-blocks.button type="submit" label="Save"></x-blocks.button>
                </x-blocks.card>
            </form>
        </div>
    </div>
</x-layouts.admin>
