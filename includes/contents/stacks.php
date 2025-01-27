<?php
// Get the base URL
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// Load the JSON data
$stacksJson = file_get_contents($baseUrl . '/assets/data/json/stacks.json');
$stacks = json_decode($stacksJson, true);
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
                        <div
                            class="stack-item bg-white shadow-md p-6 rounded-lg hover:shadow-lg transition"
                            data-name="<?php echo htmlspecialchars($item['name']); ?>"
                            data-tags="<?php echo htmlspecialchars(implode(',', $item['tags'])); ?>"
                            data-years="<?php echo htmlspecialchars($item['years']); ?>"
                        >
                            <div class="flex items-center">
                                <img src="<?php echo $baseUrl . '/assets/images/logos/' . htmlspecialchars($item['logo']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-12 h-10 mr-4">
                                <div>
                                    <div class="text-lg font-semibold text-gray-800"><?php echo htmlspecialchars($item['name']); ?></div>
                                    <div class="flex items-center mt-2">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <span class="text-2xl <?php echo $i <= $item['level'] ? 'text-yellow-400' : 'text-gray-300'; ?>">★</span>
                                        <?php endfor; ?>
                                    </div>
                                    <?php if (isset($item['years'])): ?>
                                        <div class="mt-2 text-gray-700 font-bold text-sm">
                                            <?php
                                                echo $item['years'] == 0
                                                ? 'No experience yet'
                                                : $item['years'] . ' ' . ($item['years'] == 1 ? 'year' : 'years') . ' experience';
                                            ?>
                                        </div>
                                    <?php endif; ?>

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
