<form action="/order" method = "POST">
    @csrf
    <div>
        <label for="User ID"> User ID </label>
        <input type="text" name = "User ID">

        <label for="Product ID"> Product ID </label>
        <input type="text" name = "Product ID">

        <label for="Total"> Total </label>
        <input type="text" name = "Total">

        <label for="Quantity"> Quantity </label>
        <input type="text" name = "Quantity">
    </div>
    <button type = "submit"> Save </button>
</form>