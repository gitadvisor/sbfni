<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Events">

        <ul class="nav nav-sidebar my-2">
            <li class="nav-item-header mt-0">Details</li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Img1')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->img1 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Description')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->description }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Date')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->date }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Time')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->time }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Fee')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->fee }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Location')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->location }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Bring')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->bring }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Lecturer name')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->lecturer_name }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Lecturer phone')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->lecturer_phone }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Lecturer email')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->lecturer_email }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Lecturer img')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->lecturer_img }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Lecturer description')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $event->lecturer_description }}</div>
                    </div>
                </li>
            
        </ul>

        <x-pondit-baf-history :sourceId="$event->id" />

        <x-slot name="cardFooter">
            <div></div>
            <div class="d-flex">
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('events.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('events.create') }}" />
                <x-pondit-pl-btn-edit href="{{ route('events.edit', $event->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('events.delete', $event->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

