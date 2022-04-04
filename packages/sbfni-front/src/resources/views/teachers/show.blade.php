<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Teachers">

        <ul class="nav nav-sidebar my-2">
            <li class="nav-item-header mt-0">Details</li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Name')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->name }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Designation')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->designation }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Description')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->description }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Qualification')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->qualification }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Phone')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->phone }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Email')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->email }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Img')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $teacher->img }}</div>
                    </div>
                </li>
            
        </ul>

        <x-pondit-baf-history :sourceId="$teacher->id" />

        <x-slot name="cardFooter">
            <div></div>
            <div class="d-flex">
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('teachers.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('teachers.create') }}" />
                <x-pondit-pl-btn-edit href="{{ route('teachers.edit', $teacher->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('teachers.delete', $teacher->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

