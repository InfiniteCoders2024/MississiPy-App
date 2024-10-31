<h2>Your shopping cart</h2>
@if($cartItems->isEmpty())
    <p>Your cart is empty.</p>
@else
    <h2>Your Cart:</h2>
    <ul>
        @foreach($cartItems as $item)
            <li>
                {{ $item->name }} - {{ $item->quantity }} - {{ $item->price }}
                <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                    <button type="submit">Remove</button>
                </form>
            </li>
        @endforeach
    </ul>
@endif