<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - JOB-lyNK</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Navigation Bar (Optional, but good practice) -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/home" class="text-white text-2xl font-bold">JOB-lyNK</a>
            <div>
                <a href="/home" class="text-white hover:text-blue-200 mx-2">Home</a>
                <a href="/jobs" class="text-white hover:text-blue-200 mx-2">Jobs</a>
                <a href="/contact" class="text-white hover:text-blue-200 mx-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-center text-blue-800 mb-6">Contact Us</h1>
            <p class="text-center text-gray-600 mb-8">
                Have questions or feedback? We'd love to hear from you! Fill out the form below or reach out directly.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information & Map -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Our Details</h3>
                        <p class="text-gray-600">
                            <strong>Email:</strong> <a href="mailto:leemeeya851@gmail.com" class="text-blue-600 hover:underline">support@JOB-lyNK</a><br>
                            <strong>Phone:</strong> <a href="tel:+256750820785" class="text-blue-600 hover:underline">+256750820785</a><br>
                            <strong>Address:</strong> Abayita Ababiri, Entebbe rd
                        </p>
                    </div>

                  
                    <div>
                        <h3 class="text-xl font-semibold text-blue-700 mb-2 my-10">Find Us</h3>
                        <div class="bg-gray-200 h-48 w-full rounded-md flex items-center justify-center text-gray-500">
                           <iframe src="https://maps.app.goo.gl/v2ALGq7sm9H5uh469" frameborder="0" allowfullscreen width="100%" height="100"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>