<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Checkout - Shipping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 2rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            border-radius: 0;
        }
        .checkout-summary {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>DETAIL PENGIRIMAN</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h4>INFORMASI KONTAK</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fullName">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="fullName" name="name" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phoneNumber">Nomor Telepon *</label>
                                    <input type="tel" class="form-control" id="phoneNumber" name="nomer_telepon" placeholder="Nomor Telepon" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="address">Alamat Lengkap *</label>
                                    <input type="text" class="form-control" id="address" name="alamat" placeholder="Alamat Lengkap" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah Buku *</label>
                                <input type="number" class="form-control" id="quantity" name="jumlah" placeholder="Jumlah Buku" required min="1">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Lanjutkan ke Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card checkout-summary">
                    <div class="card-header">
                        <h3>RINGKASAN BELANJA</h3>
                    </div>
                    <div class="card-body">
                        <p>Item 1: Nama Produk</p>
                        <p>Harga: Rp. 500.000</p>
                        <hr>
                        <p>Total: Rp. 500.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
