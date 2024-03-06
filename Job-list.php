<?php include 'app/header.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
  <style>
  .jobs-list-container {
  max-width: 900px;
  margin: 20px auto;
  font-family: "Rubik", sans-serif;
}

.jobs-list-container h2 {
  font-size: 30px;
  border-left: 4px solid #023047;
  padding-left: 20px;
}

.jobs-list-container .jobs {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 24px;
}

.jobs-list-container .jobs img {
  width: 60px;
}

.jobs-list-container .job {
  box-shadow: 0 4px 24px -8px rgba(2, 48, 71, 0.2);
  padding: 24px;
  border-radius: 16px;
  position: relative;
  display: flex;
  flex-direction: column;
  transition: all 400ms ease;
}

.jobs-list-container .job:hover {
  transform: scale(1.03);
}

.jobs-list-container .open-positions {
  position: absolute;
  top: 40px;
  right: 24px;
  color: #e63946;
}

.jobs-list-container .job-title {
  font-size: 20px;
  padding: 10px 0;
  margin: 0;
  color: #023047;
}

.jobs-list-container .details {
  margin-top: 6px;
  font-size: 14px;
  color: #333;
  line-height: 1.8;
  flex: 1;
}

.jobs-list-container .details-btn {
  text-decoration: none;
  border: 1px solid #023047;
  color: #000;
  padding: 8px 16px;
  border-radius: 8px;
  text-align: center;
  margin-top: 20px;
  transition: all 400ms ease;
}

.jobs-list-container .details-btn:hover {
  background: #023047;
  color: #fff;
}

.jobs-list-container .job-search {
  width: 100%;
  padding: 12px 24px;
  font-size: 18px;
  font-family: "Rubik", sans-serif;
  box-sizing: border-box;
  border: 1px solid #333;
  border-radius: 8px;
  margin-bottom: 20px;
}

@media (max-width: 940px) {
  .jobs-list-container .jobs {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 640px) {
  .jobs-list-container .jobs {
    grid-template-columns: 1fr;
    max-width: 400px;
    margin: 0 auto;
  }
}
 .AboutJoiningBenefit {
        border: 1px solid #29ade4;
        border-radius: 5px;
        text-align: center;
        -webkit-box-shadow: 0 0 6px -1px rgba(0, 0, 0, .75);
        -moz-box-shadow: 0 0 6px -1px rgba(0, 0, 0, .75);
        box-shadow: 0 0 6px -1px rgba(0, 0, 0, .75);
        width: 100%;
        max-height: 450px;
        height: 100%
    }
    
    .AboutJoiningBenefit div {
        font-size: 20px;
        font-weight: 700;
        padding: 10px 6px
    }
    
    .AboutJoiningBenefit p {
        font-size: 13px;
        line-height: 20px;
        padding: 10px
    }
</style>
  <body>
    
    <div class="jobs-list-container">
      <h2>Jobs</h2>

      <input class="job-search" type="text" placeholder="Search here..." />

      <div class="jobs"></div>
    </div>
<section class="mt-5">
<h5 class="mb-3 text-center " style="color:#00A1E0;"> Why You Should Join CodM software </h5>
     <h2 class="sub_titel text-center pb-5">Reliable Salesforce CRM partner since 2021</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-4 mb-3 mt-5">
                <div id="AboutJoiningBenefit">
                    <img src="https://img.freepik.com/free-photo/group-young-business-people-working-office_158595-5207.jpg?t=st=1709627854~exp=1709631454~hmac=2df441b9c3b8e9ef732b9c0baf63d05746a0e16c29a4602ed1bd6d386ebc5623&w=996" alt="Friendly Environment" class="w-100">
                    <div class="text-center fs-5"><b>Friendly Environment</b></div>
                    <p class="text-center">CodM promotes a healthy and friendly work environment to promote job satisfaction and increased
                        productivity</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-3 mt-5">
                <div id="AboutJoiningBenefit">
                    <img src="https://img.freepik.com/free-photo/young-fashion-smiling-hipster-man-drinking-coffee-city-cafe-lunch-time-with-notebook-suit_158538-7999.jpg?w=900" alt="Employee First" class="w-100">
                    <div class="text-center fs-5">Employee First</div>
                    <p class="text-center">We at CodM believe that employees must be given first preference irrespective of anything. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-3 mt-5">
                <div id="AboutJoiningBenefit">
                    <img src="https://img.freepik.com/free-photo/american-flag-background_23-2147837792.jpg?t=st=1709627772~exp=1709631372~hmac=ed4570404e7711cc129ac62b5a3b84a9f943421c38302b5596bff352de39b12f&w=996" alt="Fun At Work" class="w-100">
                    <div class="text-center fs-5">Fun At Work</div>
                    <p class="text-center">Well it’s not just about the work all the time, at CodM we encourage our colleagues to take part
                        in monthly, quarterly and annual fun activities.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-3 mt-5">
                <div id="AboutJoiningBenefit">
                    <img src="../assect/upload/career/EVERYP_1.jpg " alt="Training, Development & Rewards" class="w-100">
                    <div class="text-center fs-5">Training, Development & Rewards</div>
                    <p class="text-center">We at CodM provide training on new business insights and focus on development of skills and
                        career while rewarding our colleagues upon their achievements
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

  
 <!-- <div class="container-fluid">
    <h2 class="fs-1 mt-5 mb-4 text-center">Why Choose Us</h2>
    <ul>
      <li>5 days Working </li>
      <li>Cab facilities</li>
      <li>Employee provident fund </li>
      <li>Medical claim for employees </li>
      <li>We offer competitive prices.</li>
    </ul>
  </div> -->

    <script src="main.js"></script>
    <script>
        const jobs = [
  {
    title: "Hr Executive",
    image: "wp-content/uploads/sites/231/2022/08/software-engineer.svg",
    details:
      "Responsible for Recruitment and Talent Acquisition, HR Operations, Employee Engagement, Onboarding.",
    openPositions: "1",
    link: "job-description..php",
  },

  {
    title: "Data Scientist",
    image: "wp-content/uploads/sites/231/2022/08/data-scientist.svg",
    details:
      "Responsible for collecting, analyzing and interpreting large data sets to help organizations make better decisions.",
    openPositions: "3",
    link: "#",
  },


];

const jobsHeading = document.querySelector(".jobs-list-container h2");
const jobsContainer = document.querySelector(".jobs-list-container .jobs");
const jobSearch = document.querySelector(".jobs-list-container .job-search");

let searchTerm = "";

if (jobs.length == 1) {
  jobsHeading.innerHTML = `${jobs.length} Job`;
} else {
  jobsHeading.innerHTML = `${jobs.length} Jobs`;
}

const createJobListingCards = () => {
  jobsContainer.innerHTML = "";

  jobs.forEach((job) => {
    if (job.title.toLowerCase().includes(searchTerm.toLowerCase())) {
      let jobCard = document.createElement("div");
      jobCard.classList.add("job");

      let image = document.createElement("img");
      image.src = job.image;

      let title = document.createElement("h3");
      title.innerHTML = job.title;
      title.classList.add("job-title");

      let details = document.createElement("div");
      details.innerHTML = job.details;
      details.classList.add("details");

      let detailsBtn = document.createElement("a");
      detailsBtn.href = job.link;
      detailsBtn.innerHTML = "More Details";
      detailsBtn.classList.add("details-btn");

      let openPositions = document.createElement("span");
      openPositions.classList.add("open-positions");

      if (job.openPositions == 1) {
        openPositions.innerHTML = `${job.openPositions} open position`;
      } else {
        openPositions.innerHTML = `${job.openPositions} open positions`;
      }

      jobCard.appendChild(image);
      jobCard.appendChild(title);
      jobCard.appendChild(details);
      jobCard.appendChild(detailsBtn);
      jobCard.appendChild(openPositions);

      jobsContainer.appendChild(jobCard);
    }
  });
};

createJobListingCards();

jobSearch.addEventListener("input", (e) => {
  searchTerm = e.target.value;

  createJobListingCards();
});
        </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  </body>
<?php include 'app/footer.php';?>