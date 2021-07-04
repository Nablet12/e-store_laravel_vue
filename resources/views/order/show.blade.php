<h1>
     User ID: {{ @$order -> user_id }}
</h1>
<p>
    Product ID: {{ @$order -> product_id }}
</p>
<p>
    Total Amount: {{ @$order -> total }}
</p>
<p>
    Quantity: {{ @$order -> quantity }}
</p>
<a href = "/Order"> Back to Main Order List</a>