<!-- Contact Section -->
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-16 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Contact Us</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Have questions, suggestions, or feedback about our menu resource? 
                We'd love to hear from you!
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8 animate-fade-in-delay-1">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                    
                    <?php
                    // Display success/error messages
                    if (isset($_GET['success']) && $_GET['success'] == '1') {
                        echo '<div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <p class="text-green-700 font-medium">Thank you! Your message has been sent successfully.</p>
                                </div>
                              </div>';
                    }
                    
                    if (isset($_GET['error'])) {
                        $error_message = '';
                        switch($_GET['error']) {
                            case '1':
                                $error_message = 'Please fill in all required fields.';
                                break;
                            case '2':
                                $error_message = 'Please enter a valid email address.';
                                break;
                            default:
                                $error_message = 'An error occurred. Please try again.';
                        }
                        echo '<div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-red-700 font-medium">' . esc_html($error_message) . '</p>
                                </div>
                              </div>';
                    }
                    ?>
                    
                    <form method="POST" action="<?php echo esc_url(home_url('?section=contact')); ?>" class="space-y-6">
                        <?php wp_nonce_field('contact_form_action', 'contact_nonce'); ?>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                   placeholder="Your full name">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                   placeholder="your.email@example.com">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                Subject
                            </label>
                            <select id="subject" 
                                    name="subject" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                <option value="">Select a topic</option>
                                <option value="general">General Question</option>
                                <option value="menu">Menu Information</option>
                                <option value="pricing">Pricing Question</option>
                                <option value="nutrition">Nutritional Information</option>
                                <option value="suggestion">Suggestion</option>
                                <option value="bug">Report an Issue</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent resize-vertical"
                                      placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        
                        <button type="submit" 
                                name="contact_form_submit"
                                class="w-full bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 animate-fade-in-delay-2">
                    <!-- Contact Info Card -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Email Us</h3>
                                    <p class="text-gray-600">We typically respond within 24 hours</p>
                                    <p class="text-red-600 font-medium">contact@wendyssemenu.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">Response Time</h3>
                                    <p class="text-gray-600">Monday - Friday: Within 24 hours</p>
                                    <p class="text-gray-600">Weekends: Within 48 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Quick Links -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Quick Answers</h2>
                        
                        <div class="space-y-4">
                            <div class="border-l-4 border-red-500 pl-4">
                                <h3 class="font-semibold text-gray-900">Menu Information</h3>
                                <p class="text-gray-600 text-sm">All menu information is for reference only. Prices and availability may vary by location.</p>
                            </div>
                            
                            <div class="border-l-4 border-red-500 pl-4">
                                <h3 class="font-semibold text-gray-900">Nutritional Data</h3>
                                <p class="text-gray-600 text-sm">Nutritional information is approximate. For complete accuracy, consult official sources.</p>
                            </div>
                            
                            <div class="border-l-4 border-red-500 pl-4">
                                <h3 class="font-semibold text-gray-900">Website Issues</h3>
                                <p class="text-gray-600 text-sm">Report any technical issues or broken links and we'll fix them promptly.</p>
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <a href="<?php echo esc_url(home_url('?section=about')); ?>" 
                               class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                View Full FAQ
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Follow Us</h2>
                        
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            
                            <a href="#" class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center text-white hover:bg-blue-500 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            
                            <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.418-3.323C6.001 8.198 7.152 7.708 8.449 7.708s2.448.49 3.323 1.416c.875.875 1.365 2.026 1.365 3.323s-.49 2.448-1.365 3.323c-.875.807-2.026 1.297-3.323 1.297z"/>
                                </svg>
                            </a>
                        </div>
                        
                        <p class="text-gray-600 text-sm mt-4">
                            Stay updated with the latest menu information and food news.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>