<?php
// Get the base URL
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// Load the JSON data
$stacksJson = file_get_contents($baseUrl . '/assets/data/json/stacks.json');
$stacks = json_decode($stacksJson, true);
?>

<div id="stacks" class="tab-content hidden">
    <div class="px-4 sm:px-6 md:px-8 lg:px-16 pt-10 pb-28 lg:pb-40 max-w-5xl mx-auto">
        <?php foreach ($stacks as $category => $items): ?>
            <div class="mb-12">
                <div class="flex items-center mb-4">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-800"><?php echo htmlspecialchars($category); ?></h3>
                    <span class="ml-2 text-gray-500">(<?php echo count($items); ?>)</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($items as $item): ?>
                        <div class="bg-white shadow-md p-6 rounded-lg hover:shadow-lg transition">
                            <div class="flex items-center">
                                <img src="<?php echo $baseUrl . '/assets/images/logos/' . htmlspecialchars($item['logo']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-10 h-10 mr-4">
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
                                                ? 'No experience'
                                                : $item['years'] . ' ' . ($item['years'] == 1 ? 'year' : 'years') . ' experience';
                                            ?>
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
