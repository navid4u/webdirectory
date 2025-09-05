# webdirectory
a web directory of websites - built on php and JSON
TopClicks – Web Directory Platform

TopClicks.ir is a lightweight web directory website built with PHP and JSON files instead of MySQL.
It allows adding, categorizing, and displaying websites in different fields such as technology, health, education, shopping, entertainment, and online tools.

🌐 Live Domain: www.topclicks.ir

🚀 Features

✅ JSON-based storage (no database required).

✅ Add new websites with title, description, URL, and auto-generated favicon.

✅ Categorized site listings (category_sites.json).

✅ Featured sites section (featured_sites.json).

✅ Blog articles support (blog_posts.json).

✅ Clean and simple PHP structure for easy deployment.

✅ SEO-friendly content sections.

📂 Project Structure
root/
│── add-site.php              # Form to submit a new site
│── add-site-code.php         # PHP handler to store site data in JSON
│── category.php              # Category page (displays filtered websites)
│── index.php                 # Homepage
│── success.php               # Success page after adding a site
│── scripts.js                # JavaScript logic
│
├── data/                     # JSON data storage
│   ├── blog_posts.json
│   ├── category_sites.json
│   └── featured_sites.json
│
├── includes/                 # Reusable PHP components
│   ├── header.php
│   ├── hero.php
│   ├── intro.php
│   ├── category-list.php
│   ├── articles.php
│   ├── feature-sites.php
│   └── footer.php
│
├── assets/                   # Images, icons, etc.
├── css/                      # Stylesheets

⚙️ How It Works

When a user submits a site via add-site.php, the data is processed by add-site-code.php.

The script automatically generates a favicon URL based on the submitted domain.

The site information is saved inside data/category_sites.json.

index.php and category.php read data from JSON files and render it dynamically.

🛠️ Tech Stack

Backend: PHP 8+

Frontend: HTML5, CSS3, JavaScript

Storage: JSON files (blog_posts.json, category_sites.json, featured_sites.json)

📌 Advantages of JSON-based Approach

No need for MySQL or any relational database.

Easy to deploy on shared hosting.

Human-readable and editable JSON files.

Lightweight and fast for small-to-medium sized directories.

🔮 Future Improvements

Search and filter functionality.

Admin dashboard for managing categories and posts.

API endpoints to fetch directory data in JSON.

📄 License

This project is licensed under the MIT License – feel free to use and modify.
