<aside class="w-64 bg-white shadow-lg p-6 min-h-screen">
    <div class="flex items-center space-x-2 text-gray-700 hover:text-blue-500 ml-14" onclick="menuToggle();">
        <img src="../../assets/Icons/profile.png" alt="Profile Icon" />
    </div>
    <h2 class="text-xl font-semibold mb-10 ml-12">
        <p class="text-gray-700"><?php echo $_SESSION['fname'] ?? 'Guest'; ?></p>
    </h2>
    <nav class="space-y-4">
        <a href="healthcareDashboard.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>🏠</span><span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>📅</span><span>Appointments</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>🧑</span><span>Patients</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>📊</span><span>Reports</span>
        </a>
        <a href="../HealthcareProfessional/services.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>🛠</span><span>Services</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>💬</span><span>Forum</span>
        </a>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-500">
            <span>⚙️</span><span>Settings</span>
        </a>
    </nav>
</aside>
