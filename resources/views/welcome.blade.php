 @extends('layouts.app')

@section('content')

    <div class="container">
            <div class="row">
              <div class="col-12 bg-white p-4">
                    <h3>{{$title}}</h3>
                    <ul>
                        @foreach ($lists as $list)
                        <li>{{$list}}</li>
                        @endforeach
                    </ul>
                    <p><a href="/about">about us page</a></p>
                    <p><a href="{{url('all-products')}}">All products</a></p>
              </div>
         </div>
    </div>

@endsection



