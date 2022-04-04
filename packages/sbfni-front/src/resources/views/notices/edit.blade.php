<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Notices">
        <form action='{{ route('notices.update', $notice->id) }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="title" class="col-md-2">TItle</label>
                    <div class="col-md-10">
                        <input type="text" name="title" value="{{ $notice->title ?? null }}" id="title" class="form-control" placeholder="Enter title here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="date" class="col-md-2">Date</label>
                    <div class="col-md-10">
                        <input type="text" name="date" value="{{ $notice->date ?? null }}" id="date" class="form-control" placeholder="Enter data here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="pdf" class="col-md-2">Pdf</label>
                    <div class="col-md-10">
                        <input type="text" name="pdf" value="{{ $notice->pdf ?? null }}" id="pdf" class="form-control" placeholder="Upload pdf here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="subject" class="col-md-2">Subject</label>
                    <div class="col-md-10">
                        <input type="text" name="subject" value="{{ $notice->subject ?? null }}" id="subject" class="form-control" placeholder="Enter subject here" required />
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('notices.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('notices.create') }}" />
                <x-pondit-pl-btn-view href="{{ route('notices.show', $notice->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('notices.delete', $notice->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

