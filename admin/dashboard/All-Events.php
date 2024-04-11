<?php include 'header.php'; ?>
<?php include 'Sidebar.php'; ?>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

main {
    padding: 20px;
}

.event {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    position: relative;
    display: flex;
    flex-direction: row;
}

.event-image {
    width: 200px;
    height: 150px;
    margin-right: 20px;
}

.event-details {
    flex: 1;
}

.event h2 {
    margin-top: 0;
}

.event p {
    margin-bottom: 10px;
}

.button-container {
    position: absolute;
    bottom: 10px;
    right: 10px;
}

.button-container button {
    margin-right: 10px;
}
</style>
<div class="content-body default-height">
    <div class="container-fluid">
        <header>
            <h1>All Events</h1>
        </header>
        <main>
            <div class="event">
                <img class="event-image" src="event1.jpg" alt="Event 1 Image">
                <div class="event-details">
                    <h2>Event 1</h2>
                    <p>Date: January 10, 2024</p>
                    <p>Location: Venue 1</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum consequat
                        turpis, sit amet tincidunt nisl auctor vel. Phasellus nec convallis nisi. Integer hendrerit
                        purus felis, auctor tempus velit vestibulum at. Donec eget mauris nec mi faucibus interdum.</p>
                    <div class="button-container">
                        <button>Edit Event</button>
                        <button>Delete Event</button>
                    </div>
                </div>
            </div>
            <div class="event">
                <img class="event-image" src="event2.jpg" alt="Event 2 Image">
                <div class="event-details">
                    <h2>Event 2</h2>
                    <p>Date: February 15, 2024</p>
                    <p>Location: Venue 2</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum consequat
                        turpis, sit amet tincidunt nisl auctor vel. Phasellus nec convallis nisi. Integer hendrerit
                        purus felis, auctor tempus velit vestibulum at. Donec eget mauris nec mi faucibus interdum.</p>
                    <div class="button-container">
                        <button>Edit Event</button>
                        <button>Delete Event</button>
                    </div>
                </div>
            </div>
            <div class="event">
                <img class="event-image" src="event3.jpg" alt="Event 3 Image">
                <div class="event-details">
                    <h2>Event 3</h2>
                    <p>Date: March 20, 2024</p>
                    <p>Location: Venue 3</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum consequat
                        turpis, sit amet tincidunt nisl auctor vel. Phasellus nec convallis nisi. Integer hendrerit
                        purus felis, auctor tempus velit vestibulum at. Donec eget mauris nec mi faucibus interdum.</p>
                    <div class="button-container">
                        <button>Edit Event</button>
                        <button>Delete Event</button>
                    </div>
                </div>
            </div>
            <div class="new-event-button-container">
                <button>New Event</button>
            </div>
        </main>
    </div>
</div>
<?php include 'footer.php'; ?>