<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Quotations">

        <ul class="nav nav-sidebar my-2">
            <li class="nav-item-header mt-0">Details</li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Title')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $quotation->title }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Img')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $quotation->img }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Quotation')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $quotation->quotation }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Author name')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $quotation->author_name }}</div>
                    </div>
                </li>
            
        </ul>

        <x-pondit-baf-history :sourceId="$quotation->id" />

        <x-slot name="cardFooter">
            <div></div>
            <div class="d-flex">
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('quotations.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('quotations.create') }}" />
                <x-pondit-pl-btn-edit href="{{ route('quotations.edit', $quotation->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('quotations.delete', $quotation->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

