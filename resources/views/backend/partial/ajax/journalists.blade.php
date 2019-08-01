<table class="table">
    <th>Name</th><th>E-mail</th><th>Articles</th>
    @forelse($filtres as $user)
        @if($user->user_type != 1)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <?php $i=0; ?>
                @forelse($articles as $article)
                    @if($article->user_id == $user->id)
                        <?php $i++; ?>
                    @endif
                @empty
                @endforelse
                <td><?php echo "Total: ". $i; ?></td>
        @endif
    @empty
    @endforelse
</table>