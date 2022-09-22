<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.card class="py-2">
        <form action="{{ route('admin.business-applications.index') }}" method="GET">
            <div class="flex justify-center items-center">
                <div class="flex items-center">
                    Search using client id, country, name and email
                    <x-blocks.input-field name="search" class="w-auto mb-2 ml-2" plcaholder="Search Here"/>
                    <x-blocks.button type="submit" label="Search" class=""></x-blocks.button>
                    <select id="assessed_as" name="assessed_as" class="mx-2 mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="clear">--None--</option>
                        <option value="ICT" @if($assessed_as == 'ICT') selected @endif>ICT</option>
                        <option value="CSUV" @if($assessed_as == 'CSUV') selected @endif>CSUV</option>
                        <option value="PNP" @if($assessed_as == 'PNP') selected @endif>PNP</option>
                    </select>
                    <x-blocks.button class="" label="Filter" type="submit"></x-blocks.button>
                </div>
            </div>
        </form>
    </x-blocks.card>
    @if($search)
        <div class="font-semibold">Search results for: {{$search}}</div>
    @endif
    <x-blocks.table striped :data="$data" :columns="$columns" route="{{route('admin.business-applications.index')}}" row-key="id" has-delete/>
</x-layouts.admin>
