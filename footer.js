// footer.js

document.addEventListener("DOMContentLoaded", function() {
    // Footer içeriği
    const footerHTML = `
        <footer style="background-color: #A8C686; color: white; padding: 20px 0; text-align: center; margin-top: 50px;">
            <p>&copy; 2025 PetConnect. All rights reserved.</p>
            <p>Helping pets find loving homes and return to their families.</p>
        </footer>
    `;
    
    // Footer'ı body'nin sonuna ekliyoruz
    document.body.insertAdjacentHTML('beforeend', footerHTML);
});
