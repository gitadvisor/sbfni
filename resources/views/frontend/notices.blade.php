<x-frontend.layouts.master>
    @push('css')
    <style>
        .notice{
            height: 200px;
        }
    </style>
    @endpush
<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/parallax-03.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Notices</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Notices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    {{--<div class="col-md-12 mb-2 mt-5">
        <div class="content-wrapper">
            <div class="content">
                <div class="card card-height">
                    
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                
                                    
                               @forelse ($notice as $notice)
                                    <tr>
                                <td>
                                    
                                    <p> {{ $notice->title }}</p>
                                    <a href="{{ asset('storage/notices/'.$notice->pdf) }}" target="_blank"><div class="d-flex justify-content-between"><div><i class="fa-solid fa-file-pdf"><h3>{{ $notice->subject }} </h3></i>
                                    <p> <samp>Date: {{ $notice->date }}</samp></p>
                                             
                                </td>
                            </tr> @empty
                                    <h3>No Notice Found</h3>
                                @endforelse 
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="container">
        @forelse($notice as $notice)
        <div class="card notice">
            <div class="card-body ">
                <h5><a href="{{ asset('storage/notices/'.$notice->pdf) }}" target="_blank">  {{ $notice->title }}</a></h5>
                <div class="dateSubject">
                    <p>{{ $notice->subject }}</p>
                    <p><i class="fa-solid fa-calendar" aria-hidden="true"> {{ $notice->date }}</i> </p>
                </div>
                
            </div>
        </div>
        @empty
        <h3>No Notice Found</h3>
        @endforelse
        <!-- /.row -->
    </div>
</x-frontend.layouts.master>