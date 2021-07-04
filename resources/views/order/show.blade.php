<h1>
     User ID: {{ @$order -> order -> User ID }}
</h1>
<h2>
    Product ID: {{ @$order -> order -> Product ID }}
</h2>
<h3>
    Total Amount: {{ @$order -> order -> Total }}
</h3>
<h3>
    Quantity: {{ @order -> order -> Quantity }}
</h3>
<a href = "/order"> Back to Main Order List</a>