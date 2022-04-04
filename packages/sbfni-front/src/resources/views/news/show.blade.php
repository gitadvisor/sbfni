<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="News">

        <ul class="nav nav-sidebar my-2">
            <li class="nav-item-header mt-0">Details</li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Img1')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->img1 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Script1')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->script1 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Img2')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->img2 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Script2')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->script2 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img1')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img1 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img2')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img2 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img3')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img3 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img4')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img4 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img5')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img5 }}</div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <div class="d-flex nav-link">
                        <div class="font-weight-semibold"><i class="fas fa-arrows-alt"></i> {{__('Gl img6')}} :</div>
                        <div class="mt-2 mt-sm-0 ml-3">{{ $news->gl_img6 }}</div>
                    </div>
                </li>
            
        </ul>

        <x-pondit-baf-history :sourceId="$news->id" />

        <x-slot name="cardFooter">
            <div></div>
            <div class="d-flex">
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('news.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('news.create') }}" />
                <x-pondit-pl-btn-edit href="{{ route('news.edit', $news->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('news.delete', $news->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

