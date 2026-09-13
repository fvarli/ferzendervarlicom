<?php
// Get the base URL
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// Resolve the public assets base URL for both WordPress and standalone PHP
if (function_exists('get_template_directory_uri')) {
    $assetsBaseUrl = rtrim(get_template_directory_uri(), '/') . '/my-custom-website/assets';
} else {
    $assetsBaseUrl = $baseUrl . '/assets';
}

// Load the JSON data from the filesystem
$stacks = [];
$stacksPath = __DIR__ . '/../../assets/data/json/stacks.json';

if (is_readable($stacksPath)) {
    $stacksJson = file_get_contents($stacksPath);
    $decodedStacks = json_decode($stacksJson, true);

    if (is_array($decodedStacks)) {
        $stacks = $decodedStacks;
    }
}
$currentYear = (int) date('Y');
?>
<div id="stacks" class="tab-content hidden">
    <div class="px-4 sm:px-6 md:px-8 lg:px-16 pt-10 pb-28 lg:pb-40 max-w-5xl mx-auto">
        <!-- Introduction Section -->
        <div class="mb-12 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <h4 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-4">My Technology Stacks</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    This section highlights the technologies I have experience with, ranging from those I've mastered over the years to those I've just begun exploring. My aim is to share my progress and aspirations in constantly learning and growing as a developer. While some areas of expertise are still in their early stages, I am fully committed to advancing in these domains and embracing new challenges. Join me as I expand my skills and explore the forefront of technology!
            </p>
        </div>

        <!-- Search Box -->
        <div class="mb-6">
            <input
                type="text"
                id="search"
                placeholder="Search by name, tags, or experience..."
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
            />
        </div>

        <!-- Stacks Content -->
        <?php foreach ($stacks as $category => $items): ?>
            <div class="mb-12 category" data-category="<?php echo htmlspecialchars($category); ?>">
                <div class="flex items-center mb-4">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-800"><?php echo htmlspecialchars($category); ?></h3>
                    <span class="ml-2 text-gray-500">(<?php echo count($items); ?>)</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($items as $item): ?>
                        <?php
                            $startYear = $item['start_year'] ?? null;
                            $endYear = $item['end_year'] ?? null;
                            $experienceYears = 0;

                            if (is_int($startYear)) {
                                if ($endYear === null) {
                                    $experienceYears = max(0, $currentYear - $startYear);
                                } elseif (is_int($endYear) && $endYear >= $startYear) {
                                    $experienceYears = $endYear - $startYear;
                                }
                            }
                        ?>
                        <div
                            class="stack-item bg-white shadow-md p-6 rounded-lg hover:shadow-lg transition"
                            data-name="<?php echo htmlspecialchars($item['name']); ?>"
                            data-tags="<?php echo htmlspecialchars(implode(',', $item['tags'])); ?>"
                            data-years="<?php echo htmlspecialchars((string) $experienceYears); ?>"
                        >
                            <div class="flex items-center">
                                <img src="<?php echo $assetsBaseUrl . '/images/logos/' . htmlspecialchars($item['logo']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-12 h-10 mr-4">
                                <div>
                                    <div class="text-lg font-semibold text-gray-800"><?php echo htmlspecialchars($item['name']); ?></div>
                                    <div class="flex items-center mt-2">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <span class="text-2xl <?php echo $i <= $item['level'] ? 'text-yellow-400' : 'text-gray-300'; ?>">★</span>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="mt-2 text-gray-700 font-bold text-sm">
                                        <?php
                                            echo $experienceYears === 0
                                            ? 'No experience yet'
                                            : $experienceYears . ' ' . ($experienceYears === 1 ? 'year' : 'years') . ' experience';
                                        ?>
                                    </div>

                                    <?php if (isset($item['tags'])): ?>
                                        <div class="mt-4 flex flex-wrap gap-2">
                                            <?php foreach ($item['tags'] as $tag): ?>
                                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded"><?php echo htmlspecialchars($tag); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
