<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CakeShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdf3e3;
            color: #6c4e37;
            line-height: 1.6;
        }
        header {
            background-color: #6c4e37;
        }
        header h1, header nav a {
            color: #fdf3e3;
        }
        header nav a:hover {
            color: #ffd7ba;
        }
        .section-title {
            font-weight: 600;
            color: #6c4e37;
            margin-bottom: 20px;
        }
        .highlight {
            color: #8a6a53;
            font-weight: 500;
        }
        footer {
            background-color: #6c4e37;
            color: #fdf3e3;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1>CakeShop</h1>
            <nav>
                <a href="/" class="me-3 text-decoration-none">Home</a>
                <a href="/products" class="me-3 text-decoration-none">Pembeli</a>
                <a href="/about" class="text-decoration-none">About</a>
            </nav>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">About CakeShop</h2>
            <p class="text-center">
                <span class="highlight">CakeShop</span> didirikan dengan cinta terhadap seni pembuatan kue. Kami berkomitmen untuk menyediakan kue berkualitas tinggi dengan desain yang indah dan rasa yang tak terlupakan. Dari ulang tahun hingga pernikahan, kami hadir untuk membuat setiap momen menjadi lebih manis.
            </p>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center section-title">Our Mission</h2>
            <p class="text-center">
                Misi kami adalah memberikan pengalaman terbaik kepada pelanggan melalui kue-kue yang tidak hanya lezat, tetapi juga indah dan dibuat dengan bahan berkualitas terbaik. Kami percaya bahwa setiap gigitan harus penuh dengan kenikmatan dan kebahagiaan.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Our Values</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <h5 class="mb-3">✨ Quality</h5>
                    <p>Kami memastikan bahwa setiap kue dibuat dengan bahan terbaik untuk rasa yang sempurna.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">💖 Creativity</h5>
                    <p>Desain kue kami mencerminkan keindahan, kreativitas, dan keunikan.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">🌟 Customer Satisfaction</h5>
                    <p>Kepuasan pelanggan adalah prioritas utama kami dalam setiap layanan.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-3">
        <p>&copy; {{ date('Y') }} CakeShop. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
