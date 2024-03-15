<?php include 'app/header.php';?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Description </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-lg-6">
                <!-- Content for the left column -->
                <h2>Hr Executive</h2>
                <p><b>Location</b>: Noida</p>
                <p><b>Position Type</b>: Full-time</p>
                <p><b>Company Overview</b>:<br />
                    CodM Software empowers businesses with robust Salesforce CRM solutions. Our team of certified
                    experts, spanning India and the UK, deliver tailored implementations, consultations, and support,
                    optimizing sales, marketing, and customer service.</p>
                <p><b>Position Summary</b>:<br />
                    We are seeking a dedicated HR Executive to join our team and support various HR functions,
                    including recruitment, talent acquisition, HR operations, employee engagement, onboarding,
                    rewards and recognition (RnR), and exit processes. The ideal candidate will be detail-oriented,
                    proactive, and possess excellent communication and interpersonal skills.</p>
                <p><b>Key Responsibilities</b>:<br />
                <ul>
                    <li><b>Recruitment and Talent Acquisition</b>:Collaborate with hiring managers to identify staffing
                        needs and develop job descriptions. Source, screen, and interview candidates using various
                        recruiting methods. Coordinate and conduct interviews, assess candidate qualifications, and
                        facilitate the selection process. Maintain candidate databases and manage recruitment
                        metrics.</li>
                    <li><b>HR Operations</b>:Manage HR-related documentation and ensure compliance with labor laws
                        and regulations. Assist in the development and implementation of HR policies and
                        procedures. Handle employee inquiries and provide support on HR-related matters.</li>
                    <li><b>Employee Engagement</b>:Manage HR-related documentation and ensure compliance with labor laws
                        and regulations. Assist in the development and implementation of HR policies and
                        procedures. Handle employee inquiries and provide support on HR-related matters.</li>
                    <li><b>Onboarding</b>:Coordinate the onboarding process for new hires, including conducting
                        orientations and preparing onboarding materials. Ensure a smooth transition for new
                        employees into their roles and the company culture.</li>
                    <li><b>Rewards and Recognition (RnR)</b>:Administer rewards and recognition programs to
                        acknowledge employee contributions and achievements. Develop and implement strategies
                        to foster a culture of appreciation and recognition.</li>
                    <li><b>Exit Process</b>:Manage the exit process for departing employees, including conducting exit
                        interviews and processing necessary paperwork. Analyze exit data to identify trends and
                        areas for improvement.</li>
                </ul>

                </p>
                <p><b>Qualifications:</b></p>
                <ul>
                    <li>Bachelor's degree in Human Resources, Business Administration, or related field.</li>
                    <li>Proven experience in HR functions, including recruitment, talent acquisition, and employee
                        engagement.</li>
                    <li>Strong understanding of HR laws, regulations, and best practices.</li>
                    <li>Excellent communication, interpersonal, and organizational skills.</li>
                    <li>Ability to prioritize and manage multiple tasks in a fast-paced environment.</li>
                    <li>Proficiency in HRIS and Microsoft Office Suite.</li>
                </ul>
            </div>
            <style>
                /* Optional: Add some styling for the icon */
                .location-icon {
                    cursor: pointer;
                }
            </style>
            <div class="col-lg-6 mt-5 pt-5">
                <!-- Form for the right column -->
                <h2 class="pb-5">Fill in your details to apply now</h2>
                <form action="process.php" enctype="multipart/form-data" method="POST" id="carrierForm">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="Name" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Phone Number</label>
        <input type="tel" class="form-control" id="exampleInputPhone" name="Phone_Number" placeholder="Enter your number">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter your Email">
    </div>
    <div class="form-group">
        <label for="exampleInputLocation">Current Location</label>
        <div class="input-group">
            <input type="text" class="form-control" id="exampleInputLocation" name="Location" placeholder="Enter your location">
            <div class="input-group-append">
                <!-- Location icon to trigger location fetch -->
                <span class="input-group-text location-icon" onclick="fetchCurrentLocation()">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputRole">Job Profile</label>
        <select class="form-select" id="exampleInputRole" name="Job_Profile">
            <option value="" selected disabled>Select your role</option>
            <option value="Software Developer">Hr Executive </option>
            <option value="Project Manager">Salesforce Developer</option>
            <!-- <option value="Data Analyst">Data Analyst</option> -->
            <!-- Add more role options as needed -->
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputCV">Upload CV</label>
        <input type="file" class="form-control-file" id="exampleInputCV" name="cv" accept=".pdf,.docx,.doc">
    </div>
    <!-- <div class="form-group">
        <label for="exampleInputMessage">Message</label>
        <textarea class="form-control" id="exampleInputMessage" rows="3" placeholder="Enter your message"></textarea>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function fetchCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // Extract latitude and longitude
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                // Perform reverse geocoding
                fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${latitude}&lon=${longitude}`)
                    .then(response => response.json())
                    .then(data => {
                        const address = data.display_name;
                        document.getElementById("exampleInputLocation").value = address;
                    })
                    .catch(error => console.error('Error occurred during reverse geocoding:', error));
            }, function(error) {
                console.error('Error occurred while fetching location:', error.message);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    }
    </script>
    <!-- Include the Google Maps JavaScript API for reverse geocoding -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


<!-- Include the Google Maps JavaScript API for reverse geocoding -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


    <?php include 'app/footer.php';?>