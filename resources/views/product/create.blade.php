<form action="/product" method = "POST">
    @csrf
    <div>
        <label for="Title"> Title </label>
        <input type="text" name = "Title">

        <label for="Category"> Category </label>
        <input type="text" name = "Category">

        <label for="Sale Price"> Sale Price </label>
        <input type="text" name = "Sale Price">

        <label for="Bought Price"> Bought Price </label>
        <input type="text" name = "Bought Price">
    </div>
    <button type = "submit"> Save </button>
</form>