<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Quotations">
        <form action='{{ route('quotations.update', $quotation->id) }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="title" class="col-md-2">Title</label>
                    <div class="col-md-10">
                        <input type="text" name="title" value="{{ $quotation->title ?? null }}" id="title" class="form-control" placeholder="Enter title here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="img" class="col-md-2">Image</label>
                    <div class="col-md-10">
                        <input type="text" name="img" value="{{ $quotation->img ?? null }}" id="img" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="quotation" class="col-md-2">Quotation</label>
                    <div class="col-md-10">
                        <textarea name="quotation" id="quotation" class="form-control"  required>{{ $quotation->quotation ?? null }}</textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="author_name" class="col-md-2">Author name</label>
                    <div class="col-md-10">
                        <input type="text" name="author_name" value="{{ $quotation->author_name ?? null }}" id="author_name" class="form-control" placeholder="Enter author name here" required />
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('quotations.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('quotations.create') }}" />
                <x-pondit-pl-btn-view href="{{ route('quotations.show', $quotation->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('quotations.delete', $quotation->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

