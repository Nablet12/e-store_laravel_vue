<a href = "/users/create"> New User </a>
<table>
    <thead>
        <tr>
            <td>
                ID
            </td>
            <td>
                name
            </td>
            <td>
                Wallet
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($userss as $users )
            <tr>
                <td>
                    {{ $users -> id }}
                </td>
                <td>
                    {{ $users -> name }}
                </td>
                <td>
                    {{ $users -> Wallet }}
                </td>
                <td>
                    <a href = "/users/ {{ $users -> id }}"> Show </a>
                    <a href = "/users/ {{ $users -> id }}/edit"> Edit </a>
                    @csrf
                    @method('DELETE')
                    <button type = "submit"> Delete </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>