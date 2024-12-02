<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf8f8;
            color: #343a40;
        }
        .pricing-plan {
            margin-top: 80px;
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.1rem;
            color: #6c757d;
        }
        .pricing-plan .card {
            border: 1px solid black;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
            padding: 20px;
        }
        .pricing-plan .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .card h4 {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 25px;
            color: #7e8184;
        }
        ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 25px;
        }
        ul li {
            font-size: 1rem;
            margin: 8px 0;
        }
        .btn-plan {
            background-color: #FF6B6B;
            border-color: #FF6B6B;
            color: white;
            border-radius: 30px;
            font-weight: 600;
            padding: 10px 30px;
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .btn-plan:hover {
            background-color: #FF4B4B;
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }
        .current-plan {
            background-color: #7e8184;
            border-color: #7e8184;
            color: white;
            border-radius: 30px;
            font-weight: 600;
            padding: 10px 30px;
        }
        .current-plan:hover {
            background-color: #5a6268;
        }
        .container {
            max-width: 1100px;
        }
        .row {
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="container pricing-plan">
        <h1>Select a Plan</h1>
        <p>Choose the plan that best fits your needs. You can easily change your plan or cancel at any time.</p>

        <div class="row justify-content-center">
            <!-- Personal Plan -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">BASIC</h3>
                        <h4>$9/Month</h4>
                        <!-- Your Plan Button -->
                        <button class="btn current-plan">Your Plan</button>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check"></i> Unlimited ad-free</li>
                            <li><i class="fas fa-check"></i> 1 supported device at a time</li>
                            <li><i class="fas fa-check"></i> Watch in 720p</li>
                            <li><i class="fas fa-check"></i> Download on 1 supported device</li>
                            <li><i class="fas fa-check"></i> Netflix spatial audio</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Professional Plan -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">STANDARD</h3>
                        <h4>$16/Month</h4>
                        <!-- Upgrade Button -->
                        <button class="btn btn-plan">Upgrade</button>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check"></i> Unlimited ad-free</li>
                            <li><i class="fas fa-check"></i> 2 supported devices at a time</li>
                            <li><i class="fas fa-check"></i> Watch in 1080p</li>
                            <li><i class="fas fa-check"></i> Download on 2 supported devices</li>
                            <li><i class="fas fa-check"></i> Netflix spatial audio</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Business Plan -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">PREMIUM</h3>
                        <h4>$24/Month</h4>
                        <!-- Upgrade Button -->
                        <button class="btn btn-plan">Upgrade</button>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check"></i> Unlimited ad-free</li>
                            <li><i class="fas fa-check"></i> 4 supported devices </li>
                            <li><i class="fas fa-check"></i> Watch in 4K</li>
                            <li><i class="fas fa-check"></i> Download on 6 supported devices</li>
                            <li><i class="fas fa-check"></i> Netflix spatial audio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
