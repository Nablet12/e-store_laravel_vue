<form action = "/Order/ {{ $order -> id }}" method = "POST">
@csrf
@method ('PUT')
<div>
    <label for = "user_id"> User ID </label>
    <input type="text" value = "{{ $order -> user_id }}" name = "User ID">

    <label for = "product_id"> Product ID </label>
    <input type="text" value = "{{ $order -> product_id }}" name = "Product ID">

    <label for = "total"> Total </label>
    <input type="text" value = "{{ $order -> total }}" name = "Total">

    <label for = "quantity"> Quantity </label>
    <input type="text" value = "{{ $order -> quantity }}" name = "Quantity">
</div>
<button type = "submit"> Save </button>
</form>