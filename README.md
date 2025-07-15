# Discover Sri Lanka

**Discover Sri Lanka** is a comprehensive digital travel guide built with Laravel, designed to help travelers explore the beauty, culture, and diversity of Sri Lanka. The platform offers in-depth regional guides, curated attractions, local food highlights, and activity recommendations, all with a focus on sustainable and responsible tourism.

## 🌏 Project Mission

Our mission is to provide travelers with authentic, up-to-date, and inspiring information about Sri Lanka’s most captivating destinations, while promoting sustainable tourism that benefits local communities and preserves the island’s natural and cultural heritage.

---

## ✨ Features

- **Comprehensive Regional Guides:** Detailed information about all major regions, from ancient cities to pristine beaches and hill country retreats.
- **Cultural Insights:** Deep dives into Sri Lanka’s history, traditions, and cultural practices.
- **Culinary Adventures:** Authentic local food recommendations and insights into regional specialties.
- **Activity Recommendations:** Curated lists of things to do, tailored to different interests and travel styles.
- **Mobile-Friendly Design:** Fully responsive and accessible on all devices.
- **Sustainable Tourism:** Promotes responsible travel practices and local community benefits.
- **Regularly Updated:** Content is maintained by local experts and travel enthusiasts.

---

## 🗺️ Main Sections

- **Home:** Welcome and introduction to Sri Lanka.
- **Regions:** Explore destinations like Kandy, Down South, Ella, Sigiriya, Anuradhapura, Trincomalee, Colombo, Jaffna, and more.
- **Top Attractions:** Highlights of must-see places in each region.
- **Things To Do:** Activities and experiences for every traveler.
- **Food Highlights:** Local cuisine and food culture.
- **About & Contact:** Learn about the project and get in touch.

---

## 🚀 Getting Started

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/TravelLK.git
   cd TravelLK
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node dependencies:**
   ```bash
   npm install
   ```

4. **Copy and configure environment:**
   ```bash
   cp .env.example .env
   # Edit .env as needed (database, app name, etc.)
   ```

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations and seeders:**
   ```bash
   php artisan migrate --seed
   ```

7. **Start the development servers:**
   ```bash
   # In one terminal
   php artisan serve

   # In another terminal
   npm run dev
   ```
   Or use the combined script:
   ```bash
   composer run dev
   ```

8. **Visit the app:**  
   Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🧪 Running Tests

```bash
php artisan test
```

---

## 🤝 Contributing

Contributions are welcome! Please fork the repository and submit a pull request. For major changes, open an issue first to discuss what you would like to change.

- Follow PSR-12 coding standards.
- Write clear, descriptive commit messages.
- Add tests for new features.

---

## 📄 License

This project is open-sourced under the [MIT license](LICENSE).

---

## 🙏 Credits

- Built with [Laravel](https://laravel.com/)
- UI powered by [Tailwind CSS](https://tailwindcss.com/)
- Content and images by local travel enthusiasts

---
