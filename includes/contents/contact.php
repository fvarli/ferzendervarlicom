<div id="contact" class="tab-content hidden">
<div class="p-6 pt-10 lg:pt-0 lg:max-w-[900px] max-w-[100vw]">

    <h3 class="text-3xl font-bold">Contact Me</h3>
    <p>Feel free to reach out via LinkedIn or GitHub.</p>
    
    <form class="mt-4 space-y-4" action="send_email.php" method="POST">
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border rounded" required>
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full px-4 py-2 border rounded" required>
        </div>
        <div>
            <label class="block text-gray-700">Message</label>
            <textarea name="message" class="w-full px-4 py-2 border rounded" rows="4" required></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Send</button>
    </form>
    </div>
</div>