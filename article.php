<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Your Free Article | Alpha Thelma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nova+Script&display=swap');
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-card {
            background: #11141a;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            max-width: 520px;
            width: 100%;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .header-accent {
            background: linear-gradient(135deg, #A61C24 0%, #7D1218 100%);
            padding: 40px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .page-title {
            color: #ffffff;
            font-weight: 800;
            font-size: 1.85rem;
            line-height: 1.3;
            letter-spacing: -0.5px;
        }

        .form-container {
            padding: 40px 35px;
        }

        .form-caption {
            color: #94a3b8;
            font-size: 1.05rem;
            font-weight: 400;
        }

        .form-label {
            color: #cbd5e1;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 14px 16px;
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.07);
            border-color: #A61C24;
            color: #ffffff;
            box-shadow: 0 0 0 4px rgba(166, 28, 36, 0.15);
        }

        /* Styling placeholders to look premium */
        .form-control::placeholder {
            color: #475569;
        }

        .btn-submit {
            background-color: #A61C24;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 15px;
            border-radius: 8px;
            border: none;
            transition: all 0.25s ease-in-out;
            width: 100%;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            background-color: #bd242d;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(166, 28, 36, 0.35);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .back-link {
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <div class="register-card">
        
        <div class="header-accent">
            <div class="mb-4">
                <span class="m-0 text-white d-block" style="font-family: 'Nova Script', cursive; font-size: 26px; line-height: 1;">Alpha Thelma</span>
                <span class="m-0 text-uppercase tracking-wider fw-bold d-block mt-1" style="font-size: 0.55rem; color: #ff8a90; letter-spacing: 1.5px;">The French Fluently Academy</span>
            </div>
            
            <h1 class="page-title m-0">
                10 Mistakes People Make While Learning French
            </h1>
        </div>

        <div class="form-container">
            <p class="form-caption text-center mb-4">
                Enter your details to receive the article
            </p>

            <?php
                    if (isset($error)) {
                        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                    }
                    if (isset($success)) {
                        echo '<div class="alert alert-success" role="alert">' . $success . '</div>';
                    }
                    ?>
            <form action="proc_article.php" method="POST" autocomplete="on">
                
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <div class="position-relative">
                        <input type="text" id="fullName" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="emailAddress" class="form-label">Email Address</label>
                    <input type="email" id="emailAddress" name="email" class="form-control" placeholder="you@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="tel" id="phoneNumber" name="phone" class="form-control" placeholder="08032222223" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-submit text-uppercase">
                        Send Me Article <i class="fas fa-paper-plane ms-2" style="font-size: 0.9rem;"></i>
                    </button>
                </div>

                <div class="text-center">
                    <a href="index.php" class="back-link">
                        <i class="fas fa-arrow-left me-1 small"></i> Back to Homepage
                    </a>
                </div>

            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>