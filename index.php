<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CloudFolks AZ-104 Azure Training</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #1e3c72, #2a5298);
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: fadeIn 2s ease-in;
    }

    .container {
      text-align: center;
      padding: 40px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }

    h1 {
      font-size: 2.8rem;
      margin-bottom: 20px;
      background: linear-gradient(90deg, #00d2ff, #3a7bd5);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: slideIn 1s ease-out;
    }

    p {
      font-size: 1.2rem;
      color: #f0f0f0;
      animation: fadeInUp 1.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }

    @keyframes slideIn {
      from { transform: translateY(-30px); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeInUp {
      from { transform: translateY(20px); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to CloudFolks Testing CI/CD </h1>
    <p>AZ-104 Azure Training Web App Test Page</p>
    <p><?php echo "Server Time: " . date("Y-m-d H:i:s"); ?></p>
  </div>
</body>
</html>
