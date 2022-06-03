<x-layouts.admin :title="$title" :breadcrumbs="$breadcrumbs">
    <x-blocks.card>
        <div id="accordion-open" data-accordion="open">
            <x-blocks.accordion heading-id="home-heading" body-id="home-body" title="Home Settings" heading-class="">
                <p>Home Settings</p>
            </x-blocks.accordion>
            <x-blocks.accordion heading-id="general-heading" body-id="general-body" title="General Settings" heading-class="border-b" body-class="border-b border-t-0">
                <p>Home Settings</p>
            </x-blocks.accordion>
        </div>
    </x-blocks.card>
</x-layouts.admin>
