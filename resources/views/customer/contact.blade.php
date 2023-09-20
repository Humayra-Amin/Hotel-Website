@extends('customer.layouts.apps')

@section('apps')
<div class="contact">
    <div class="row">
            <img src="image/lobby4.jpg" alt="Contact Image" class="contactimage">
           <div class="tect-caption">
            <h1 class="text-contact">Contact Us</h1>
       </div>
    </div>
    <div class="row px-5 py-5">
            <h3 class="title-writeus">Write Us</h3>
            <div class="col-md-4 ">
            <form>
                <div class="form-group">
                    <input type="text"placeholder="Your name..."class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your email..." class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subject..." class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Message..."id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="send-btn-primary">
                <button type="submit" class="send-btn  send-btn-block ">SEND
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row maptop">
        <div class="col">
            <!-- Add your map code here (e.g., using Google Maps) -->
            <div class="map-container">
                <!-- Add your map embed code here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col contact-detail">
            <h3 class="contact-title">Contact Us</h3>
            <p>Email: hotelpradise@email.com</p>
            <p>Phone: +123456789</p>
            <p>Address: 123 Main St, Cityville</p>
        </div>
    </div>
</div>
</div>
@endsection