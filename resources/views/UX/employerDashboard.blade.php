<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - JOB-lyNK Employer</title>
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
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    
    <!-- Navigation (Header) -->
    <nav class="bg-blue-primary shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/home" class="text-white text-2xl font-bold">JOB-lyNK</a>
                    </div>
                    <!-- Primary Navigation Links -->
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{route('jobs')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Job Posts</a>
                        <a href="{{route('application')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Applicants</a>
                        <a href="{{route('payment')}}" class="text-blue-light hover:bg-blue-dark hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-150">Billing</a>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- User/Logout Button -->
                    <div class="relative">
                        <button class="text-white hover:text-blue-light px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            <i class="fas fa-building mr-2 text-lg"></i>
                            <span>Company Name</span> <!-- PHP: echo $_SESSION['company_name'] -->
                        </button>
                    </div>
                    <a href="{{route('login')}}" class="bg-blue-secondary text-white hover:bg-blue-dark px-3 py-2 rounded-md text-sm font-medium transition duration-300">
                        <i class="fas fa-sign-out-alt mr-1"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Employer Dashboard</h1>

            <!-- Top Action Button -->
            <div class="mb-6 flex justify-end">
                <a href="{{route('postjob')}}"><button class="bg-blue-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-dark transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-primary focus:ring-offset-2">
                    <i class="fas fa-plus mr-2"></i> Post New Job
                </button></a>
            </div>

            <!-- Grid Layout for Dashboard Sections -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Column 1 & 2: Main Content (Job Posts / Applications) -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Quick Stats/Welcome Banner -->
                    <div class="bg-white overflow-hidden shadow rounded-lg p-6 border-l-4 border-blue-primary">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">Welcome Back, [Recruiter Name]!</h2>
                        <p class="text-gray-600 mb-4">Your active job post have received 14 new applications this week.</p>
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-chart-line text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">3</p>
                                <p class="text-sm text-gray-600">Active Job Posts</p>
                            </div>
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-users text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">45</p>
                                <p class="text-sm text-gray-600">Total Applicants</p>
                            </div>
                            <div class="p-3 bg-blue-light rounded-lg">
                                <i class="fas fa-calendar-check text-blue-primary text-2xl"></i>
                                <p class="text-lg font-bold text-blue-dark">2</p>
                                <p class="text-sm text-gray-600">Interviews Scheduled</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- New Applications Feed -->
                    <div class="bg-white shadow overflow-hidden rounded-lg">
                        <div class="px-4 py-5 sm:px-6 bg-gray-50 border-b">
                            <h3 class="text-lg font-semibold text-gray-900">New Applications Awaiting Review</h3>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            <!-- Applicant Item 1 -->
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">
                                        <i class="fas fa-circle text-green-500 text-xs mr-2"></i> Alex Johnson
                                    </div>
                                    <div class="text-sm text-gray-500">Applied 2 hours ago</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">For: Senior PHP Developer</p>
                                <a href="{{route('joblistings')}}" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">Review Application</a>
                            </li>
                            <!-- Applicant Item 2 -->
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">
                                        <i class="fas fa-circle text-green-500 text-xs mr-2"></i> Michael Chen
                                    </div>
                                    <div class="text-sm text-gray-500">Applied Yesterday</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">For: Freelance Graphic Designer</p>
                                <a href="{{route('joblistings')}}" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">Review Application</a>
                            </li>
                            <!-- Applicant Item 3 -->
                            <li class="p-4 hover:bg-gray-50 transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-blue-primary">
                                        <i class="fas fa-circle text-green-500 text-xs mr-2"></i> Sarah Williams
                                    </div>
                                    <div class="text-sm text-gray-500">Applied 2 days ago</div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">For: Senior PHP Developer</p>
                                <a href="{{route('joblistings')}}" class="mt-2 inline-block text-xs text-blue-secondary hover:text-blue-dark font-semibold">Review Application</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Sidebar (Profile and Quick Links) -->
                <div class="space-y-6">
                    
                    <!-- Company Profile Card -->
                    <div class="bg-white shadow overflow-hidden rounded-lg p-6 text-center">
                        <div class="w-20 h-20 mx-auto rounded-full bg-blue-light flex items-center justify-center mb-4">
                            <i class="fas fa-briefcase text-blue-primary text-3xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900">TechCorp Inc.</h4>
                        <p class="text-sm text-gray-500 mb-4">Software & IT Services</p>
                        <a href="{{route('settings')}}" class="inline-block w-full bg-blue-secondary text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-primary transition duration-300">
                            Manage Company Profile
                        </a>
                    </div>

                    <!-- Active Job Posts Summary -->
                    <div class="bg-white shadow overflow-hidden rounded-lg">
                        <div class="px-4 py-5 sm:px-6 bg-gray-50 border-b">
                            <h3 class="text-lg font-semibold text-gray-900">Your Active Posts</h3>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">Senior PHP Developer</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-light text-blue-dark">28 Applicants</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">Freelance Graphic Designer</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-light text-blue-dark">12 Applicants</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-600">HR Manager (Closed)</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-200 text-gray-700">FILLED</span>
                            </div>
                            <a href="{{route('jobs')}}" class="block pt-2 text-sm text-blue-primary hover:text-blue-dark font-semibold border-t mt-3">
                                View All Job Posts <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>

                   
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer Placeholder (Optional) -->
    <footer class="bg-white border-t mt-12 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
            &copy; 2024 JOB-lyNK. All rights reserved.
        </div>
    </footer>

</body>
</html>

