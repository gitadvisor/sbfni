<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="Teachers">
        <form action='{{ route('teachers.store') }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="designation" class="col-md-2">Designation</label>
                    <div class="col-md-10">
                        <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter designation here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description here" required></textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="qualification" class="col-md-2">Educational Qualification</label>
                    <div class="col-md-10">
                        <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Enter educational qualification here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="phone" class="col-md-2">Phone</label>
                    <div class="col-md-10">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email address here" required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="img" class="col-md-2">Image</label>
                    <div class="col-md-10">
                        <input type="text" name="img" id="img" class="form-control"  required />
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('teachers.index')}}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

