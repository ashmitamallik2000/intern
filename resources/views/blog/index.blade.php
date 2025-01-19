<div class="container">
    <div>
    <a href="{{ route('blog.create') }}" class="btn btn-primary">Create New Blog</a>
</div>
<div><a href="{{ route('login')}}" class="btn btn-primary">Logout</a></div>
    <table>
        <thead>
            <tr>
                <th>S.n</th>
                <th>Title</th>
                <th>Url</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->url }}</td>
                <td>{{ $blog->description }}</td>
                <td>
                    <div>
                        <div>
                            <a href="{{ route('blog.edit', $blog) }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div>
                            <form action="{{ route('blog.destroy', $blog) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

