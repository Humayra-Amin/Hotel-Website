@extends('customer.layouts.apps')

@section('apps')

<div class="contact">
    <div class="row">
            <img src="image/lobby4.jpg" alt="Contact Image" class="contactimage">
            <!-- <div>
                <h1 class="text">Contact Us</h1>
            </div>
            -->
    </div>
    <div class="row">
        <div class="col">
            <!-- Add your map code here (e.g., using Google Maps) -->
            <div class="map-container">
                <!-- Add your map embed code here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col contact-detail">
            <h3 class="contact-title">Contact Details</h3>
            <p>Email: hotelpradise@email.com</p>
            <p>Phone: +123456789</p>
            <p>Address: 123 Main St, Cityville</p>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>
            </div>
        </div>
    </div>
    <div class="row px-5 py-5">
        <div class="col-md-4 writetop">
            <h3>Write us</h3>
            <form>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection