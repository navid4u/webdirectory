<!-- دسته‌بندی‌ها -->
<section class="categories" id="categories">
<h2>📚 دسته‌بندی سایت‌ها</h2>


  <input type="text" id="searchInput" placeholder="🔍 نام سایت یا توضیح را جستجو کنید...">
  <div id="results"></div>


    <script>
    let sitesData = {};

    fetch('data/category_sites.json')
      .then(response => response.json())
      .then(data => {
        sitesData = data;
      });

    document.getElementById('searchInput').addEventListener('input', function () {
      const query = this.value.trim().toLowerCase();
      const resultsContainer = document.getElementById('results');
      resultsContainer.innerHTML = '';

      if (!query) return;

      for (const category in sitesData) {
        sitesData[category].forEach(site => {
          const title = site.title.toLowerCase();
          const desc = site.description.toLowerCase();
          if (title.includes(query) || desc.includes(query)) {
            const result = document.createElement('div');
            result.className = 'result';
            result.innerHTML = `
              <img src="${site.favicon}" alt="">
              <a href="${site.url}" target="_blank">
                <div class="result-title">${site.title}</div>
                <div class="result-desc">${site.description}</div>
              </a>
            `;
            resultsContainer.appendChild(result);
          }
        });
      }
    });
  </script>
<div class="categories-wrapper">
  
  <div class="category-block">
    <div class="category-header tech">💻 تکنولوژی</div>
    <ul>
      <li><a href="category.php?category=programming">برنامه‌نویسی</a></li>
      <li><a href="category.php?category=ai">هوش مصنوعی</a></li>
      <li><a href="category.php?category=web-development">توسعه وب</a></li>
      <li><a href="category.php?category=gadgets">گجت‌ها</a></li>
      <li><a href="category.php?category=blockchain">بلاک‌چین</a></li>
    </ul>
  </div>

  <div class="category-block health">
    <div class="category-header health">🩺 سلامت</div>
    <ul>
      <li><a href="category.php?category=nutrition">تغذیه</a></li>
      <li><a href="category.php?category=psychology">روانشناسی</a></li>
      <li><a href="category.php?category=skincare">پوست و زیبایی</a></li>
      <li><a href="category.php?category=fitness">ورزش</a></li>
      <li><a href="category.php?category=traditional-medicine">طب سنتی</a></li>
    </ul>
  </div>

  <div class="category-block edu">
    <div class="category-header edu">🎓 آموزش</div>
    <ul>
      <li><a href="category.php?category=schools">مدارس</a></li>
      <li><a href="category.php?category=universities">دانشگاه‌ها</a></li>
      <li><a href="category.php?category=languages">زبان‌ها</a></li>
      <li><a href="category.php?category=schools">کلاس آنلاین</a></li>
      <li><a href="category.php?category=books">کتاب</a></li>
    </ul>
  </div>

  <div class="category-block shop">
    <div class="category-header shop">🛒 خرید و فروش</div>
    <ul>
      <li><a href="category.php?category=digital-devices">لوازم دیجیتال</a></li>
      <li><a href="category.php?category=clothing">پوشاک</a></li>
      <li><a href="category.php?category=supermarket">سوپرمارکت</a></li>
      <li><a href="category.php?category=handmade">محصولات دست‌ساز</a></li>
      <li><a href="category.php?category=home-appliances">لوازم خانگی</a></li>
    </ul>
  </div>

  <div class="category-block news">
    <div class="category-header news">📰 اخبار</div>
    <ul>
      <li><a href="category.php?category=news-agencies">خبرگزاری‌ها</a></li>
      <li><a href="category.php?category=politics">تحلیل سیاسی</a></li>
      <li><a href="category.php?category=sports-news">ورزشی</a></li>
      <li><a href="category.php?category=economy">اقتصادی</a></li>
      <li><a href="category.php?category=international">بین‌الملل</a></li>
    </ul>
  </div>

  <div class="category-block art">
    <div class="category-header art">🎨 هنر</div>
    <ul>
      <li><a href="category.php?category=painting">نقاشی</a></li>
      <li><a href="category.php?category=graphic-design">طراحی گرافیک</a></li>
      <li><a href="category.php?category=music">موسیقی</a></li>
      <li><a href="category.php?category=photography">عکاسی</a></li>
      <li><a href="category.php?category=cinema">فیلم</a></li>
    </ul>
  </div>

  <div class="category-block lifestyle">
    <div class="category-header lifestyle">💅 سبک زندگی</div>
    <ul>
      <li><a href="category.php?category=fashion">مد و فشن</a></li>
      <li><a href="category.php?category=decor">دکوراسیون</a></li>
      <li><a href="category.php?category=travel">سفر و گردشگری</a></li>
      <li><a href="category.php?category=relationships">روابط</a></li>
      <li><a href="category.php?category=family">خانواده</a></li>
    </ul>
  </div>

  <div class="category-block finance">
    <div class="category-header finance">💰 مالی و سرمایه‌گذاری</div>
    <ul>
      <li><a href="category.php?category=stock-market">بورس</a></li>
      <li><a href="category.php?category=cryptocurrency">رمزارزها</a></li>
      <li><a href="category.php?category=banking">بانک</a></li>
      <li><a href="category.php?category=loans">وام</a></li>
      <li><a href="category.php?category=financial-planning">مدیریت مالی</a></li>
    </ul>
  </div>

  <div class="category-block legal">
    <div class="category-header legal">⚖️ حقوقی</div>
    <ul>
      <li><a href="category.php?category=lawyers">وکالت</a></li>
      <li><a href="category.php?category=laws">قوانین</a></li>
      <li><a href="category.php?category=legal-advice">مشاوره حقوقی</a></li>
      <li><a href="category.php?category=courts">دادگاه</a></li>
      <li><a href="category.php?category=contracts">قراردادها</a></li>
    </ul>
  </div>

  <div class="category-block kids">
    <div class="category-header kids">🧸 کودک و نوجوان</div>
    <ul>
      <li><a href="category.php?category=games">بازی و سرگرمی</a></li>
      <li><a href="category.php?category=kids-education">آموزش</a></li>
      <li><a href="category.php?category=parenting">والدگری</a></li>
      <li><a href="category.php?category=animation">انیمیشن</a></li>
      <li><a href="category.php?category=kids-books">کتاب کودک</a></li>
    </ul>
  </div>

  <div class="category-block religion">
    <div class="category-header religion">🕌 مذهبی</div>
    <ul>
      <li><a href="category.php?category=quran">قرآن</a></li>
      <li><a href="category.php?category=islamic-laws">احکام</a></li>
      <li><a href="category.php?category=lectures">سخنرانی</a></li>
      <li><a href="category.php?category=occasions">مناسبت‌ها</a></li>
      <li><a href="category.php?category=duas">ادعیه</a></li>
    </ul>
  </div>

  <div class="category-block jobs">
    <div class="category-header jobs">🧑‍💼 کاریابی</div>
    <ul>
      <li><a href="category.php?category=job-postings">آگهی استخدام</a></li>
      <li><a href="category.php?category=resumes">رزومه‌سازی</a></li>
      <li><a href="category.php?category=interview">مصاحبه</a></li>
      <li><a href="category.php?category=freelance">فریلنس</a></li>
      <li><a href="category.php?category=student-jobs">کار دانشجویی</a></li>
    </ul>
  </div>

  <div class="category-block travel">
    <div class="category-header travel">✈️ گردشگری</div>
    <ul>
      <li><a href="category.php?category=iran-tourism">ایران‌گردی</a></li>
      <li><a href="category.php?category=hotel-booking">رزرو هتل</a></li>
      <li><a href="category.php?category=flight-tickets">بلیط پرواز</a></li>
      <li><a href="category.php?category=foreign-tours">تورهای خارجی</a></li>
      <li><a href="category.php?category=destination-reviews">نقد مقصدها</a></li>
    </ul>
  </div>

  <div class="category-block sport">
    <div class="category-header sport">⚽ ورزش</div>
    <ul>
      <li><a href="category.php?category=football">فوتبال</a></li>
      <li><a href="category.php?category=clubs">باشگاه‌ها</a></li>
      <li><a href="category.php?category=bodybuilding">بدنسازی</a></li>
      <li><a href="category.php?category=sports-nutrition">تغذیه ورزشی</a></li>
      <li><a href="category.php?category=sportswear">پوشاک ورزشی</a></li>
    </ul>
  </div>

  <div class="category-block tools">
    <div class="category-header tools">🛠️ ابزارها</div>
    <ul>
      <li><a href="category.php?category=speed-test">سنجش سرعت</a></li>
      <li><a href="category.php?category=screenshot">اسکرین‌شات آنلاین</a></li>
      <li><a href="category.php?category=image-editor">ویرایش تصویر</a></li>
      <li><a href="category.php?category=format-converter">تبدیل فرمت‌ها</a></li>
      <li><a href="category.php?category=calculator">ماشین حساب</a></li>
    </ul>
  </div>

</div>
</section>
