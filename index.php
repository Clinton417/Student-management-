<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="hero-section">
        <div class="hero-content container">
            <div class="hero-copy">
                <span class="eyebrow">Local XAMPP Student Portal</span>
                <h1>Modern Student Management for Schools</h1>
                <p>Manage student profiles, attendance, and records from a clean admin dashboard. Built with PHP, MySQL, HTML5, CSS, and JavaScript.</p>
                <div class="hero-actions">
                    <a href="login.php" class="btn btn-primary">Admin Login</a>
                    <a href="#features" class="btn btn-outline-light">View Features</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="book-wrap">
                    <div class="book">
                        <div class="cover"></div>
                        <div class="page page1"></div>
                        <div class="page page2"></div>
                        <div class="page page3"></div>
                    </div>
                    <div class="book-shadow"></div>
                </div>
            </div>
        </div>
    </header>

    <main class="site-content container">
        <section id="features" class="section features-section">
            <div class="section-heading">
                <h2>What You Can Do</h2>
                <p>Manage everything from one dashboard with full CRUD support and fast local performance.</p>
            </div>
            <div class="row feature-cards">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Student Records</h3>
                        <p>Add, edit, and remove student profiles quickly with a clean interface.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Admin Dashboard</h3>
                        <p>Secure admin login and dashboard to monitor records and take action.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Responsive Design</h3>
                        <p>Works well on desktop and tablet devices, optimized for local development.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section about-section">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Designed for Teachers and Administrators</h2>
                    <p>This student management system gives administrators an easy way to keep student details organized in a local XAMPP environment.</p>
                    <ul>
                        <li>Fast setup with Apache + MySQL</li>
                        <li>Secure admin login system</li>
                        <li>Built-in student CRUD operations</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="info-panel">
                        <h3>Ready to use</h3>
                        <p>Use the admin login and start managing student information immediately on localhost.</p>
                        <a href="login.php" class="btn btn-primary">Go to Login</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container text-center">
            <p>&copy; 2026 Student Management System. Built for XAMPP local development.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>