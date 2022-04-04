<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Events">
        <form action='{{ route('events.store') }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="img1" class="col-md-2">Image 1</label>
                    <div class="col-md-10">
                        <input type="text" name="img1" id="img1" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description here" required></textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="date" class="col-md-2">Date</label>
                    <div class="col-md-10">
                        <input type="text" name="date" id="date" class="form-control" placeholder="Enter date here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="time" class="col-md-2">Time</label>
                    <div class="col-md-10">
                        <input type="text" name="time" id="time" class="form-control" placeholder="Enter time here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="fee" class="col-md-2">Fee</label>
                    <div class="col-md-10">
                        <input type="number" name="fee" id="fee" class="form-control" placeholder="Enter fee here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="location" class="col-md-2">Location</label>
                    <div class="col-md-10">
                        <input type="text" name="location" id="location" class="form-control" placeholder="Enter location here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="bring" class="col-md-2">What to bring</label>
                    <div class="col-md-10">
                        <textarea name="bring" id="bring" class="form-control" placeholder="Documents to bring" required></textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_name" class="col-md-2">Lecturer's Name</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_name" id="lecturer_name" class="form-control" placeholder="Enter lecturer's name here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_phone" class="col-md-2">Lecturer's phone</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_phone" id="lecturer_phone" class="form-control" placeholder="Enter lecturer's phone number here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_email" class="col-md-2">Lecturer's email</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_email" id="lecturer_email" class="form-control" placeholder="Enter lecturer's email address here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_img" class="col-md-2">Lecturer's image</label>
                    <div class="col-md-10">
                        <input type="text" name="lecturer_img" id="lecturer_img" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="lecturer_description" class="col-md-2">Lecturer's description</label>
                    <div class="col-md-10">
                        <textarea name="lecturer_description" id="lecturer_description" class="form-control" placeholder="Enter lecturer's description here" required></textarea>
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('events.index')}}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

