# Intelligent News Aggregator & Summarizer

A Laravel-based web application that aggregates news from multiple sources, provides AI-powered summaries, and includes an intelligent chat assistant to help users find and understand news articles.

## 📋 Project Overview

**Course:** Web Engineering Lab (CSE416)  
**Institution:** Daffodil International University  
**Project Type:** Full-Stack Web Application  
**Framework:** Laravel 10/11  
**Database:** MySQL  
**Frontend:** HTML, CSS, JavaScript, Blade Templates

---

## ✨ Features

### Core Features:
- **📰 News Aggregation** - Fetch latest news from multiple sources (News API, RSS feeds)
- **🏠 Homepage** - Display trending news with categories and search functionality
- **📂 Category Pages** - Browse news by categories (Technology, Sports, Politics, Business, Health, Entertainment)
- **🤖 AI Summarizer** - Paste article URL or text to get AI-generated summaries
- **💬 Chat Assistant** - Intelligent chatbot to help find and discuss news
- **⚙️ Admin Panel** - Manage news sources, categories, and platform content
- **📱 Responsive Design** - Mobile-friendly interface

---

## 🛠️ Tech Stack

| Component | Technology |
|-----------|-----------|
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | Laravel 10/11 (PHP 8.1+) |
| **Database** | MySQL |
| **Package Manager** | Composer |
| **Version Control** | Git/GitHub |
| **IDE** | VS Code |
| **AI Integration** | OpenAI API / Hugging Face |
| **News API** | NewsAPI.org / RSS Feeds |

---

## 📁 Project Structure

```
news-aggregator/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── CategoryController.php
│   │   │   ├── SummarizerController.php
│   │   │   ├── ChatController.php
│   │   │   └── AdminController.php
│   │   └── Requests/
│   ├── Models/
│   │   ├── News.php
│   │   ├── Category.php
│   │   └── Summary.php
│   └── Services/
│       ├── NewsScraperService.php
│       ├── AISummarizerService.php
│       └── ChatbotService.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── partials/
│   │   ├── components/
│   │   ├── home/
│   │   ├── category/
│   │   ├── summarizer/
│   │   ├── chat/
│   │   └── admin/
│   ├── css/
│   └── js/
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   ├── web.php
│   └── api.php
├── public/
│   ├── css/
│   ├── js/
│   └── images/
└── config/
```

---

## 👥 Team Members & Task Distribution

| # | Team Member | Role | Responsibilities | Time % |
|---|-------------|------|-----------------|--------|
| **1** | Frontend Lead | Frontend Developer | Homepage, Category pages, News cards, Chat UI, CSS styling | 30% |
| **2** | Backend Lead | Database Developer | Database design, Migrations, Models, Relationships, Seeding | 25% |
| **3** | API Developer | Integration Specialist | News API integration, NewsScraperService, Data fetching | 20% |
| **4** | AI Developer | Full-Stack Developer | Controllers, AI Services, Summarizer, Chatbot functionality | 15% |
| **5** | QA Lead | Admin & Testing | Admin Dashboard, Testing, Bug fixing, Documentation | 10% |

---

## 📋 Project Phases

| Phase | Duration | Focus | Lead |
|-------|----------|-------|------|
| **Phase 1: Frontend Development** | Week 1 | UI/UX, Layouts, Components | Frontend Lead |
| **Phase 2: Database Setup** | Week 1-2 | Schema, Models, Migrations | Backend Lead |
| **Phase 3: API Integration** | Week 2-3 | News sources, Data fetching | API Developer |
| **Phase 4: AI Features** | Week 3-4 | Summarizer, Chatbot, Controllers | AI Developer |
| **Phase 5: Admin & Testing** | Week 4 | Admin panel, QA, Bug fixes | QA Lead |
| **Phase 6: Deployment** | Week 5 | Final testing, Documentation, Deployment | All |

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL 5.7+
- Node.js & NPM (optional, for Vite)

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/yourusername/news-aggregator.git
cd news-aggregator
```

2. **Install dependencies**
```bash
composer install
```

3. **Create environment file**
```bash
cp .env.example .env
```

4. **Generate application key**
```bash
php artisan key:generate
```

5. **Configure database in .env**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=news_aggregator
DB_USERNAME=root
DB_PASSWORD=
```

6. **Run migrations**
```bash
php artisan migrate
```

7. **Seed sample data**
```bash
php artisan db:seed
```

8. **Start the application**
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## 📝 Current Progress

### ✅ Completed (30%)
- [x] Project structure setup
- [x] Header & Footer components
- [x] Homepage with news grid
- [x] News card component
- [x] AI Summarizer page (frontend)
- [x] Routes setup
- [x] Responsive design

### 🔄 In Progress
- [ ] Category pages
- [ ] Chat Assistant page
- [ ] Admin Dashboard

### ❌ Not Started (70%)
- [ ] Database setup
- [ ] Models & Migrations
- [ ] Controllers implementation
- [ ] News API integration
- [ ] AI Services integration
- [ ] Admin CRUD operations
- [ ] Search functionality
- [ ] Testing & Deployment

---

## 🎯 Main Features Implementation

### Homepage
- Display latest news from aggregated sources
- News cards with image, title, summary, category
- Search bar for quick news lookup
- Category filters

### Category Pages
- Filter news by category (Technology, Sports, Politics, etc.)
- Pagination for large result sets
- Category-specific landing pages

### AI Summarizer
- Accept article URL or text input
- Generate AI-powered summaries of different lengths
- Copy summary to clipboard
- Share summary functionality

### Chat Assistant
- Conversational interface
- Ask questions about news
- Get news recommendations
- Search through articles via chat

### Admin Panel
- Manage news sources
- Add/edit/delete categories
- Monitor platform statistics
- User management

---

## 🔗 API Integration

### News API
- Integration with NewsAPI.org
- RSS feed support
- Multiple news sources
- Category-based filtering

### AI Integration
- OpenAI API for text summarization
- Natural Language Processing
- Sentiment analysis
- Chatbot responses

---

## 🤝 Contributing

This is a course project by the Web Engineering Lab team. For contributions:

1. Create a feature branch (`git checkout -b feature/AmazingFeature`)
2. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
3. Push to the branch (`git push origin feature/AmazingFeature`)
4. Open a Pull Request

---

## 📚 Documentation

- [Project Proposal](./docs/proposal.md)
- [SRS Document](./docs/SRS.pdf)
- [Database Schema](./docs/database-schema.md)
- [API Documentation](./docs/api.md)
- [Installation Guide](./INSTALL.md)

---

## 📞 Support

For issues or questions, please open an issue on GitHub or contact the development team.

---

## 📄 License

This project is licensed for educational purposes at Daffodil International University.

---

## 🎓 Course Information

**Course Code:** CSE416  
**Course Title:** Web Engineering Lab  
**Department:** Software Engineering  
**Institution:** Daffodil International University  
**Semester:** Fall 2025

---

## ✨ Built With

- **Laravel** - PHP Web Framework
- **MySQL** - Database Management
- **Bootstrap/CSS** - Responsive Styling
- **JavaScript** - Client-side Interactions
- **Blade** - PHP Templating Engine

---

**Last Updated:** November 15, 2025  
**Version:** 1.0.0-alpha