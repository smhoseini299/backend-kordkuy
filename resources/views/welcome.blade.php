<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog MVP - Laravel Backend</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .api-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        .api-endpoint {
            background: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Blog MVP Backend</h1>
        <p>Laravel RESTful API is running successfully!</p>
        
        <div class="api-info">
            <h3>Available API Endpoints:</h3>
            <div class="api-endpoint">GET /api/posts - List all posts</div>
            <div class="api-endpoint">GET /api/posts/{id} - Get post details</div>
            <div class="api-endpoint">POST /api/comments - Add comment</div>
            <div class="api-endpoint">GET /api/posts/{id}/comments - Get post comments</div>
            <div class="api-endpoint">POST /api/admin/posts - Create post (admin)</div>
            <div class="api-endpoint">GET /api/admin/comments - Manage comments (admin)</div>
        </div>
        
        <p>Frontend will be available at: <strong>http://localhost:3000</strong></p>
    </div>
</body>
</html>
