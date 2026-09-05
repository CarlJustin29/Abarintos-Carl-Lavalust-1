<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50">

    <!-- Header -->
    <header class="bg-emerald-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-5">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">
                        Users List
                    </h1>
                    <p class="text-emerald-100 text-sm mt-1">
                        Manage and view registered users
                    </p>
                </div>

                <div class="hidden sm:flex items-center gap-2 text-emerald-100 text-sm">
                    <span class="w-2 h-2 bg-emerald-300 rounded-full"></span>
                    User Directory
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <!-- Page Introduction -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-slate-800">
                All Users
            </h2>

            <p class="text-slate-500 mt-1">
                View the users currently stored in the database.
            </p>
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow-md border border-slate-200 overflow-hidden">

            <!-- Table Header -->
            <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
                <div>
                    <h3 class="font-semibold text-slate-800">
                        User Records
                    </h3>
                    <p class="text-sm text-slate-500 mt-1">
                        Dynamically retrieved from the database
                    </p>
                </div>

                <div class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-sm font-medium">
                    Users
                </div>
            </div>

            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left">

                    <thead class="bg-emerald-50 border-b border-emerald-100">
                        <tr>
                            <th class="px-6 py-4 text-xs font-semibold text-emerald-800 uppercase tracking-wider">
                                ID
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold text-emerald-800 uppercase tracking-wider">
                                First Name
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold text-emerald-800 uppercase tracking-wider">
                                Last Name
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold text-emerald-800 uppercase tracking-wider">
                                Email
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold text-emerald-800 uppercase tracking-wider">
                                Username
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">

                        <?php foreach ($users as $user): ?>

                            <tr class="hover:bg-emerald-50/50 transition-colors duration-150">

                                <td class="px-6 py-4 text-sm font-medium text-slate-700">
                                    <?= htmlspecialchars($user['id']); ?>
                                </td>

                                <td class="px-6 py-4 text-sm text-slate-700">
                                    <?= htmlspecialchars($user['firstname']); ?>
                                </td>

                                <td class="px-6 py-4 text-sm text-slate-700">
                                    <?= htmlspecialchars($user['lastname']); ?>
                                </td>

                                <td class="px-6 py-4 text-sm text-slate-600">
                                    <?= htmlspecialchars($user['email']); ?>
                                </td>

                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 font-medium">
                                        @<?= htmlspecialchars($user['username']); ?>
                                    </span>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
                <p class="text-sm text-slate-500">
                    User records retrieved from the database.
                </p>
            </div>

        </div>

    </main>

</body>

</html>

