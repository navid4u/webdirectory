<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>افزودن سایت به دایرکتوری</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap');
    
    body {
      font-family: 'Vazirmatn', sans-serif;
    
     }
    
    h2 {
		font-size: 1.9rem;
      color: #1e3a8a;
      font-weight: 1900;
      text-align: center;
      margin-bottom: 3.5rem;
    }
    label {
      color: #1e3a8a;
      font-weight: 700;
      margin-bottom: 0.5rem;
      display: block;
    }
    input, textarea, select {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      background: #f9fafb;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    input:focus, textarea:focus, select:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
    }
    textarea {
      resize: vertical;
      min-height: 100px;
    }
    button {
      width: 100%;
      padding: 0.75rem;
      background: linear-gradient(to right, #3b82f6, #1e3a8a);
      color: white;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease, background 0.3s ease;
    }
    button:hover {
      transform: translateY(-2px);
      background: linear-gradient(to right, #2563eb, #1e40af);
    }
    @media (max-width: 640px) {
      .container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
  <?php include("includes/header.php"); ?>

<body>


<div style="margin: 50px"> 
    <h2> افزودن سایت جدید به دایرکتوری وبسایت های تاپ کلیکز</h2>
</div>
  <div class="container">

    <form method="POST" action="add-site-code.php">
      <label for="category">دسته‌بندی</label>
      <select name="category" id="category" required>
        <option value="ai">هوش مصنوعی</option>
        <option value="animations">انیمیشن‌ها</option>
        <option value="banking">بانکداری</option>
        <option value="blockchain">بلاک‌چین</option>
        <option value="bodybuilding">بدنسازی</option>
        <option value="books">کتاب‌ها</option>
        <option value="calculator">ماشین‌حساب</option>
        <option value="cinema">سینما</option>
        <option value="clothing">پوشاک</option>
        <option value="clubs">باشگاه‌ها</option>
        <option value="contracts">قراردادها</option>
        <option value="courts">محاکم قضایی</option>
        <option value="cryptocurrency">رمزارز</option>
        <option value="decor">دکوراسیون</option>
        <option value="destination-reviews">نقد مقاصد گردشگری</option>
        <option value="digital-devices">دستگاه‌های دیجیتال</option>
        <option value="duas">ادعیه</option>
        <option value="economy">اقتصاد</option>
        <option value="family">خانواده</option>
        <option value="fashion">مد و فشن</option>
        <option value="financial-planning">برنامه‌ریزی مالی</option>
        <option value="fitness">تناسب اندام</option>
        <option value="flight-tickets">بلیط هواپیما</option>
        <option value="football">فوتبال</option>
        <option value="foreign-tours">تورهای خارجی</option>
        <option value="format-converter">تبدیل فرمت</option>
        <option value="freelance">فریلنس</option>
        <option value="gadgets">گجت‌ها</option>
        <option value="games">بازی‌ها</option>
        <option value="graphic-design">طراحی گرافیک</option>
        <option value="handmade">دست‌ساز</option>
        <option value="home-appliances">لوازم خانگی</option>
        <option value="hotel-booking">رزرو هتل</option>
        <option value="image-editor">ویرایشگر تصویر</option>
        <option value="international">بین‌الملل</option>
        <option value="interview">مصاحبه شغلی</option>
        <option value="iran-tourism">گردشگری ایران</option>
        <option value="islamic-laws">احکام اسلامی</option>
        <option value="job-postings">آگهی استخدام</option>
        <option value="jobs">شغل‌ها</option>
        <option value="kids">کودکان</option>
        <option value="kids-books">کتاب کودک</option>
        <option value="kids-education">آموزش کودک</option>
        <option value="languages">زبان‌ها</option>
        <option value="laws">قوانین</option>
        <option value="lawyers">وکلاء</option>
        <option value="lectures">سخنرانی‌ها</option>
        <option value="legal-advice">مشاوره حقوقی</option>
        <option value="loans">وام‌ها</option>
        <option value="music">موسیقی</option>
        <option value="news-agencies">خبرگزاری‌ها</option>
        <option value="nutrition">تغذیه</option>
        <option value="occasions">مناسبت‌ها</option>
        <option value="painting">نقاشی</option>
        <option value="parenting">والدگری</option>
        <option value="photography">عکاسی</option>
        <option value="politics">سیاست</option>
        <option value="programming">برنامه‌نویسی</option>
        <option value="psychology">روانشناسی</option>
        <option value="quran">قرآن</option>
        <option value="relationships">روابط</option>
        <option value="religion">دین</option>
        <option value="resume">رزومه</option>
        <option value="schools">مدارس</option>
        <option value="screenshot">اسکرین‌شات</option>
        <option value="skincare">مراقبت پوست</option>
        <option value="speed-test">تست سرعت</option>
        <option value="sport">ورزش</option>
        <option value="sports">ورزشی</option>
        <option value="sports-nutrition">تغذیه ورزشی</option>
        <option value="sportswear">پوشاک ورزشی</option>
        <option value="stock-market">بازار بورس</option>
        <option value="student-jobs">شغل دانشجویی</option>
        <option value="supermarket">سوپرمارکت</option>
        <option value="traditional-medicine">طب سنتی</option>
        <option value="travel">سفر</option>
        <option value="universities">دانشگاه‌ها</option>
        <option value="web-development">توسعه وب</option>
      </select>

      <label for="title">عنوان سایت</label>
      <input type="text" name="title" id="title" required>

      <label for="description">توضیحات</label>
      <textarea name="description" id="description" required></textarea>

      <label for="url">لینک سایت</label>
      <input type="url" name="url" id="url" placeholder="https://example.com" required>

      <button type="submit">افزودن</button>
    </form>
  </div>

</body>
  <?php include("includes/footer.php"); ?>

</html>