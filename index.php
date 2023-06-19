<!DOCTYPE html>
<html>
<head>
  <title>Basic Banking site</title>
  <style>
    body {
      background-image: url("rupixen-com-Q59HmzK38eQ-unsplash.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
    }

    h1 {
      color: black;
      font-size: 48px;
      padding:2px 2px;
      margin-bottom: 50px;
      text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white,2px 2px 4px white,-2px -2px rgb(128, 128, 128);
      border-radius: 4px;
    }

    .button {
      box-shadow: 1px 1px 3px rgb(198, 157, 247);
      display: inline-block;
      background-color: #007bff;
      color: black;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 22px;
      margin: 15px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to the Banking Website</h1>
    <a href="customers.php" class="button">View All Customers</a>
    <a href="transactions.php" class="button">View Transactions</a>
  </div>
</body>
</html>