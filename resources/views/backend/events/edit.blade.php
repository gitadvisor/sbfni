<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Events </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('events.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Events <a class="btn btn-sm btn-info" href="{{ route('events.index') }}">List</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('events.update', ['event' => $events->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')


                <x-backend.form.input name="img1" type="file" :value="$events->img1"/>
                
                <x-backend.form.textarea name="description" >
                {{ $events->description }}
                </x-backend.form.textarea>

                <x-backend.form.input name="date" type="date" :value="$events->date"/>

                <x-backend.form.input name="time" type="time" :value="$events->time"/>
                
                <x-backend.form.input name="fee" type="number" :value="$events->fee"/>

                <x-backend.form.input name="location" :value="$events->location"/>

                <x-backend.form.textarea name="bring"  >
                {{ $events->bring }}
                 </x-backend.form.textarea>
 
                 <x-backend.form.input name="lecturer_name" :value="$events->lecturer_name"/>

                <x-backend.form.input name="lecturer_phone" :value="$events->lecturer_phone"/>

                <x-backend.form.input name="lecturer_email" type="email" :value="$events->lecturer_email"/>

                <x-backend.form.input name="lecturer_img" type="file" :value="$events->lecturer_img"/>

                <x-backend.form.textarea name="lecturer_description">
                {{ $events->lecturer_description }}
                  </x-backend.form.textarea>

                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>