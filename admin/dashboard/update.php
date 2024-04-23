<?php include 'header.php'; ?>
<?php include 'Sidebar.php'; ?>
     <style>
        .image-container {
            display: flex;
            align-items: center;
        }

        #imagePreview {
            margin-right: 20px;
        }

        #imagePreview img {
            max-width: 300px;
            max-height: 300px;
        }
    </style> 
    <div class="content-body default-height">
	<div class="container-fluid">
    <h1>Upload Image </h1>
    <div class="image-container">
        <input type="file" id="fileInput" accept="image/*" onchange="displayImage()">
        <div id="imagePreview"></div>
    </div>
    <button id="uploadButton" style="display: none;">Upload Image</button>
    </div>
    </div>
    <script>
        function displayImage() {
            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];
            
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image">`;
                    document.getElementById('uploadButton').style.display = 'block'; // Show the upload button
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
<?php include 'footer.php'; ?>