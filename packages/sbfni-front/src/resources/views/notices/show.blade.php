<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Notices">

        <ul class="nav nav-sidebar my-2">
            <li class="nav-item-header mt-0">Details</li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Title')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $notice->title }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Date')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $notice->date }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Pdf')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $notice->pdf }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Subject')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $notice->subject }}</div>
                    </div>
                </li>
            
        </ul>

        <x-pondit-baf-history :sourceId="$notice->id" />

        <x-slot name="cardFooter">
            <div></div>
            <div class="d-flex">
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('notices.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('notices.create') }}" />
                <x-pondit-pl-btn-edit href="{{ route('notices.edit', $notice->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('notices.delete', $notice->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

