<div id="contact" class="tab-content hidden flex items-center justify-center min-h-screen bg-gray-100">
    <div class="p-8 lg:p-12 bg-white mb-24 shadow-lg rounded-lg lg:max-w-4xl max-w-[90vw]">
        <!-- Profile Section -->
        <div class="mb-8 text-center">
            <h4 class="text-3xl sm:text-4xl font-bold text-gray-800">Contact Me</h4>
            <p class="text-lg text-gray-600 mt-4">
                Have questions or suggestions? I'd love to hear from you! Feel free to drop me a message, and I'll get back to you at the earliest. Let's connect and make great things happen together.
            </p>
        </div>

        <!-- Contact Form -->
        <form class="space-y-6" action="send_email.php" method="POST">
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Your Name" 
                    required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Your Email Address" 
                    required>
            </div>
            <div>
                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                <input 
                    type="text" 
                    id="subject" 
                    name="subject" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Subject" 
                    required>
            </div>
            <div>
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea 
                    id="message" 
                    name="message" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Write your message..." 
                    rows="4" 
                    required></textarea>
            </div>
            <div class="text-center">
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-blue-500 text-white font-medium rounded-lg shadow hover:bg-blue-600 transition duration-300">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>