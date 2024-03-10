
  <div class="modal fade" id="order-{{ $order->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title fs-6" id="order-{{ $order->id }}">Order No. {{ $order->order_number }}</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="small">
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($order->orderItems as $orderItem)
                         
                        <tr>
                            <td style="width: 7rem;">
                                <img src="{{ asset('storage/'. $orderItem->product->image_url) }}" alt="{{ $orderItem->name }}"
                                class="rounded w-100" style="min-width: 5rem;">
                            </td>
                            <td>
                                <a href="products/{{ $orderItem->product->slug }}" target="_blank" class="text-body">{{ $orderItem->product->name }}</a>
                            </td>
                            <td>{{ $orderItem->quantity }}</td>
                            <td>${{ $orderItem->price }}</td>
                            <td>${{ $orderItem->price * $orderItem->quantity }}</td>
                            
                        </tr>

                        @endforeach


                    </tbody>


                    <tfoot class="fw-bold">
                       <tr>
                        <td colspan="3"></td>
                        <td>Sub Total</td>
                        <td>${{ $order->subtotal }}</td>
                       </tr>
                       <tr>
                        <td colspan="3"></td>
                        <td>Tax (5%)</td>
                        <td>${{ $order->subtotal + $order->tax  }}</td>
                       </tr>
                       <tr>
                        <td colspan="3"></td>
                        <td>Total</td>
                        <td>${{ $order->total }}</td>
                       </tr>
                    </tfoot>

                </table>
            </div>
        </div>
      </div>
    </div>
  </div>