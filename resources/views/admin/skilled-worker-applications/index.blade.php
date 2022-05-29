<x-layouts.admin>
    <x-blocks.page-header :title="$title" :breadcrumbs="$breadcrumbs">
        <x-slot name="afterTitle">
            <x-blocks.button variant="primary" label="Create" class="ml-4 mr-0 mb-0" href="{{ route('admin.skilled-worker-applications.create') }}"/>
        </x-slot>
    </x-blocks.page-header>
</x-layouts.admin>