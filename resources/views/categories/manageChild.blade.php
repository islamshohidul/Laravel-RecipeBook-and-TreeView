
<ul>
    @foreach($children as $child)
        <li>
            {{ $child->name }}
            @if(count($child->children))
                @include('categories.manageChild',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>