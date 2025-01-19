<div class="container">
    <div>
    <a href="{{ route('register.create') }}" class="btn btn-primary">Create New User</a>
    <div><a href="{{ route('login')}}" class="btn btn-primary">Logout</a></div>
</div>

    <table>
        <thead>
            <tr>
                <th>S.n</th>
                <th>FName</th>
                <th>LName</th>
                <th>Email</th>
                <th>Password</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($registers as $register)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $register->fname }}</td>
                <td>{{ $register->lname }}</td>
                <td>{{ $register->email }}</td>
                <td>{{ $register->password }}</td>
                
                <td>
                    <div>
                        <div>
                            <a href="{{ route('register.edit', $register) }}" class="btn btn-primary">Edit</a>
                        </div>
                        <div>
                            <form action="{{ route('register.destroy', $register) }}" method="POST">
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

