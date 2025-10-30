@extends('layouts.app')

@section('title', 'Home - News Aggregator')

@section('content')
<div class="container">
    <h2>Latest News</h2>
    
    <div class="news-grid">
        <!-- Sample News Card 1 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/3498db/ffffff?text=Tech+News')
            @slot('category', 'Technology')
            @slot('title', 'AI Revolution: New Breakthrough in Machine Learning')
            @slot('summary', 'Scientists have developed a groundbreaking AI model that can understand complex patterns with unprecedented accuracy...')
            @slot('source', 'Tech Today')
            @slot('date', 'Oct 30, 2025')
            @slot('url', '#')
        @endcomponent
        
        <!-- Sample News Card 2 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/e74c3c/ffffff?text=Sports+News')
            @slot('category', 'Sports')
            @slot('title', 'World Cup 2026: Teams Prepare for Historic Tournament')
            @slot('summary', 'National teams around the globe are ramping up their training as the World Cup approaches next year...')
            @slot('source', 'Sports Weekly')
            @slot('date', 'Oct 29, 2025')
            @slot('url', '#')
        @endcomponent
        
        <!-- Sample News Card 3 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/2ecc71/ffffff?text=Business+News')
            @slot('category', 'Business')
            @slot('title', 'Stock Market Reaches New Heights Amid Economic Growth')
            @slot('summary', 'Global markets continue their upward trend with major indices posting record highs this quarter...')
            @slot('source', 'Business Insider')
            @slot('date', 'Oct 28, 2025')
            @slot('url', '#')
        @endcomponent
        
        <!-- Sample News Card 4 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/9b59b6/ffffff?text=Politics+News')
            @slot('category', 'Politics')
            @slot('title', 'International Summit Addresses Climate Change Policies')
            @slot('summary', 'World leaders gather to discuss comprehensive strategies for combating climate change and reducing emissions...')
            @slot('source', 'Global News')
            @slot('date', 'Oct 27, 2025')
            @slot('url', '#')
        @endcomponent
        
        <!-- Sample News Card 5 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/f39c12/ffffff?text=Entertainment')
            @slot('category', 'Entertainment')
            @slot('title', 'New Blockbuster Film Breaks Box Office Records')
            @slot('summary', 'The latest superhero movie has shattered previous records, earning over $500 million in its opening weekend...')
            @slot('source', 'Entertainment Weekly')
            @slot('date', 'Oct 26, 2025')
            @slot('url', '#')
        @endcomponent
        
        <!-- Sample News Card 6 -->
        @component('components.news-card')
            @slot('image', 'https://via.placeholder.com/400x250/1abc9c/ffffff?text=Health+News')
            @slot('category', 'Health')
            @slot('title', 'Medical Breakthrough: New Treatment Shows Promise')
            @slot('summary', 'Researchers announce promising results from clinical trials of a revolutionary new treatment for chronic diseases...')
            @slot('source', 'Health Today')
            @slot('date', 'Oct 25, 2025')
            @slot('url', '#')
        @endcomponent
    </div>
</div>
@endsection
