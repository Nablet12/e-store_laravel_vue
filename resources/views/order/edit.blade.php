<form action="/order/ {{ $order -> id }}" method ="POST">
@csrf
@method ('PUT')
<div>
    <label for="User ID"> User ID </label>
    <input type="text" value = "{{ $order -> User ID }}" name = "User ID">

    <label for="Product ID"> Product ID </label>
    <input type="text" value = "{{ $order -> Product ID }}" name = "Product ID">

    <label for="Total"> Total </label>
    <input type="text" value = "{{ $order -> Total }}" name = "Total">

    <label for="Quantity"> Quantity </label>
    <input type="text" value = "{{ $order -> Quantity }}" name = "Quantity">
</div>
<button type = "submit"> Save </button>
</form>