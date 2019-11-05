<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="welcome to my website">
    <meta name="keywords" content="hotel, sherpur">
    <title>Event Management | About</title>
    <link rel="stylesheet" href="./css/events_style.css">
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="index.html">Event Management</a></h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="home-info" class="bg-dark">
        <div class="info-img"></div>
        <div class="info-content">
            <form action="create.php">
            <div class="checkbx">
                <label for="Event"><h2><span class="text-primary">Choose</span> your Events</h2></label>
                <input type="checkbox" name="events[]" value="Programming Contest" id="events"> Programming Contest <br>
                <input type="checkbox" name="events[]" value="Gaming Contest" id="events"> Gaming Contest <br>
                <input type="checkbox" name="events[]" value="Hackathon" id="events"> Hackathon <br>
                <input type="checkbox" name="events[]" value="Apps Dev Contest" id="events"> Apps Dev Contest <br>
                <input type="checkbox" name="events[]" value="Project Showcasing" id="events"> Project Showcasing <br>
                <input type="checkbox" name="events[]" value="Matlab Contest" id="events"> Matlab Contest
            </div> 

            <input type="submit" value="Submit">
            <button type="reset" >Reset</button>
            </form>

        </div>
    </section>

    <footer id="main-footer">
        <p>Event Management &copy; 2019, All Right Reserved</p>
    </footer>
</body>
</html>