<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.table striped :data="$data" :columns="$columns" route="/admin/business-applications" row-key="id" has-delete/>
</x-layouts.admin>
