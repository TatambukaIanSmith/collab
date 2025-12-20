<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - JOB-lyNK Worker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Custom Tailwind Configuration to match the project's color palette
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af', // Darker Blue for main elements
                        'blue-secondary': '#3b82f6', // Mid-tone Blue for accents
                        'blue-light': '#dbeafe', // Light Blue for backgrounds/alerts
                        'blue-dark': '#1e3a8a' // Deep Blue for hover states
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
                    <div class="flex-shrink-0">
                        <a href="{{route('home')}}" class="text-white text-2xl font-bold">JOB-lyNK</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{route('jobs')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Job Feed</a>
                        <a href="{{route('joblistings')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Applications</a>
                        <a href="{{route('messages')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Messages</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="text-white hover:text-blue-light px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            <i class="fas fa-user-circle mr-2 text-lg"></i>
                            <span>Worker Name</span> </button>
                    </div>
                    <a href="{{route('login')}}" class="bg-blue-secondary text-white hover:bg-blue-dark px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                        <i class="fas fa-sign-out-alt mr-1"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Worker Dashboard</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2 space-y-6">

                    <div class="bg-white overflow-hidden shadow rounded-lg p-6 border-l-4 border-blue-primary">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">Hello, [Worker Name]!</h2>
                        <p class="text-gray-600 mb-4">You have **3 new job recommendations** and **1 pending interview**. Keep up the great work!</p>
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-file-alt text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">12</p>
                                <p class="text-sm text-gray-600">Applications Sent</p>
                            </div>
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-star text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">4.8</p>
                                <p class="text-sm text-gray-600">Average Rating</p>
                            </div>
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-briefcase text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">8</p>
                                <p class="text-sm text-gray-600">Jobs Completed</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow overflow-hidden rounded-lg">
                        <div class="px-4 py-5 sm:px-6 bg-gray-50 border-b">
                            <h3 class="text-lg font-semibold text-gray-900">Recommended Jobs For You</h3>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">Senior PHP Developer</div>
                                    <div class="text-sm text-gray-500">$75/hr</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">TechCorp Inc. • Remote • Full-Time</p>
                                <a href="#" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">View Details & Apply</a>
                            </li>
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">Freelance Graphic Designer</div>
                                    <div class="text-sm text-gray-500">Fixed Rate: $1,500</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Creative Agency • Local • Contract</p>
                                <a href="#" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">View Details & Apply</a>
                            </li>
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">Electrical Apprentice</div>
                                    <div class="text-sm text-gray-500">$20/hr</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">Local Trades • On-Site • Entry Level</p>
                                <a href="#" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">View Details & Apply</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-white shadow overflow-hidden rounded-lg p-6 text-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-blue-light flex items-center justify-center mb-4">
                            <i class="fas fa-camera text-blue-primary text-3xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900">Jane Doe</h4>
                        <p class="text-sm text-gray-500 mb-4">Web Developer | Electrician</p>
                        <a href="{{route('settings')}}" class="inline-block w-full bg-blue-secondary text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-primary transition duration-300">
                            Edit Profile
                        </a>
                    </div>

                    <div class="bg-white shadow overflow-hidden rounded-lg">
                        <div class="px-4 py-5 sm:px-6 bg-gray-50 border-b">
                            <h3 class="text-lg font-semibold text-gray-900">Application Status</h3>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">Awaiting Review</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">5</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">Interview Scheduled</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">1</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">Rejections</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">2</span>
                            </div>
                            <a href="{{route('joblistings')}}" class="block pt-2 text-sm text-blue-primary hover:text-blue-dark font-semibold border-t mt-3">
                                View Full History <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="bg-white border-t mt-12 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
            &copy; 2024 JOB-lyNK. All rights reserved.
        </div>
    </footer>

</body>
</html>