<a href = "/product/create"> New Product </a>
<table>
    <thead>
        <tr>
            <td>
                ID
            </td>
            <td>
                Title
            </td>
            <td>
                Category
            </td>
            <td>
                Sale Price
            </td>
            <td>
                Bought Price
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product )
            <tr>
                <td>
                    {{ $product -> id }}
                </td>
                <td>
                    {{ $product -> Title }}
                </td>
                <td>
                    {{ $product -> Category }}
                </td>
                <td>
                    {{ $product -> Sale Price }}
                </td>
                <td>
                    {{ $product -> Bought Price }}
                </td>
                <td>
                    <a href = "/product/ {{ $product-> id }}"> Show </a>
                    <a href = "/product/ {{ $product -> id }}/edit"> Edit </a>
                    @csrf
                    @method('DELETE')
                    <button type = "submit"> Delete </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>