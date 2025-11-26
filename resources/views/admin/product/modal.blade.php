<form id="form" method="POST" action="#">
    @csrf
    <input type="hidden" name="data-url" id="data-url" value="{{ Request::url() }}">
    <input type="hidden" name="data-id" id="data-id" value="{{ $product->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                <input type="text" name="product_name" id="product_name"
                       class="form-control" value="{{ $product->product_name }}" placeholder="Enter Product Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="attachment_url">Attachment URL @if($product->attachment_url) <a
                        href="{{getFromDisk($product->attachment_url)}}" target="_blank"><i
                            class="fas fa-eye"></i></a> @endif</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="attachment_url" accept=".png,.jpeg,.jpg"
                           id="attachment_url">
                    <label class="custom-file-label" for="attachment_url">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="product_quantity">Product Quantity <span class="text-danger">*</span></label>
                <input type="number" name="product_quantity" id="product_quantity" class="form-control" required value="{{$product->quantity ?? 0}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
                <input type="text" name="unit_price" id="unit_price" class="form-control unit-price" required value="{{$product->unit_price}}">
            </div>
        </div>
    </div>
</form>
