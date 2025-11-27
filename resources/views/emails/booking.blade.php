<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Inquiry</title>
    <style>
        /* Simple, email-friendly styles */
        body { background:#f4f7fb; margin:0; padding:20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color:#333;}
        .email-wrap { max-width:700px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(11,22,35,0.08); }
        .email-header { padding:24px 28px; background:linear-gradient(90deg,#0ea5a3,#2563eb); color:white; }
        .email-header h1 { margin:0; font-size:20px; font-weight:700; letter-spacing:0.2px; }
        .email-body { padding:24px 28px; }
        .section-title { font-size:14px; font-weight:700; color:#0f172a; margin-bottom:12px; }
        table.info { width:100%; border-collapse:collapse; margin-bottom:18px; }
        table.info td, table.info th { padding:6px 8px; vertical-align:top; }
        table.products { border-collapse:collapse; width:100%; margin-bottom:18px; }
        table.products th { background:#f1f5f9; padding:10px; text-align:left; font-size:13px; color:#0f172a; border-bottom:1px solid #e2e8f0; }
        table.products td { padding:10px; border-bottom:1px solid #e6eef8; font-size:13px; color:#334155; }
        .product-cell { display:flex; align-items:center; gap:12px; }
        .product-thumb { width:64px; height:64px; border-radius:6px; object-fit:cover; background:#f8fafc; border:1px solid #e6eef8; }
        .meta { font-size:12px; color:#64748b; }
        .totals { text-align:right; margin-top:8px; font-weight:700; }
        .subtotal-row td { border:none; font-weight:600; }
        .block { border-radius:6px; background:#fbfdff; padding:12px; border:1px solid #eef2ff; }
        @media screen and (max-width:520px){ .product-thumb { width:48px;height:48px; } .email-wrap { margin:0 8px; } }
    </style>
</head>
<body>
<div class="email-wrap">
    <div class="email-header">
        <h1>New Booking Inquiry</h1>
        <div style="margin-top:8px; font-size:12px; opacity:0.95">We received a booking request — details below</div>
    </div>

    <div class="email-body">
        <div class="section block">
            <div class="section-title">Customer Details</div>
            <table class="info">
                <tr>
                    <td style="width:160px; font-weight:700">Customer</td>
                    <td style="width:8px">:</td>
                    <td>{{ $details->full_name ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:700">Company</td>
                    <td>:</td>
                    <td>{{ $details->company_name ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:700">Email</td>
                    <td>:</td>
                    <td>{{ $details->email ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:700">Phone</td>
                    <td>:</td>
                    <td>{{ $details->phone_number ?? '-' }}</td>
                </tr>
                @if(!empty($details->project_type))
                    <tr>
                        <td style="font-weight:700">Project Type</td>
                        <td>:</td>
                        <td>{{ $details->project_type }}</td>
                    </tr>
                @endif
                @if(!empty($details->billing_address))
                    <tr>
                        <td style="font-weight:700">Billing Address</td>
                        <td>:</td>
                        <td>{{ $details->billing_address }}</td>
                    </tr>
                @endif
                @if(!empty($details->shipping_address))
                    <tr>
                        <td style="font-weight:700">Shipping Address</td>
                        <td>:</td>
                        <td>{{ $details->shipping_address }}</td>
                    </tr>
                @endif
                @if(!empty($details->additional_comments))
                    <tr>
                        <td style="font-weight:700">Comments</td>
                        <td>:</td>
                        <td>{{ $details->additional_comments }}</td>
                    </tr>
                @endif
            </table>
        </div>

        <div style="height:12px"></div>

        <div class="section">
            <div class="section-title">Products</div>

            @php
                $items = $details->bookingProduct ?? collect();
                $subtotal = 0;
            @endphp

            @if($items->count() === 0)
                <div class="block">No products were attached to this booking.</div>
            @else
                <table class="products">
                    <thead>
                    <tr>
                        <th style="width:56%">Product</th>
                        <th style="width:12%">Unit</th>
                        <th style="width:8%">Qty</th>
                        <th style="width:12%">Item Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $p)
                        @php
                            // p is a BookingProduct model. Product relation may exist.
                            $prod = $p->product ?? null;
                            $prodName = $prod->product_name ?? ($p->product_name ?? ('#' . ($p->product_id ?? '')));
                            $prodImage = $prod->attachment_url ?? null;
                            $qty = (int)($p->product_quantity ?? 0);
                            $price = number_format((float)($p->unit_price ?? 0), 2);
                            $lineTotal = (float)($p->total_amount ?? ($qty * ($p->unit_price ?? 0)));
                            $subtotal += $lineTotal;
                        @endphp
                        <tr>
                            <td>
                                <div class="product-cell">
                                    @if($prodImage)
                                        <img class="product-thumb" src="{{ asset($prodImage) }}" alt="{{ $prodName }}">
                                    @else
                                        <div class="product-thumb" style="display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:12px">No image</div>
                                    @endif
                                    <div>
                                        <div style="font-weight:700">{{ $prodName }}</div>
                                        <div class="meta">{{ $prod && !empty($prod->unit_price) ? 'AED '.number_format($prod->unit_price,2) : '' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>AED {{ $price }}</td>
                            <td>{{ $qty }}</td>
                            <td>AED {{ number_format($lineTotal,2) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <table style="width:100%; margin-top:6px; border-collapse:collapse;">
                    <tr>
                        <td style="width:70%"></td>
                        <td style="width:30%;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr class="subtotal-row">
                                    <td style="padding:8px; text-align:left;">Subtotal</td>
                                    <td style="padding:8px; text-align:right;">AED {{ number_format($subtotal,2) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            @endif
        </div>

        <div style="height:16px"></div>

        <div class="meta" style="font-size:12px; text-align:center; padding-bottom:18px">This is an automatically generated email. Please do not reply to this message.</div>

    </div>
</div>
</body>
</html>
