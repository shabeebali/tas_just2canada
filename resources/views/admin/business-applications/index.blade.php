<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.table striped :data="$data" :columns="$columns" route="{{route('admin.business-applications.index')}}" row-key="id" has-delete/>
</x-layouts.admin>
