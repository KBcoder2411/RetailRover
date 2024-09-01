@include('layouts.customer.header')

<style>
  /* Add your custom styles here */
</style>

<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Cart</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section before-footer-section">
  <div class="container mt-5">
    <h1>Your Cart</h1>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cartItems as $cartItem)
        <tr data-item-id="{{ $cartItem->id }}">
          <td class="product-thumbnail">
            <img src="{{ asset('public/images/'.$cartItem->product->mainimage) }}" height="200" width="100" alt="Image" class="img-fluid">
          </td>
          <td>
            {{ $cartItem->product->title }}
          </td>
          <td class="product-price">₹{{ number_format($cartItem->product->saleprice, 2) }}</td>
          <td>
            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-black decrease" type="button" onclick="updateQuantity('decrease', {{ $cartItem->id }})">&minus;</button>
              </div>
              <input type="number" name="quantity" class="form-control text-center quantity-amount" value="{{ $cartItem->quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" min="1" id="quantity-{{ $cartItem->id }}" onchange="quantityChanged({{ $cartItem->id }}, this.value)">
              <div class="input-group-append">
                <button class="btn btn-outline-black increase" type="button" onclick="updateQuantity('increase', {{ $cartItem->id }})">&plus;</button>
              </div>
            </div>
          </td>
          <td id="total-{{ $cartItem->id }}">₹{{ number_format($cartItem->product->saleprice * $cartItem->quantity, 2) }}</td>
          <td>
            <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-black btn-sm">X</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="row justify-content-end">
      <div class="col-md-6">
        <h2>Billing Details</h2>
        <div class="p-3 p-lg-5 border bg-white">
          <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="fname" required>
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="lname" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                <textarea class="form-control" id="c_address" name="address" required></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_state_country" class="text-black">State<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_state_country" name="state" required>
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_postal_zip" name="zip" required>
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email_address" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" name="phone" required>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary-hover-outline">Place Order</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-6">
        <h2>Your Order</h2>
        <div class="p-3 p-lg-5 border bg-white">
          <div>
            <div id="gst">
              <h5>GST (18%): ₹<span id="gst-value">0.00</span></h5>
            </div>
            <div id="delivery-charges">
              <h5>Delivery Charges: ₹<span id="delivery-charges-value">50.00</span></h5>
            </div>
            <div id="grand-total">
              <h3>Grand Total: ₹<span id="grand-total-value">0.00</span></h3>
            </div>
          </div>

          <div class="border p-3 mb-3">
            <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Pay on Delivery</a></h3>

            <div class="collapse" id="collapsebank">
              <div class="py-2">
                <p class="mb-0">Make your payment directly to our Delivery agent while receiving your Product.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@include('layouts.customer.footer')


<script>
  function updateQuantity(action, id) {
    var quantityInput = document.getElementById(`quantity-${id}`);
    var currentQuantity = parseInt(quantityInput.value);

    if (action === 'increase') {
      quantityInput.value = currentQuantity + 1;
    } else if (action === 'decrease' && currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
    }

    quantityChanged(id, quantityInput.value);
  }

  function quantityChanged(id, quantity) {
    if (quantity < 1) {
      alert('Quantity must be at least 1');
      return;
    }

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = `{{ route('cart.update', '') }}/${id}`;

    var token = document.createElement('input');
    token.type = 'hidden';
    token.name = '_token';
    token.value = '{{ csrf_token() }}';

    var qtyInput = document.createElement('input');
    qtyInput.type = 'hidden';
    qtyInput.name = 'quantity';
    qtyInput.value = quantity;

    form.appendChild(token);
    form.appendChild(qtyInput);

    document.body.appendChild(form);
    form.submit();
  }

  function updateGrandTotal() {
    var grandTotal = 0;
    var items = document.querySelectorAll('tbody tr');

    items.forEach(item => {
      var price = parseFloat(item.querySelector('.product-price').innerText.replace('₹', '').replace(/,/g, '').trim());
      var quantity = parseInt(item.querySelector('.quantity-amount').value, 10);
      var total = price * quantity;

      item.querySelector(`#total-${item.dataset.itemId}`).innerText = `₹${total.toFixed(2)}`;
      grandTotal += total;
    });

    var gst = grandTotal * 0.18; // Calculate GST (assuming 18%)
    var deliveryCharges = 50; // Example delivery charges

    var finalTotal = grandTotal + gst + deliveryCharges;

    document.getElementById('grand-total-value').innerText = `${finalTotal.toFixed(2)}`;
    document.getElementById('gst-value').innerText = `${gst.toFixed(2)}`;
    document.getElementById('delivery-charges-value').innerText = `${deliveryCharges.toFixed(2)}`;
  }

  // Update grand total when the page loads
  window.addEventListener('load', updateGrandTotal);
</script>