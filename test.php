<style>
    .whatsapp-icon {
        height:auto;
        width:250px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 116px;
    }
</style>
<body>

    <!-- Font Awesome WhatsApp Icon -->
<div>
    <a href="#" id="whatsapp-btn" class="whatsapp-icon">
     <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
</div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
    document.getElementById("whatsapp-btn").addEventListener("click", function() {
        // Replace '123456789' with your actual WhatsApp number
        var phoneNumber = "9717116432";

        // Message to be sent
        var message = "Hello! I'm interested in your services.";

        // Construct the WhatsApp URL
        var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

        // Open WhatsApp in a new tab
        window.open(url);
    });
    </script>

</body>

</html>
