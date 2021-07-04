<a href = "/Order/create"> New Order </a>
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
                    {{ $order -> user_id }}
                </td>
                <td>
                    {{ $order -> product_id }}
                </td>
                <td>
                    {{ $order -> total }}
                </td>
                <td>
                    {{ $order -> quantity }}
                </td>
                <td>
                    <a href = "/Order/ {{ $order -> id }}"> Show </a>
                    <a href = "/Order/ {{ $order -> id }} /edit"> Edit </a>
                    @csrf
                    @method('DELETE')
                    <button type = "submit"> Delete </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>