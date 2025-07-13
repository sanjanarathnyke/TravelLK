<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Discover Sri Lanka</title>
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
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About Discover Sri Lanka</h1>
            <p class="text-xl max-w-3xl mx-auto">Your trusted companion for exploring the Pearl of the Indian Ocean</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Mission Section -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <div class="w-24 h-1 bg-sri-lanka-gold mx-auto mb-6"></div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-600">
                <p class="text-xl leading-relaxed mb-6">
                    At Discover Sri Lanka, we are passionate about showcasing the incredible diversity and beauty of our island nation. Our mission is to provide travelers with comprehensive, authentic, and inspiring information about Sri Lanka's most captivating destinations.
                </p>
                
                <p class="leading-relaxed mb-6">
                    From the ancient kingdoms of Anuradhapura and the majestic rock fortress of Sigiriya to the pristine beaches of the south coast and the cool hill country of Nuwara Eliya, we believe every corner of Sri Lanka has a unique story to tell. Our goal is to help you discover these stories and create unforgettable memories.
                </p>
                
                <p class="leading-relaxed">
                    We are committed to promoting sustainable and responsible tourism that benefits local communities while preserving Sri Lanka's natural and cultural heritage for future generations.
                </p>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Vision</h2>
                <div class="w-24 h-1 bg-sri-lanka-gold mx-auto mb-6"></div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-600">
                <p class="text-xl leading-relaxed mb-6">
                    To be the most trusted and comprehensive digital guide for Sri Lanka, inspiring travelers from around the world to explore our beautiful island while fostering cultural understanding and environmental conservation.
                </p>
                
                <p class="leading-relaxed">
                    We envision a future where every visitor to Sri Lanka can experience the warmth of our hospitality, the richness of our culture, and the breathtaking beauty of our landscapes through well-informed and meaningful travel experiences.
                </p>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What We Offer</h2>
                <div class="w-24 h-1 bg-sri-lanka-gold mx-auto mb-6"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">🗺️</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Regional Guides</h3>
                            <p class="text-gray-600">Detailed information about all major regions of Sri Lanka, from cultural capitals to beach destinations.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">🏛️</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Cultural Insights</h3>
                            <p class="text-gray-600">Deep dives into Sri Lanka's rich history, traditions, and cultural practices.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">🍛</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Culinary Adventures</h3>
                            <p class="text-gray-600">Authentic local food recommendations and insights into regional specialties.</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">🎯</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Activity Recommendations</h3>
                            <p class="text-gray-600">Curated lists of activities and experiences tailored to different interests and travel styles.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">📱</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Mobile-Friendly Design</h3>
                            <p class="text-gray-600">Access our guides anywhere, anytime with our responsive, mobile-optimized platform.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="text-2xl">🌱</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Sustainable Tourism</h3>
                            <p class="text-gray-600">Promoting responsible travel practices that benefit local communities and the environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="bg-gradient-to-r from-sri-lanka-blue to-blue-800 text-white rounded-lg p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-4">Why Choose Discover Sri Lanka?</h2>
                <div class="w-24 h-1 bg-sri-lanka-gold mx-auto mb-6"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="p-4">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="text-xl font-semibold mb-2">Local Expertise</h3>
                    <p class="text-gray-200">Our content is created by locals who know Sri Lanka inside and out, ensuring authentic and accurate information.</p>
                </div>
                
                <div class="p-4">
                    <div class="text-4xl mb-4">🔄</div>
                    <h3 class="text-xl font-semibold mb-2">Regularly Updated</h3>
                    <p class="text-gray-200">We continuously update our guides with the latest information, ensuring you have access to current details.</p>
                </div>
                
                <div class="p-4">
                    <div class="text-4xl mb-4">❤️</div>
                    <h3 class="text-xl font-semibold mb-2">Passion-Driven</h3>
                    <p class="text-gray-200">Created by travel enthusiasts who are genuinely passionate about sharing Sri Lanka's beauty with the world.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('Footer.footer')
</body>
</html>