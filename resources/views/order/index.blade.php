<a href = "/order/create"> New Order </a>
<table>
    <thead>
        <tr>
            <td>
                ID
            </td>
            <td>
                User ID
            </td>
            <td>
                Product ID
            </td>
            <td>
                Total
            </td>
            <td>
                Quantity
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order )
            <tr>
                <td>
                    {{ $order -> id }}
                </td>
                <td>
                    {{ $order -> User ID }}
                </td>
                <td>
                    {{ $order -> Product ID }}
                </td>
                <td>
                    {{ $order -> Total }}
                </td>
                <td>
                    {{ $order -> Quantity }}
                </td>
                <td>
                    <a href = "/order/ {{ $order -> id }}"> Show </a>
                    <a href = "/order/ {{ $order -> id }}/edit"> Edit </a>
                    @csrf
                    @method('DELETE')
                    <button type = "submit"> Delete </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>