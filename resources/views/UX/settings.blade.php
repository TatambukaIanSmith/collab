
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Job Matching Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #f0f8ff; }
        .sidebar { background-color: #004aad; }
    </style>
</head>
<body class="flex h-screen font-sans">

    <!-- Sidebar -->
    <div class="sidebar w-64 flex flex-col text-white">
        <div class="p-6 text-2xl font-semibold border-b border-blue-800">JobMatch Admin</div>
        <nav class="flex flex-col flex-1 p-4 space-y-2">
            <a href="dashboard.php" class="hover:bg-blue-800 p-2 rounded">Dashboard Overview</a>
            <a href="jobs.php" class="hover:bg-blue-800 p-2 rounded">Jobs Section</a>
            <a href="employers.php" class="hover:bg-blue-800 p-2 rounded">Employers Section</a>
            <a href="workers.php" class="hover:bg-blue-800 p-2 rounded">Workers Section</a>
            <a href="analytics.php" class="hover:bg-blue-800 p-2 rounded">Analytics</a>
            <a href="settings.php" class="hover:bg-blue-800 p-2 rounded bg-blue-900">Settings</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <header class="bg-white shadow p-4 flex justify-between items-center border-b">
            <h1 class="text-xl font-bold">Settings</h1>
        </header>

        <main class="p-6 space-y-6 overflow-y-auto">

            <div class="bg-white shadow rounded p-6 max-w-2xl mx-auto">
                <h2 class="text-lg font-bold mb-4">Platform Settings</h2>
                <form method="POST" action="update_settings.php" class="space-y-4">

                    <div>
                        <label class="block text-gray-700">Platform Name</label>
                        <input type="text" name="platform_name" class="w-full border rounded p-2" placeholder="Job Matching Platform">
                    </div>

                    <div>
                        <label class="block text-gray-700">Admin Email</label>
                        <input type="email" name="admin_email" class="w-full border rounded p-2" placeholder="admin@example.com">
                    </div>

                    <div>
                        <label class="block text-gray-700">Theme Color</label>
                        <input type="color" name="theme_color" value="#004aad" class="w-16 h-10 border rounded">
                    </div>

                    <div>
                        <label class="block text-gray-700">Allow New Employer Registrations</label>
                        <select name="allow_employer_reg" class="w-full border rounded p-2">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700">Allow New Worker Registrations</label>
                        <select name="allow_worker_reg" class="w-full border rounded p-2">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Settings</button>
                    </div>

                </form>
            </div>

        </main>
    </div>
</body>
</html>
