<x-blocks.card class="w-full">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col" class="px-6 py-3 text-{{ isset($column['align']) ? $column['align'] : 'right' }}">
                            {{ $column['label'] }}
                        </th>
                        @if($hasEdit || $hasDelete)
                            <th scope="col" class="px-6 py-3 text-right"></th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr class="{{ $rowClass }}">
                        @foreach ($columns as $col)
                            <td class="px-6 py-4 text-{{ isset($col['align']) ? $col['align'] : 'right' }}">
                                {{ $row[$col['field']] }}
                            </td>
                        @endforeach
                    </tr>
                    @if($hasEdit || $hasDelete)
                        <td scope="col" class="px-6 py-3 text-right">
                            @if($hasEdit)
                                <x-blocks.icon-button rounded :href="$route.'/edit/'.$row[$rowKey]">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </x-blocks.icon-button>
                            @endif
                        </td>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</x-blocks.card>