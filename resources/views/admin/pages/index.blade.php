<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs" create-button create-route="admin.pages.create">
    <x-blocks.table striped :data="$data" :columns="$columns" routeh="/admin/pages" row-key="id" has-delete has-edit/>
</x-layouts.admin>