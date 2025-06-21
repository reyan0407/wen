<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Contact Us
                </h1>
                <p class="text-lg text-gray-600">
                    Have questions, suggestions, or feedback? We'd love to hear from you!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Get in Touch</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="text-red-600 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                                <p class="text-gray-600">
                                    Send us an email and we'll respond as soon as possible.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="text-red-600 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Feedback</h3>
                                <p class="text-gray-600">
                                    Share your thoughts on how we can improve this menu resource.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-red-50 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-2">Important Notice</h3>
                        <p class="text-sm text-gray-700">
                            This is not an official contact form. For official customer service, 
                            please visit the official website or contact your local restaurant directly.
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg" role="alert">
                            <p class="text-green-800">✅ Thank you for your message! We'll get back to you soon.</p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['error'])): ?>
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg" role="alert">
                            <p class="text-red-800">
                                <?php 
                                switch($_GET['error']) {
                                    case '1':
                                        echo '❌ Please fill in all required fields.';
                                        break;
                                    case '2':
                                        echo '❌ Please enter a valid email address.';
                                        break;
                                    default:
                                        echo '❌ An error occurred. Please try again.';
                                }
                                ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo esc_url(home_url('?section=contact')); ?>" class="bg-white rounded-lg shadow-md p-6" novalidate>
                        <?php wp_nonce_field('contact_form_action', 'contact_nonce'); ?>
                        
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Name <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors duration-200"
                                   placeholder="Your full name"
                                   value="<?php echo isset($_POST['name']) ? esc_attr($_POST['name']) : ''; ?>"
                                   aria-describedby="name-error">
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors duration-200"
                                   placeholder="your.email@example.com"
                                   value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>"
                                   aria-describedby="email-error">
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Message <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <textarea id="message" name="message" required rows="6"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors duration-200 resize-vertical"
                                      placeholder="Tell us what's on your mind..."
                                      aria-describedby="message-error"><?php echo isset($_POST['message']) ? esc_textarea($_POST['message']) : ''; ?></textarea>
                        </div>

                        <button type="submit" name="contact_form_submit"
                                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>