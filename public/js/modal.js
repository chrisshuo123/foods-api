// Setiap awal sebuah kata diawali dengan Caps
function toTitleCase(str) {
    return str.replace(/\b\w/g, char => char.toUpperCase());
}

// menghapus kab., kota, dan mengatur Lowercase pada function javascript
function cleanLocationName(name) {
    return toTitleCase (
        name.replace(/^(kab\.|kota)\s*/i, '').toLowerCase()
    );
}

function openModal(element) {
    // Ambil data dari attribute
    const name = element.dataset.name;
    const image = element.dataset.image;
    const body = element.dataset.body;
    const regency = element.dataset.regency;
    const province = element.dataset.province;
    const otherLocation = element.dataset.other_location;

    // Isi ke modal
    document.getElementById('modalTitle').textContent = name;
    document.getElementById('modalImage').src = '/img/' + image;
    document.getElementById('modalImage').alt = name;
    document.getElementById('modalBody').textContent = body;

    // Location Logic
    let locationText = 'Lokasi Tidak Tersedia';
    if(regency && province) {
        locationText = cleanLocationName(regency) + ', ' + cleanLocationName(province) + ', Indonesia';
    } else if (province) {
        locationText = cleanLocationName(province) + ', Indonesia';
    } else if(otherLocation) {
        locationText = otherLocation;
    }
    document.getElementById('modalLocation').textContent = locationText;

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