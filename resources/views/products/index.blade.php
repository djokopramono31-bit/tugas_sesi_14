<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyShop - Toko Online</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        /* Header hero area */
        .hero {
            background: linear-gradient(135deg, #e0e0e0 0%, #c8c8c8 100%);
            padding: 60px 20px 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #111;
        }

        .hero p {
            color: #555;
            font-size: 1rem;
        }

        /* Section judul produk */
        .section-title {
            text-align: center;
            font-size: 1.7rem;
            font-weight: bold;
            margin: 40px 0 24px;
            color: #111;
        }

        /* Kartu produk */
        .product-card {
            background: #fff;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .product-card .no-image {
            width: 100%;
            height: 220px;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 0.9rem;
        }

        .product-card .card-body {
            padding: 20px;
        }

        .product-card .product-name {
            font-size: 1.05rem;
            font-weight: bold;
            color: #111;
            margin-bottom: 6px;
        }

        .product-card .product-price {
            font-size: 0.95rem;
            color: #333;
            margin-bottom: 16px;
        }

        .product-card .btn-cart {
            background-color: #0d6efd;
            color: #fff;
            border: none;
            padding: 8px 28px;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .product-card .btn-cart:hover {
            background-color: #0b5ed7;
        }

        /* Keterangan pagination */
        .pagination-info {
            font-size: 0.85rem;
            color: #555;
        }
    </style>
</head>
<body>

{{-- ===== Hero / Header ===== --}}
<div class="hero">
    <h1>Welcome to MyShop</h1>
    <p>Find the best products at the best prices!</p>
</div>

{{-- ===== Konten Utama ===== --}}
<div class="container pb-5">
    <h2 class="section-title">Our Products</h2>

    @if ($products->count() > 0)
        {{-- Grid produk: 3 kolom di layar besar --}}
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-sm-6 col-lg-4">
                    <div class="product-card h-100">

                        {{-- Gambar Produk --}}
                        @if ($product->image)
                            <img
                                src="{{ $product->image }}"
                                alt="{{ $product->name }}"
                            >
                        @else
                            <div class="no-image">
                                Tidak ada gambar
                            </div>
                        @endif

                        {{-- Info Produk --}}
                        <div class="card-body">
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            <button class="btn-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ===== Pagination ===== --}}
        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between mt-4 gap-3">
            <p class="pagination-info mb-0">
                Showing {{ $products->firstItem() }} to {{ $products->lastItem() }}
                of {{ $products->total() }} results
            </p>

            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="alert alert-warning text-center">
            Belum ada produk. Silakan jalankan seeder terlebih dahulu.
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
