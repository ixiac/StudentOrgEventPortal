<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Selection</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #900404;
      margin-bottom: 30px;
      font-size: 24px;
    }

    .button-group {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .dashboard-btn {
      background-color: #900404;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s ease;
      min-width: 150px;
    }

    .dashboard-btn:hover {
      background-color: #700303;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(144, 4, 4, 0.3);
    }

    .dashboard-btn:active {
      transform: translateY(0);
    }

    @media (max-width: 480px) {
      .button-group {
        flex-direction: column;
        align-items: center;
      }

      .dashboard-btn {
        width: 100%;
        max-width: 200px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Select Dashboard</h1>
    <div class="button-group">
      <a href="admin/dashboard.php" class="dashboard-btn">
        Admin Dashboard
      </a>
      <a href="student/dashboard.php" class="dashboard-btn">
        Student Dashboard
      </a>
    </div>
  </div>
</body>

</html>