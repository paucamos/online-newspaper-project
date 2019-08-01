@extends('layouts.backend')
@extends('layouts.css')
@section('content')

    @if(Auth::user()->user_type==1)<div class="row">
        <div class="col-md-2">
            <div>
                <a class="list-group-item list-group-item-action active" href="{{route('regions.create')}}"><span><i class="fas fa-plus-circle"></i></span> Add Region </a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="input-group mb-3" style="margin-top:12px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input id="search-bar-regions" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div id="contingut">
        <table class="table">
            <th>Name</th><th>Description</th>
        @forelse($regions as $region)
            <tr>
                <td>{{$region->name}}</td>
                <td>{{$region->description}}</td>
                <td><a href="{{route('regions.show',$region->id)}}"><i class="fas fa-search"></i></a><a href="{{route('regions.edit',$region->id)}}"><i class="fas fa-pencil-alt"></i></a><a href="{{route('destroyregion',$region->id)}}"><i class="fas fa-trash"></i></a></td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    </div>
    @endif
@endsection
@section('jquery')
    <script>

        $(document).ready(function () {
            $('#search-bar-regions').keyup(function () {
                var input = $('#search-bar-regions').val();
                $.ajax({
                    url: '{{route('listRegion')}}?listRegion='+ input,
                    method: 'GET',
                    success: function (data, status) {
                        $('#contingut').html(data);
                    }
                });
            });
        });
    </script>
@endsection