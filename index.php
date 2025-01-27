<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'includes/header.php'; ?>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow bg-gray-100">
            <!-- Header for mobile -->
            <?php include'includes/mobile-sidebar.php'; ?>

            <!-- Main Content -->
            <main class="flex-grow p-6 overflow-y-auto lg:ml-64 bg-gray-100 md:justify-center">
                <?php include'includes/main.php'; ?>
                <?php include'includes/footer.php'; ?>
            </main>
        </div>
    </div>
    <script src="/assets/js/main.js"></script>
</body>
</html>
