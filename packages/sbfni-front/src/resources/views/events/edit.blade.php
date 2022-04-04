<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Events">
        <form action='{{ route('events.update', $event->id) }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="img1" class="col-md-2">Image 1</label>
                    <div class="col-md-10">
                        <input type="text" name="img1" value="{{ $event->img1 ?? null }}" id="img1" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description here" required>{{ $event->description ?? null }}</textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="date" class="col-md-2">Date</label>
                    <div class="col-md-10">
                        <input type="text" name="date" value="{{ $event->date ?? null }}" id="date" class="form-control" placeholder="Enter date here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="time" class="col-md-2">Time</label>
                    <div class="col-md-10">
                        <input type="text" name="time" value="{{ $event->time ?? null }}" id="time" class="form-control" placeholder="Enter time here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="fee" class="col-md-2">Fee</label>
                    <div class="col-md-10">
                        <input type="number" name="fee" value="{{ $event->fee ?? null }}" id="fee" class="form-control" placeholder="Enter fee here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="location" class="col-md-2">Location</label>
                    <div class="col-md-10">
                        <input type="text" name="location" value="{{ $event->location ?? null }}" id="location" class="form-control" placeholder="Enter location here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="bring" class="col-md-2">What to bring</label>
                    <div class="col-md-10">
                        <textarea name="bring" id="bring" class="form-control" placeholder="Documents to bring" required>{{ $event->bring ?? null }}</textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_name" class="col-md-2">Lecturer's Name</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_name" value="{{ $event->lecturer_name ?? null }}" id="lecturer_name" class="form-control" placeholder="Enter lecturer's name here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_phone" class="col-md-2">Lecturer's phone</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_phone" value="{{ $event->lecturer_phone ?? null }}" id="lecturer_phone" class="form-control" placeholder="Enter lecturer's phone number here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_email" class="col-md-2">Lecturer's email</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_email" value="{{ $event->lecturer_email ?? null }}" id="lecturer_email" class="form-control" placeholder="Enter lecturer's email address here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_img" class="col-md-2">Lecturer's image</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_img" value="{{ $event->lecturer_img ?? null }}" id="lecturer_img" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_description" class="col-md-2">Lecturer's description</label>
                    <div class="col-md-10">
                        <textarea name="lecturer_description" id="lecturer_description" class="form-control" placeholder="Enter lecturer's description here" required>{{ $event->lecturer_description ?? null }}</textarea>
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('events.index') }}" />
                <x-pondit-pl-btn-create href="{{ route('events.create') }}" />
                <x-pondit-pl-btn-view href="{{ route('events.show', $event->id) }}" />
                <x-pondit-pl-btn-delete url="{{ route('events.delete', $event->id) }}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

