function openModal(element) {
    // Ambil data dari attribute
    const name = element.dataset.name;
    const image = element.dataset.image;
    const body = element.dataset.body;

    // Isi ke modal
    document.getElementById('modalTitle').textContent = name;
    document.getElementById('modalImage').src = '/img/' + image;
    document.getElementById('modalImage').alt = name;
    document.getElementById('modalBody').textContent = body;
    // Tampilkan Modal
    document.getElementById('myModal').style.display = 'block';
}

// Close modal functions
document.addEventListener('DOMContentLoaded', function() {
    function closeModal() {
        const modal = document.getElementById('myModal');
        modal.animate(
            [{ opacity: 1 }, { opacity: 0 }],
            { duration: 300, easing: 'ease' }
        ).onfinish = () =>  {
            modal.style.display = 'none';
            modal.style.opacity = '1'; // Reset opacity
        }
    }
    
    // Close with X button
    document.querySelector('.close-btn').addEventListener('click', closeModal);

    // Close with Close Button
    document.querySelector('.modal-close-btn').addEventListener('click', closeModal);
    
    // Close when Clicking Outside
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('myModal');
        if(event.target == modal) {
            closeModal();
        }
    });
});