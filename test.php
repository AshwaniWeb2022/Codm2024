<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Card Layout for Mobile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: green;
        }

        .container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            height: 90%;
            max-width: 400px;
            max-height: 600px;
            overflow: auto;
        }

        .card {
            width: 90%;
            height: 90%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Media query for larger mobile devices */
        @media only screen and (min-device-width: 414px) and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 3) {
            h2 {
                color: green;
            }
        }

        /* Media query for tablets */
        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            h2 {
                color: red;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Mobile Card</h2>
            <p>This card will remain fixed in the center of the screen for mobile devices only, and its size will adjust based on the screen resolution. The content will not expand beyond the card dimensions, and the card position will remain fixed even when the screen is rotated.</p>
        </div>
    </div>
</body>
</html>
