<?php include 'includes/header.php'; ?>

<main>
  <section>
    <h2>Contact Us</h2>
    <p>Have a question or feedback? Send us a message and we’ll get back to you shortly.</p>

    <form action="save_contact.php" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">👤 Name:</label>
        <input type="text" id="name" name="name" placeholder="Your full name" required>
      </div>

      <div class="form-group">
        <label for="email">📧 Email:</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>
      </div>

      <div class="form-group">
        <label for="message">📝 Message:</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
      </div>

      <button type="submit" class="btn-submit">📨 Submit</button>
    </form>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
