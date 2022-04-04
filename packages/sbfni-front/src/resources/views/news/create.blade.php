<x-pondit-limitless-master>
    <x-pondit-pl-card cardTitle="News">
        <form action='{{ route('news.store') }}' method='post'>
            @csrf
            
                <div class="form-group row">
                    <label for="img1" class="col-md-2">Enter image 1</label>
                    <div class="col-md-10">
                        <input type="text" name="img1" id="img1" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="script1" class="col-md-2">Enter script 1</label>
                    <div class="col-md-10">
                        <textarea name="script1" id="script1" class="form-control" placeholder="Enter script 1 here" required></textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="img2" class="col-md-2">Enter image 2</label>
                    <div class="col-md-10">
                        <input type="text" name="img2" id="img2" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="script2" class="col-md-2">Enter script 2</label>
                    <div class="col-md-10">
                        <textarea name="script2" id="script2" class="form-control" placeholder="Enter script 2 here" required></textarea>
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img1" class="col-md-2">Enter gallery image 1</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img1" id="gl_img1" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img2" class="col-md-2">Enter gallery image 2</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img2" id="gl_img2" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img3" class="col-md-2">Enter gallery image 3</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img3" id="gl_img3" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img4" class="col-md-2">Enter gallery image 4</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img4" id="gl_img4" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img5" class="col-md-2">Enter gallery image 5</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img5" id="gl_img5" class="form-control"  required />
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="gl_img6" class="col-md-2">Enter gallery image 6</label>
                    <div class="col-md-10">
                        <input type="text" name="gl_img6" id="gl_img6" class="form-control"  required />
                        
                    </div>
                </div>
                
            <div class="form-group">
                <x-pondit-form-btn />
            </div>
        </form>
        <x-slot name="cardFooter">
            <div></div>
            <div>
                <x-pondit-pl-btn icon="list" tooltip="List" href="{{ route('news.index')}}" />
            </div>
            <div></div>
        </x-slot>
    </x-pondit-pl-card>
</x-pondit-limitless-master>

