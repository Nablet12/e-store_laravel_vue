<form action="/product/ {{ $product -> id }}" method ="POST">
    @csrf
    @method ('PUT')
    <div>
        <label for="Title"> Title </label>
        <input type="text" value = "{{ $product -> Title }}" name = "Title">
    
        <label for="Category"> Category </label>
        <input type="text" value = "{{ $product -> Category }}" name = "Category">
    
        <label for="Sale Price"> Sale Price </label>
        <input type="text" value = "{{ $product -> Sale Price }}" name = "Sale Price">
    
        <label for="Bought Price"> Bought Price </label>
        <input type="text" value = "{{ $product -> Bought Price }}" name = "Bought Price">
    </div>
    <button type = "submit"> Save </button>
    </form>