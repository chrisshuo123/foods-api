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
        const wordLimit = parseInt(paragraph.dataset.wordLimit) || 50;
        const fullText = paragraph.textContent;
        console.log('Before:', fullText);
        const limitedText = limitWords(fullText, wordLimit);
        console.log('After:', limitedText);
        paragraph.textContent = limitedText;
    });

    // Close Button on the Modal
    document.querySelector('.modal-close-btn').onclick = function() {
        // document.getElementById('myModal').style.display = 'none';
        const modal = document.getElementById('myModal');
        modal.style.opacity = '0';
        setTimeout(() => { modal.style.display = 'none'; }, 300);
    };
});