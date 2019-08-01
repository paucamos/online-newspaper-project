<table class="table">
    <th>Name</th><th>Description</th>
    @forelse($filtres as $region)
        <tr>
            <td>{{$region->name}}</td>
            <td>{{$region->description}}</td>
            <td><a href="{{route('regions.show',$region->id)}}"><i class="fas fa-search"></i></a><a href="{{route('regions.edit',$region->id)}}"><i class="fas fa-pencil-alt"></i></a><a href="{{route('destroyregion',$region->id)}}"><i class="fas fa-trash"></i></a></td>
        </tr>
    @empty
        <h1>Empty</h1>
    @endforelse
</table>