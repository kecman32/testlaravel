@extends('main')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    About me {{ $data['fullname'] }}
                    <p>Email me at: {{ $data['email']}} </p>

                </div>

               
            </div>
@endsection