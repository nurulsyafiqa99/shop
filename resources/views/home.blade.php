<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakeShop - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdf3e3;
            color: #6c4e37;
        }
        .hero {
            background: url('https://i.pinimg.com/736x/a8/da/b5/a8dab5b0e74bd6800c214a0041ac3318.jpg') center/cover no-repeat;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
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
        .category-card img {
            border-radius: 8px;
        }
        .testimonial-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #6c4e37;
            border-color: #6c4e37;
        }
        .btn-primary:hover {
            background-color: #8a6a53;
        }
        .btn-warning {
            background-color: #ffd7ba;
            border-color: #ffd7ba;
            color: #6c4e37;
        }
        .btn-warning:hover {
            background-color: #ffb07d;
            color: #fff;
        }
        footer {
            background-color: #6c4e37;
        }
        footer p {
            color: #fdf3e3;
        }
        header nav a {
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease-in-out; /* Animasi transisi */
        }
        header nav a:hover {
            background-color: #ffd7ba;
            color: #6c4e37;
            transform: scale(1.1); /* Efek membesar saat hover */
        }
        .btn-home {
            background-color: #6c4e37;
            color: #fdf3e3;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 5px;
            transition: all 0.3s ease; /* Animasi transisi */
        }
        .btn-home:hover {
            background-color: #ffd7ba;
            color: #6c4e37;
            transform: translateY(-3px); /* Efek melayang saat hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
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

    <section class="hero">
        <div class="text-center">
            <h1>Welcome to CakeShop</h1>
            <p>Delicious cakes for every occasion</p>
            <a href="/products" class="btn btn-warning btn-lg">Shop Now</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Categories</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-card text-center">
                        <img src="https://i.pinimg.com/236x/aa/93/49/aa93493ea4041c18dad586e018211277.jpg" class="img-fluid mb-3" alt="Birthday Cakes">
                        <h5>Birthday Cake</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card text-center">
                        <img src="https://i.pinimg.com/236x/5d/e7/23/5de723936935b531b31a1822e2786025.jpg" class="img-fluid mb-3" alt="Wedding Cakes">
                        <h5>Croissant</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card text-center">
                        <img src="https://i.pinimg.com/236x/d5/28/74/d528744cd28cc4ef27d9d2781d987a1f.jpg" class="img-fluid mb-3" alt="Custom Cakes">
                        <h5>Cookies</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/99/e8/12/99e8127c91f747211afa30d447939d66.jpg" class="card-img-top" alt="Cake 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Donut</h5>
                            <p class="card-text">Rp. 25.000</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donutModal">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Donut -->
                <div class="modal fade" id="donutModal" tabindex="-1" aria-labelledby="donutModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="donutModalLabel">Donut Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                         <div class="modal-body">
                                <h5>Donut</h5>
                                <p><strong>Price:</strong> Rp. 25.000</p>
                                <p><strong>Ingredients:</strong> Flour, Sugar, Eggs, Butter, Milk, Baking Powder, Vanilla.</p>
                                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Payment</button>
            </div>
        </div>
    </div>
</div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/2a/37/13/2a3713c0785b9f6601f052534bb0a9b5.jpg" class="card-img-top" alt="Cake 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Macaroni</h5>
                            <p class="card-text">Rp. 100.000</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#macaroniModal">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Macaroni -->
                <div class="modal fade" id="macaroniModal" tabindex="-1" aria-labelledby="macaroniModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="macaroniModalLabel">Macaroni Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Macaroni</h5>
                                <p><strong>Price:</strong> Rp. 100.000</p>
                                <p><strong>Ingredients:</strong> Macaroni, Cheese, Cream, Spices.</p>
                                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" onclick="location.href='/payment-page'">Payment</button>
            </div>
        </div>
    </div>
</div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://i.pinimg.com/474x/eb/20/36/eb2036f7707c276485884a95731bb53f.jpg" class="card-img-top" alt="Cake 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cheese Cake</h5>
                            <p class="card-text">Rp. 135.000</p>
                           <!-- Button trigger modal -->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cheeseCakeModal">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Cheese Cake -->
                <div class="modal fade" id="cheeseCakeModal" tabindex="-1" aria-labelledby="cheeseCakeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cheeseCakeModalLabel">Cheese Cake Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Cheese Cake</h5>
                                <p><strong>Price:</strong> Rp. 135.000</p>
                                <p><strong>Ingredients:</strong> Cream Cheese, Sugar, Eggs, Butter, Graham Cracker Crumbs.</p>
                                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Payment</button>
            </div>
        </div>
    </div>
</div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/d3/f1/c1/d3f1c10158772f9585a2882a4f149c3e.jpg" class="card-img-top" alt="Cake 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cromboloni</h5>
                            <p class="card-text">Rp. 50.000</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cromboloniModal">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Cromboloni -->
                <div class="modal fade" id="cromboloniModal" tabindex="-1" aria-labelledby="cromboloniModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cromboloniModalLabel">Cromboloni Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Cromboloni</h5>
                                <p><strong>Price:</strong> Rp. 50.000</p>
                                <p><strong>Ingredients:</strong> Flour, Sugar, Eggs, Butter, Cream Cheese, Chocolate.</p>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-warning">Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"The cakes are simply amazing! Highly recommend CakeShop."</p>
                        <h5>- Silvia Anggriani.</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"Beautiful designs and delicious taste, perfect for any event."</p>
                        <h5>- Fina Rizqina.</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"Great customer service and on-time delivery. Loved it!"</p>
                        <h5>- Naila Zahira.</h5>
                    </div>
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
