<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Our Application</h1>
        <p>Your one-stop solution for all your needs.</p>
        <a href="/get-started">Get Started</a>
<!-- Hotel Booking Form -->
<section class="hotel-booking-form" style="margin: 40px 0;">
    <div style="background: #fff; border-radius: 20px; padding: 40px 30px; max-width: 90vw; margin: 0 auto; box-shadow: 0 8px 32px rgba(0,0,0,0.08); display: flex; justify-content: center;">
        <form id="bookingForm" action="/booking/check" method="POST" style="width: 100%; display: flex; gap: 32px; align-items: flex-end; flex-wrap: wrap;">
            <div style="flex: 1 1 180px;">
                <label for="checkin" style="font-weight: bold; font-size: 1.3em;">Check In</label>
                <input type="date" id="checkin" name="checkin" required style="width: 100%; padding: 18px; border-radius: 8px; border: 2px solid #cfd8dc; font-size: 1.1em; margin-top: 8px;">
            </div>
            <div style="flex: 1 1 180px;">
                <label for="checkout" style="font-weight: bold; font-size: 1.3em;">Check Out</label>
                <input type="date" id="checkout" name="checkout" required style="width: 100%; padding: 18px; border-radius: 8px; border: 2px solid #cfd8dc; font-size: 1.1em; margin-top: 8px;">
            </div>
            <div style="flex: 1 1 120px;">
                <label for="adults" style="font-weight: bold; font-size: 1.3em;">Adults</label>
                <select id="adults" name="adults" required style="width: 100%; padding: 18px; border-radius: 8px; border: 2px solid #cfd8dc; font-size: 1.1em; margin-top: 8px;">
                    <?php for($i=1;$i<=10;$i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div style="flex: 1 1 120px;">
                <label for="children" style="font-weight: bold; font-size: 1.3em;">Children</label>
                <select id="children" name="children" required style="width: 100%; padding: 18px; border-radius: 8px; border: 2px solid #cfd8dc; font-size: 1.1em; margin-top: 8px;">
                    <?php for($i=0;$i<=10;$i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div style="flex: 1 1 220px; display: flex; align-items: flex-end;">
                <button type="submit" style="width: 100%; background: red; color: #fff; border: none; border-radius: 40px; padding: 18px 0; font-size: 1.4em; font-weight: 500; cursor: pointer; transition: background 0.2s;">Check Availability</button>
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