<?php include 'includes/header.php'; ?>
<?php include 'notice.html'; ?>

<main>
  <section class="hero">
    <h2>Welcome to Healthcare Info</h2>
    <p>This site offers practical health tips, wellness insights, and trusted resources to help you stay informed and live healthier.</p>
  </section>

  <section class="tip-carousel infographic">
    <h3>💡 Daily Health Tip</h3>
    <p id="tipText">Stay hydrated by drinking 8 glasses of water daily.</p>
  </section>

  <section class="infographic">
    <h2>🏅 Top 5 Daily Health Tips</h2>
    <ul class="tip-list">
      <li>💧 Drink 8 glasses of water</li>
      <li>🚶 Walk at least 30 minutes</li>
      <li>🥦 Eat 5 servings of fruits & veggies</li>
      <li>🛌 Sleep 7–8 hours each night</li>
      <li>🚫 Avoid sugary drinks</li>
    </ul>
  </section>

  <section class="infographic">
    <h2>💚 Healthy Living Benefits</h2>
    <p>Living a healthy lifestyle helps prevent chronic illnesses, boosts mental clarity, improves mood, and supports long-term well-being. Prioritize your health to thrive daily!</p>
  </section>

  <section class="cta infographic">
    <h2>Need Personalized Wellness Tips?</h2>
    <a href="contact.php" class="button">📬 Contact Us</a>
  </section>
</main>

<script>
  const tips = [
    "💧 Drink 8 glasses of water daily",
    "🚶 Take a 30-minute walk to boost mood",
    "🥗 Include greens in every meal",
    "😴 Get 7-8 hours of restful sleep",
    "🧘 Practice 5 minutes of mindfulness"
  ];
  let i = 0;
  setInterval(() => {
    document.getElementById("tipText").textContent = tips[i];
    i = (i + 1) % tips.length;
  }, 4000);
</script>

<?php include 'includes/footer.php'; ?>

