@extends('layouts.app')

@section('title', 'AI Summarizer - News Aggregator')

@section('content')
<div class="container">
    <h2>AI News Summarizer</h2>
    <p class="subtitle">Paste an article URL or text and get an AI-powered summary</p>
    
    <div class="summarizer-container">
        <!-- Input Section -->
        <div class="summarizer-form">
            <form id="summarizerForm">
                <div class="form-group">
                    <label for="inputType">Input Type:</label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="inputType" value="url" checked> Article URL
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="inputType" value="text"> Paste Text
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="input">Enter URL or Text:</label>
                    <textarea id="input" name="input" placeholder="Paste article URL or text here..." rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label for="summaryLength">Summary Length:</label>
                    <select id="summaryLength" name="summaryLength">
                        <option value="short">Short (3-4 sentences)</option>
                        <option value="medium" selected>Medium (5-7 sentences)</option>
                        <option value="long">Long (8-10 sentences)</option>
                    </select>
                </div>

                <button type="submit" class="submit-btn">Generate Summary</button>
            </form>
        </div>

        <!-- Result Section -->
        <div class="summarizer-result" id="resultSection" style="display: none;">
            <div class="result-card">
                <h3>Summary Result</h3>
                <div id="summaryOutput" class="summary-text"></div>
                <button type="button" class="copy-btn" onclick="copySummary()">Copy Summary</button>
                <button type="button" class="new-btn" onclick="newSummary()">Summarize Another</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('summarizerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // For now, show a demo summary (backend will be added later)
    const input = document.getElementById('input').value;
    
    if (!input.trim()) {
        alert('Please enter a URL or text');
        return;
    }

    // Demo summary text
    const demoSummary = `This is a sample AI-generated summary. In a real implementation, this would contain an intelligent summary of your article or text. The summary would capture the key points, main ideas, and important information from the source material in a concise format. Each summary is customized based on your selected length preference (short, medium, or long). The AI analyzes the content and extracts the most relevant and important information for you.`;

    document.getElementById('summaryOutput').innerHTML = demoSummary;
    document.getElementById('resultSection').style.display = 'block';
    window.scrollTo(0, document.getElementById('resultSection').offsetTop - 100);
});

function copySummary() {
    const summary = document.getElementById('summaryOutput').innerText;
    navigator.clipboard.writeText(summary);
    alert('Summary copied to clipboard!');
}

function newSummary() {
    document.getElementById('summarizerForm').reset();
    document.getElementById('resultSection').style.display = 'none';
    document.getElementById('input').focus();
}
</script>
@endsection
