<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Teachers">
        <form action='{{ route('teachers.update', $teacher->id) }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" value="{{ $teacher->name ?? null }}" id="name" class="form-control" placeholder="Enter name here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="designation" class="col-md-2">Designation</label>
                    <div class="col-md-10">
                        <input type="text" name="designation" value="{{ $teacher->designation ?? null }}" id="designation" class="form-control" placeholder="Enter designation here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description here" required>{{ $teacher->description ?? null }}</textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="qualification" class="col-md-2">Educational Qualification</label>
                    <div class="col-md-10">
                        <input type="text" name="qualification" value="{{ $teacher->qualification ?? null }}" id="qualification" class="form-control" placeholder="Enter educational qualification here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="phone" class="col-md-2">Phone</label>
                    <div class="col-md-10">
                        <input type="text" name="phone" value="{{ $teacher->phone ?? null }}" id="phone" class="form-control" placeholder="Enter phone number here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="text" name="email" value="{{ $teacher->email ?? null }}" id="email" class="form-control" placeholder="Enter email address here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="img" class="col-md-2">Image</label>
                    <div class="col-md-10">
                        <input type="text" name="img" value="{{ $teacher->img ?? null }}" id="img" class="form-control"  required />
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('teachers.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('teachers.create') }}" />
                <x-pondit-pl-btn-view href="{{ route('teachers.show', $teacher->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('teachers.delete', $teacher->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

