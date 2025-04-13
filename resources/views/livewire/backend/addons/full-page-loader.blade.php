<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading...</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f9fafb; /* Tailwind gray-50 */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .loader-container {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f9fafb;
            position: relative;
        }

        .spinner {
            width: 64px;
            height: 64px;
            border: 8px solid #e5e7eb; /* Tailwind gray-200 */
            border-top: 8px solid #3b82f6; /* Tailwind blue-500 */
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-text {
            position: absolute;
            bottom: 40px;
            font-size: 1rem;
            color: #6b7280; /* Tailwind gray-500 */
            animation: fadeIn 1s ease-in-out infinite alternate;
        }

        @keyframes fadeIn {
            from { opacity: 0.5; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="loader-container">
        <div class="spinner"></div>
        <div class="loading-text">Loading, please wait...</div>
    </div>
</body>
</html>
