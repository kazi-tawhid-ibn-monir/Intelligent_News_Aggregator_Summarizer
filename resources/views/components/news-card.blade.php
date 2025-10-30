<div class="news-card">
    <div class="news-image">
        <img src="{{ $image ?? 'https://via.placeholder.com/400x250' }}" alt="{{ $title }}">
        <span class="news-category">{{ $category }}</span>
    </div>
    <div class="news-content">
        <h3 class="news-title">{{ $title }}</h3>
        <p class="news-summary">{{ $summary }}</p>
        <div class="news-meta">
            <span class="news-source">{{ $source }}</span>
            <span class="news-date">{{ $date }}</span>
        </div>
        <a href="{{ $url }}" class="read-more">Read More →</a>
    </div>
</div>
