@extends('layouts.backend')
@extends('layouts.css')
@section('content')

    @if(Auth::user()->user_type==1)
       <a href="{{route('sections.create')}}"><img src="../public/images/add.png"></a> Add Section
        <table class="table">
            <th>Name</th><th>Description</th>
        @forelse($sections as $section)
            <tr>
                <td>{{$section->name}}</td>
                <td>{{$section->description}}</td>
                <td><a href="{{route('sections.show',$section->id)}}"><img src="../public/images/show.jpg" title="show"></a><a href="{{route('sections.edit',$section->id)}}"><img src="../public/images/edit.png" title="edit"></a><a href="{{route('destroysection',$section->id)}}"><img src="../public/images/delete.png" title="delete"></a></td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif
@endsection