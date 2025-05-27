<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Our Application</h1>
        <p>Your one-stop solution for all your needs.</p>
        <a href="/get-started">Get Started</a>
        <!-- Hotel Booking Form -->
        <section class="hotel-booking-form">
            <div class="container-form">
                <form class="bookingForm" id="bookingForm" action="/booking/check" method="POST">
                    <div style="flex: 1 1 180px;">
                        <label class="checkin" for="checkin" >Check In</label>
                        <input class="checkin-inp" type="date" id="checkin" name="checkin" required >
                    </div>
                    <div style="flex: 1 1 180px;">
                        <label class="chekout" for="checkout" >Check Out</label>
                        <input class="chekout-inp" type="date" id="checkout" name="checkout" required >
                    </div>
                    <div style="flex: 1 1 120px;">
                        <label class="adults" for="adults" >Adults</label>
                        <select class="adults-inp" id="adults" name="adults" required >
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div style="flex: 1 1 120px;">
                        <label class="children" for="children" >Children</label>
                        <select class="children-inp" id="children" name="children" required >
                            <?php for ($i = 0; $i <= 10; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="cont-btn" >
                        <button class="submit" type="submit">Check Availability</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Hotel Booking Form -->
    </div>
</section>
<section class="features">
    <div class="container">
        <h2>Features</h2>
        <div class="feature-list">
            <div class="feature-item">
                <h3>Feature One</h3>
                <p>Description of feature one.</p>
            </div>
            <div class="feature-item">
                <h3>Feature Two</h3>
                <p>Description of feature two.</p>
            </div>
            <div class="feature-item">
                <h3>Feature Three</h3>
                <p>Description of feature three.</p>
            </div>
        </div>
    </div>
</section>