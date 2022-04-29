<p>                    
    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->description }}</p>
    @endforeach        
    
 </p>
