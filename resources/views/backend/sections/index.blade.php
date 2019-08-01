@extends('layouts.backend')
@extends('layouts.css')
@section('content')

    @if(Auth::user()->user_type==1)
        <div class="row">
            <div class="col-md-2">
                <div>
                    <a class="list-group-item list-group-item-action active" href="{{route('sections.create')}}"><span><i class="fas fa-plus-circle"></i></span> Add Section </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group mb-3" style="margin-top:12px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                    <input id="search-bar-sections" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div id="contingut">
            <table class="table">
                <th>Name</th><th>Description</th><th>Tools</th>
            @forelse($sections as $section)
                <tr>
                    <td>{{$section->name}}</td>
                    <td>{{$section->description}}</td>
                    <td><a href="{{route('sections.show',$section->id)}}"><i class="fas fa-search"></i></a><a href="{{route('sections.edit',$section->id)}}"><i class="fas fa-pencil-alt"></i></a><a href="{{route('destroysection',$section->id)}}"><i class="fas fa-trash"></i></a></td>
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
            $('#search-bar-sections').keyup(function () {
                var input = $('#search-bar-sections').val();
                $.ajax({
                    url: '{{route('listSection')}}?sectionList='+ input,
                    method: 'GET',
                    success: function (data, status) {
                        $('#contingut').html(data);
                    }
                });
            });
        });
    </script>
@endsection