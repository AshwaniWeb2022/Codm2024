<?php include 'app/header.php';?>
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
<section class="mt-5" >
<h5 class="mb-3 text-center " style="color:#00A1E0;"> Why You Should Join CodM Software </h5>
     <h2 class="sub_titel text-center pb-5">Reliable Salesforce CRM partner since 2021</h2>
    <div class="container">
        <ul>
          <li><b>Competitive Compensation</b>: Enjoy competitive salaries and comprehensive benefits packages, ensuring fair compensation for your contributions. </li>
          <li><b>Collaborative Work Environment</b>: Thrive in a collaborative work environment where teamwork, creativity, and innovation are encouraged and valued</li>
          <li><b>Health and Wellness Programs</b>: Take advantage of health and wellness programs, including health insurance, mental health resources, and wellness initiatives.</li>
          <li><b>Work-Life Balance</b>: Enjoy a healthy work-life balance with generous paid time off, vacation days, and holidays, allowing you to recharge and enjoy time with family and friends</li>
          <li><b>Employee Engagement Activities</b>: Participate in employee engagement activities, team-building events, and social gatherings to foster connections and camaraderie within the team</li>
          <li><b>Employee Provident Fund </b>: Employees can enjoy financial security and retirement benefits through the Employees' Provident Fund Organization (EPFO), ensuring a stable future beyond their working years.</li>
          <li><b>Cab Facilities </b>
    </div>
</section>
    <script src="main.js"></script>
    <script>
        const jobs = [
  {
    title: "Hr Executive",
    image: "wp-content/uploads/sites/231/2022/08/project-manager.svg",
    details:
      "Responsible for Recruitment and Talent Acquisition, HR Operations, Employee Engagement, Onboarding.",
    openPositions: "1",
    link: "job-description.php",
  },

  {
    title: "Salesforce Developer",
    image: "wp-content/uploads/sites/231/2022/08/software-engineer.svg",
    details:
      "Responsible for Develop end to end Salesforce solutions using LWC, APEX Class, Triggers, Visualforce pages,etc.",
    openPositions: "2",
    link: "job-description-sfd.php",
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