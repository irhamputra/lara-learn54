@extends('template.master')

@section('content')
    <h3>Todo Page | Single Page</h3>
    <h4>{{ $single }}</h4>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->nis_siswa }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        @endforeach

    </table>


@endsection