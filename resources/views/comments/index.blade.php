index.blade.php file content

<h1>comments</h1>
<ul>
    @foreach($comments as $comment)
    <li>{{$comment->content }}</li>
    @endforeach
</ul>