<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-lg w-full bg-white rounded-lg shadow-lg p-8 text-center">
        
        <img 
            src="{{ asset('fallbackimg.png') }}" 
            alt="Page not found illustration" 
            class="w-100 h-100 mx-auto mb-6 object-contain"
        >
        
        <h1 class="text-4xl font-bold text-gray-800 mb-2">404</h1>
        <h2 class="text-xl font-semibold text-gray-600 mb-4">Page Was Not Found :/</h2>
        <p class="text-gray-500 mb-6">
            Oh naurrrr! The space station you are looking for doesn't exist or you have inputted wrong coordinates!
        </p>

        

    </div>
</body>
</html>