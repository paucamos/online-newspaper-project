@extends('layouts.backend')
@extends('layouts.css')
@section('content')

    @if(Auth::user()->user_type==1)
       <a href="{{route('regions.create')}}"><img src="../public/images/add.png"></a> Add Region
        <table class="table">
            <th>Name</th><th>Description</th>
        @forelse($regions as $region)
            <tr>
                <td>{{$region->name}}</td>
                <td>{{$region->description}}</td>
                <td><a href="{{route('regions.show',$region->id)}}"><img src="../public/images/show.jpg" title="show"></a><a href="{{route('regions.edit',$region->id)}}"><img src="../public/images/edit.png" title="edit"></a><a href="{{route('destroyregion',$region->id)}}"><img src="../public/images/delete.png" title="delete"></a></td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif
@endsection