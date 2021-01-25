<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Bootstrap News Website Theme" />
    <title>Pending Requests</title>

    <!-- Bootstrap core CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />

    <meta name="theme-color" content="#7952b3" />

    <!-- Bootstrap core CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />
    <!-- Custom styles for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
        rel="stylesheet"
    />

    <!-- Font Awesome Icons -->
    <script
        src="https://kit.fontawesome.com/1e5964ee8c.js"
        crossorigin="anonymous"
    ></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse float-right"
                id="navbarNavDropdown"
            >
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class="nav-item mx-2">
                        <a
                            class="nav-link"
                            aria-current="page"
                            href="../admin/create_article_form_1.php"
                            ><i class="px-2 fas fa-pencil-alt"></i>Write an
                            Article</a
                        >
                    </li>
                    <li class="nav-item mx-2">
                        <a
                            class="btn btn-outline-danger btn-sm"
                            aria-current="page"
                            href="#"
                            >Logout</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-4">
        <p class="display-6 pt-3">
            <i class="fas fa-envelope-open-text"></i
            ><span class="px-3">Pending Requests</span>
        </p>

        <div class="categories-section my-5">
            <div class="card bg-light my-3">
                <div class="card-body row align-items-center">
                    <div class="content col-md-9">
                        <h5 class="card-title">
                            Ali Asad
                        </h5>
                        <p class="card-text text-muted">
                            <span class="text-dark">From:</span>
                            aliasad@gmail.com
                        </p>
                        <a
                            class="btn btn-sm btn-outline-primary me-2"
                            href="pending_requests_details.php"
                            >View Details</a
                        >
                    </div>
                    <div
                        class="col-md-3 d-flex justify-content-md-end justify-content-start mt-md-0 mt-3"
                    >
                        <p class="card-text text-muted">
                            7 Jan, 2021
                        </p>
                    </div>
                </div>
            </div>

            <div class="card bg-light my-3">
                <div class="card-body row align-items-center">
                    <div class="content col-md-9">
                        <h5 class="card-title">
                            Fahad Imran
                        </h5>
                        <p class="card-text text-muted">
                            <span class="text-dark">From:</span>
                            fahadimran@gmail.com
                        </p>
                        <a
                            class="btn btn-sm btn-outline-primary me-2"
                            href="pending_requests_details.php"
                            >View Details</a
                        >
                    </div>
                    <div
                        class="col-md-3 d-flex justify-content-md-end justify-content-start mt-md-0 mt-3"
                    >
                        <p class="card-text text-muted">
                            12 Dec, 2020
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
