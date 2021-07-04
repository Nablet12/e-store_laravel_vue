<form action="/order" method = "POST">
    @csrf
    <div>
        <label for="name"> name </label>
        <input type="text" name = "name">

        <label for="Wallet"> Wallet </label>
        <input type="text" name = "Wallet">

    </div>
    <button type = "submit"> Save </button>
</form>