<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Brand & Description -->
            <div>
                <h3 class="text-2xl font-bold text-red-500 mb-4">WendyssMenu</h3>
                <p class="text-gray-300 mb-4">
                    Your unofficial guide to delicious menu items. 
                    Browse, discover, and plan your next meal with ease.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors duration-200" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors duration-200" aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.418-3.323C6.001 8.198 7.152 7.708 8.449 7.708s2.448.49 3.323 1.416c.875.875 1.365 2.026 1.365 3.323s-.49 2.448-1.365 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors duration-200" aria-label="Twitter">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo home_url(); ?>" class="text-gray-300 hover:text-red-500 transition-colors duration-200">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>?section=menu" class="text-gray-300 hover:text-red-500 transition-colors duration-200">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>?section=about" class="text-gray-300 hover:text-red-500 transition-colors duration-200">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>?section=contact" class="text-gray-300 hover:text-red-500 transition-colors duration-200">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Legal & Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Information</h4>
                <ul class="space-y-2 text-gray-300">
                    <li>Privacy Policy</li>
                    <li>Terms of Service</li>
                    <li>Disclaimer</li>
                </ul>
                <div class="mt-6 p-4 bg-gray-800 rounded-lg">
                    <p class="text-sm text-gray-400">
                        <strong>Disclaimer:</strong> This website is not affiliated with any restaurant chain. 
                        All trademarks belong to their respective owners.
                    </p>
                </div>
            </div>
        </div>

        <hr class="border-gray-700 my-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 mb-4 md:mb-0">
                © <?php echo date('Y'); ?> WendyssMenu. All rights reserved.
            </p>
            <p class="text-gray-400 flex items-center">
                Made with 
                <svg class="w-4 h-4 text-red-500 mx-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                for food fans
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>