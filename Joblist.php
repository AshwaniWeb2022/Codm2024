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
</style>
  <body>
    <div class="jobs-list-container">
      <h2>Jobs</h2>

      <input class="job-search" type="text" placeholder="Search here..." />

      <div class="jobs"></div>
    </div>

    <script src="main.js"></script>
    <script>
        const jobs = [
  {
    title: "Hr Executive",
    image: "wp-content/uploads/sites/231/2022/08/software-engineer.svg",
    details:
      "Responsible for Recruitment and Talent Acquisition, HR Operations, Employee Engagement, Onboarding.",
    openPositions: "1",
    link: "jobdescription..php",
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
  </body>
</html>
<?php include 'app/footer.php';?>