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
                                <strong>Full Name:</strong> {{ $data->form_data['full_name'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Short Name:</strong> {{ $data->form_data['short_name'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Citizen Of:</strong> {{ $data->form_data['citizen'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Currently Residing In:</strong> {{ $data->form_data['current_residence'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Email:</strong> {{ $data->form_data['email'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Tel:</strong> {{ $data->form_data['phone'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Current Occupation:</strong> {{ $data->form_data['current_occupation'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Years of Experience:</strong> {{ $data->form_data['current_years_of_experience'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>In Country:</strong> {{ $data->form_data['country'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Email:</strong> {{ $data->form_data['previous_occupation'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Tel:</strong> {{ $data->form_data['previous_years_of_experience'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Taken IELTS / CELPIP English proficiency test?:</strong> {{ $data->form_data['taken_proficiency_test'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                @if($data->form_data['taken_proficiency_test'] == 'Yes')
                                    <strong>Score Card:</strong> <a class="text-blue-600" href="{{ Storage::url($data->form_data['score_card']) }}" target="_blank">Download</a>
                                @else
                                    <strong>English language proficiency:</strong> {{ $data->form_data['rate_english'] }}
                                @endif
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Obtained Education Credentials Assessment (ECA) for Canada?:</strong> {{ $data->form_data['obtained_eca'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                @if($data->form_data['obtained_eca'] == 'Yes')
                                    <strong>ECA Report:</strong> <a class="text-blue-600" href="{{ Storage::url($data->form_data['eca_report']) }}" target="_blank">Download</a>
                                @endif
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Countries Served:</strong> {{ $data->form_data['countries_served'] }}
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Reference:</strong> {{ $data->form_data['reference'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}" colspan="2">
                                <strong>Describe in 100 words:</strong> {{ $data->form_data['describe'] }}
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}">
                                <strong>Resume:</strong> <a class="text-blue-600" href="{{ Storage::url($data->form_data['resume']) }}" target="_blank">Download</a>
                            </td>
                            <td class="{{ $valueClass }}">
                                <strong>Introduction Video:</strong> <a class="text-blue-600" href="{{ Storage::url($data->form_data['intro_video']) }}" target="_blank">Download</a>
                            </td>
                        </tr>
                        <tr class="{{ $rowClass }}">
                            <td class="{{ $valueClass }}" colspan="2">
                                <strong>Picture:</strong> <img src="{{ Storage::url($data->form_data['profile_pic']) }}"/>
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
