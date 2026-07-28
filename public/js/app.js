// In app.js - Only run once
document.addEventListener('DOMContentLoaded', function() {
    function limitWords(text, wordLimit) {
        const words = text.split(' ').filter(word => word.trim().length > 0);
        if (words.length <= wordLimit) return text.trim();
        return words.slice(0, wordLimit).join(' ') + '...';
    }

    // Only target paragraphs with the specific class
    const paragraphs = document.querySelectorAll('.text-limiter');
    console.log('Found paragraphs:', paragraphs.length);
    
    paragraphs.forEach(function(paragraph) {
        const wordLimit = parseInt(paragraph.dataset.wordLimit) || 20;
        const fullText = paragraph.textContent;
        console.log('Before:', fullText);
        const limitedText = limitWords(fullText, wordLimit);
        console.log('After:', limitedText);
        paragraph.textContent = limitedText;
    });
});