<!DOCTYPE html>
<html lang="fa" dir="rtl">
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>موفقیت در افزودن سایت</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap');
 
    .container {
      max-width: 600px;
      width: 100%;
       border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      margin-top: 2rem;
      text-align: center;
    }
    .success-icon {
      color: #10b981;
      font-size: 4rem;
      margin-bottom: 1rem;
    }
    h2 {
      color: #1e3a8a;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    p {
      color: #4b5563;
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
    }
    a {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background: linear-gradient(to right, #3b82f6, #1e3a8a);
      color: white;
      font-weight: 700;
      border-radius: 8px;
      text-decoration: none;
      transition: transform 0.2s ease, background 0.3s ease;
    }
    a:hover {
      transform: translateY(-2px);
      background: linear-gradient(to right, #2563eb, #1e40af);
    }
    @media (max-width: 640px) {
      .container {
        padding: 1.5rem;
      }
    }
  </style>
   <?php include("header.php"); ?>

 
  <div class="container">
    <div class="success-icon">✔</div>
    <h2>سایت با موفقیت اضافه شد!</h2>
    <p>سایت شما با موفقیت به دایرکتوری اضافه شد. می‌توانید سایت‌های بیشتری اضافه کنید یا به صفحه اصلی بازگردید.</p>
    <a href="add-site.php">افزودن سایت دیگر</a>
  </div>

   <?php include("footer.php"); ?>

</html>