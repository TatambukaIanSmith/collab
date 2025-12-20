<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af', 'blue-secondary': '#3b82f6', 
                        'blue-light': '#dbeafe', 'blue-dark': '#1e3a8a' 
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    
    <nav class="bg-blue-primary shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{route('home')}}" class="text-white text-2xl font-bold">JOB-lyNK</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('employers')}}" class="text-blue-light hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <a href="{{route('jobs')}}" class="bg-blue-secondary text-white hover:bg-blue-dark px-3 py-2 rounded-md text-sm font-medium transition duration-300">Back</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden rounded-lg">
            
            <div class="bg-blue-primary text-white p-4 flex justify-between items-center">
                <a href="{{ route('jobs') }}" class="text-blue-light hover:text-white">
                    <i class="fas fa-times"></i> Close
                </a>
            </div>


            <form action="send_message.php" method="POST" class="p-4 border-t flex space-x-3">
                <input type="hidden" name="receiver_id" value="">
                <input type="hidden" name="job_id" value="">
                
                <textarea name="message" rows="1" required placeholder="Type your message or initial query..."
                    class="flex-grow px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-primary resize-none"></textarea>
                
                <button type="submit" 
                    class="bg-blue-secondary text-white px-4 rounded-lg font-semibold hover:bg-blue-dark transition duration-300">
                    <i class="fas fa-paper-plane"></i> Send
                </button>
            </form>
        </div>
    </main>

</body>
</html>