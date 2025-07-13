<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Discover Sri Lanka</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sri-lanka-blue': '#003366',
                        'sri-lanka-gold': '#FFD700',
                        'tropical-green': '#228B22'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    @include('Header.header')

    <!-- Header -->
    <section class="bg-sri-lanka-blue text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl max-w-3xl mx-auto">Get in touch with us for travel advice, suggestions, or any questions about Sri Lanka</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <section class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Send us a Message</h2>
                
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sri-lanka-blue focus:border-transparent transition-colors"
                               placeholder="Enter your full name">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sri-lanka-blue focus:border-transparent transition-colors"
                               placeholder="Enter your email address">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <select id="subject" name="subject" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sri-lanka-blue focus:border-transparent transition-colors">
                            <option value="">Select a subject</option>
                            <option value="travel-advice">Travel Advice</option>
                            <option value="destination-info">Destination Information</option>
                            <option value="website-feedback">Website Feedback</option>
                            <option value="partnership">Partnership Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sri-lanka-blue focus:border-transparent transition-colors resize-vertical"
                                  placeholder="Tell us how we can help you..."></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-sri-lanka-blue text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-800 transition-colors focus:ring-2 focus:ring-sri-lanka-blue focus:ring-offset-2">
                        Send Message
                    </button>
                </form>
            </section>

            <!-- Contact Information -->
            <section class="space-y-8">
                <!-- Contact Details -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900">Get in Touch</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl text-sri-lanka-blue">📧</div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Email</h3>
                                <p class="text-gray-600">info@discoversrilanka.com</p>
                                <p class="text-gray-600">support@discoversrilanka.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl text-sri-lanka-blue">📞</div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Phone</h3>
                                <p class="text-gray-600">+94 11 123 4567</p>
                                <p class="text-gray-600">+94 77 123 4567 (Mobile)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl text-sri-lanka-blue">📍</div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Address</h3>
                                <p class="text-gray-600">123 Galle Road<br>Colombo 03<br>Sri Lanka</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="text-2xl text-sri-lanka-blue">🕒</div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Business Hours</h3>
                                <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p class="text-gray-600">Saturday: 9:00 AM - 2:00 PM</p>
                                <p class="text-gray-600">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
                    
                    <div class="space-y-4">
                        <div class="border-l-4 border-sri-lanka-blue pl-4">
                            <h3 class="font-semibold mb-2">How can I get travel advice for Sri Lanka?</h3>
                            <p class="text-gray-600 text-sm">Contact us via email or phone, and our local experts will provide personalized recommendations based on your interests and travel dates.</p>
                        </div>
                        
                        <div class="border-l-4 border-sri-lanka-blue pl-4">
                            <h3 class="font-semibold mb-2">Do you offer tour booking services?</h3>
                            <p class="text-gray-600 text-sm">We provide information and recommendations. For bookings, we can connect you with trusted local tour operators and accommodations.</p>
                        </div>
                        
                        <div class="border-l-4 border-sri-lanka-blue pl-4">
                            <h3 class="font-semibold mb-2">How often is your content updated?</h3>
                            <p class="text-gray-600 text-sm">We regularly update our destination guides and travel information to ensure accuracy and relevance for current travelers.</p>
                        </div>
                        
                        <div class="border-l-4 border-sri-lanka-blue pl-4">
                            <h3 class="font-semibold mb-2">Can you help with visa information?</h3>
                            <p class="text-gray-600 text-sm">While we provide general guidance, we recommend checking with official government sources or embassies for the most current visa requirements.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Call to Action -->
        <section class="mt-16 bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Explore Sri Lanka?</h2>
            <p class="text-xl mb-6">Start planning your adventure with our comprehensive regional guides</p>
            <a href="regions.html" class="inline-block bg-sri-lanka-gold text-sri-lanka-blue px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors">
                Explore All Regions
            </a>
        </section>
    </div>

    <!-- Footer -->
   @include('Footer.footer')
</body>
</html>