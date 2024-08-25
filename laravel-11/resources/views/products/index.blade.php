<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
</head>
<body style="background: lightgray">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                </ul>
                <form class="d-flex" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">CRUD with Laravel</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-md btn-success mb-3">ADD PRODUCT</a>
                        <a href="#" id="downloadPDF" class="btn btn-md btn-info mb-3">Download PDF</a>
                        <table id="productTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">STOCK</th>
                                    <th scope="col" style="width: 20%" id="actionsHeader">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ "Rp " . number_format($product->price, 2, ',', '.') }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td class="text-center" id="actionsCell">
                                            <form onsubmit="return confirm('Serius Kamu ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data Products belum Tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.getElementById('downloadPDF').addEventListener('click', function () {
        // Menyembunyikan kolom aksi sebelum menangkap gambar
        document.getElementById('actionsHeader').style.display = 'none';
        Array.from(document.querySelectorAll('#actionsCell')).forEach(cell => cell.style.display = 'none');
        
        // Menggunakan html2canvas untuk menangkap tabel sebagai gambar
        html2canvas(document.querySelector('#productTable')).then(canvas => {
            const imgData = canvas.toDataURL('image/png');

            // Menyiapkan dokumen PDF menggunakan pdfmake
            const docDefinition = {
                content: [
                    { text: 'Product List', style: 'header' },
                    {
                        image: imgData,
                        width: 500 // Atur lebar gambar di PDF sesuai kebutuhan
                    }
                ],
                styles: {
                    header: {
                        fontSize: 18,
                        bold: true
                    }
                }
            };

            // Membuat dan mengunduh PDF menggunakan pdfmake
            pdfMake.createPdf(docDefinition).download('products.pdf').then(() => {
                // Menampilkan kembali kolom aksi setelah unduhan selesai
                document.getElementById('actionsHeader').style.display = '';
                Array.from(document.querySelectorAll('#actionsCell')).forEach(cell => cell.style.display = '');
            });
        }).catch(error => {
            console.error('Error generating PDF:', error);

            // Menampilkan kembali kolom aksi jika terjadi kesalahan
            document.getElementById('actionsHeader').style.display = '';
            Array.from(document.querySelectorAll('#actionsCell')).forEach(cell => cell.style.display = '');
        });
    });
    </script>
</body>
</html>
