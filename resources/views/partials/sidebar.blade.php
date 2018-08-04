
<aside class="col-md-4 blog-sidebar ">
    
    <div class="p-3 ">
        <h4 class="font-italic">Last five movies</h4>
        <ol class="list-unstyled mb-0">
            <li>
                @foreach($lastN as $last)            
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ "/movies/" . $last->id }}">{{ $last->title }}</a>
                    </li>
                @endforeach 
            </li>
        </ol>
    </div>

    
</aside>