<?php
include 'includes/auth.php';
include 'includes/db.php';

$totalQuery = $conn->query("SELECT COUNT(*) AS total FROM students");
$totalResult = $totalQuery->fetch_assoc();
$totalStudents = $totalResult['total'] ?? 0;

$latestQuery = $conn->query("SELECT name FROM students ORDER BY created_at DESC LIMIT 1");
$latestStudent = $latestQuery->fetch_assoc();
$latestStudentName = $latestStudent['name'] ?? 'No students yet';

$students = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="page-shell container">
        <div class="dashboard-header">
            <div>
                <h1>Admin Dashboard</h1>
                <p class="text-muted">Welcome back, <?php echo htmlspecialchars($_SESSION['admin_user']); ?>.</p>
            </div>
            <div class="d-flex gap-2">
                <a href="add_student.php" class="btn btn-primary">Add Student</a>
                <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
            </div>
        </div>

        <div class="dashboard-widgets">
            <div class="widget-card">
                <h3>Total students</h3>
                <p><?php echo intval($totalStudents); ?></p>
            </div>
            <div class="widget-card">
                <h3>Latest student</h3>
                <p><?php echo htmlspecialchars($latestStudentName); ?></p>
            </div>
            <div class="widget-card">
                <h3>Database</h3>
                <p>student_management</p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Student Records</h2>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($students && $students->num_rows > 0): ?>
                                <?php while ($row = $students->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo intval($row['id']); ?></td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                        <td>
                                            <a href="edit_student.php?id=<?php echo intval($row['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="delete_student.php?id=<?php echo intval($row['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirmDelete();">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">No students found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
