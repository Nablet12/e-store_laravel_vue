<form action="/users/ {{ $users -> id }}" method ="POST">
    @csrf
    @method ('PUT')
    <div>
        <label for="name"> name </label>
        <input type="text" value = "{{ $users -> name }}" name = "name">
    
        <label for="Wallet"> Wallet </label>
        <input type="text" value = "{{ $users -> Wallet }}" name = "Wallet">
    
    </div>
    <button type = "submit"> Save </button>
    </form>