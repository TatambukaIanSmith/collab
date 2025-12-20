
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB-lyNK - Find Perfect Casual Jobs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af',
                        'blue-secondary': '#3b82f6',
                        'blue-light': '#dbeafe',
                        'blue-dark': '#1e3a8a'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-primary to-blue-secondary">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Find Perfect <span class="text-blue-light">Casual Jobs</span>
                </h1>
                <p class="text-xl text-blue-light mb-8 max-w-3xl mx-auto">
                    Connect skilled casual workers with employers who need flexible, reliable help. Whether you're looking for work or hiring, we make it simple and secure.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('jobs') }}" class="bg-white text-blue-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                        Find Jobs
                    </a>
                    <a href="{{ route('postjob') }}" class="bg-blue-dark text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-900 transition duration-300">
                        Post a Job
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose JOB-lyNK?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We connect the right people for the right jobs with secure payments and verified profiles.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-blue-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Verified Workers</h3>
                    <p class="text-gray-600">All workers are verified with background checks and skill assessments.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-credit-card text-blue-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Secure Payments</h3>
                    <p class="text-gray-600">Multiple payment options including mobile money and secure escrow system.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-light rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-blue-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Flexible Timing</h3>
                    <p class="text-gray-600">Work when you want, hire when you need. Complete flexibility for all users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Categories -->
    <section class="py-20 bg-blue-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Popular Job Categories</h2>
                <p class="text-gray-600">Find work in these trending categories</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-center">
                        <i class="fas fa-home text-blue-primary text-3xl mb-3"></i>
                        <h3 class="font-semibold text-gray-900">Home Services</h3>
                        <p class="text-sm text-gray-600">Cleaning, Repairs, Gardening</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-center">
                        <i class="fas fa-truck text-blue-primary text-3xl mb-3"></i>
                        <h3 class="font-semibold text-gray-900">Delivery</h3>
                        <p class="text-sm text-gray-600">Food, Packages, Moving</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-center">
                        <i class="fas fa-laptop text-blue-primary text-3xl mb-3"></i>
                        <h3 class="font-semibold text-gray-900">Digital Services</h3>
                        <p class="text-sm text-gray-600">Design, Writing, Data Entry</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-center">
                        <i class="fas fa-calendar text-blue-primary text-3xl mb-3"></i>
                        <h3 class="font-semibold text-gray-900">Events</h3>
                        <p class="text-sm text-gray-600">Photography, Catering, Setup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Get Started?</h2>
            <p class="text-blue-light mb-8 max-w-2xl mx-auto">Join thousands of workers and employers who trust CasualWork for their flexible work needs.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register?type=worker" class="bg-white text-blue-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Join as Worker
                </a>
                <a href="/register?type=employer" class="bg-blue-dark text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-900 transition duration-300">
                    Join as Employer
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">JOB-lyNK</h3>
                    <p class="text-gray-400">Connecting skilled workers with flexible job opportunities.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">For Workers</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('jobs') }}" class="hover:text-white">Find Jobs</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-white">Register</a></li>
                        <li><a href="{{ route('worker') }}" class="hover:text-white">Dashboard</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('postjob') }}" class="hover:text-white">Post a Job</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-white">Register</a></li>
                        <li><a href="{{ route('employers') }}" class="hover:text-white">Dashboard</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('settings') }}" class="hover:text-white">Help Center</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 JOB-lyNK. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>

</html>