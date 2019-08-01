<table class="table">
    <th>Name</th><th>Description</th><th>Tools</th>
    @forelse($filtres as $section)
        <tr>
            <td>{{$section->name}}</td>
            <td>{{$section->description}}</td>
            <td><a href="{{route('sections.show',$section->id)}}"><i class="fas fa-search"></i></a><a href="{{route('sections.edit',$section->id)}}"><i class="fas fa-pencil-alt"></i></a><a href="{{route('destroysection',$section->id)}}"><i class="fas fa-trash"></i></a></td>
        </tr>
    @empty
        <h1>Empty</h1>
    @endforelse
</table>