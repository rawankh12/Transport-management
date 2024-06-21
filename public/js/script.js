document.addEventListener('DOMContentLoaded', function() {
    const profileBtn = document.getElementById('profile-btn');
    const themeToggleBtn = document.getElementById('mode-toggle');
    const themeIcon = themeToggleBtn.querySelector('i'); // الحصول على الأيقونة داخل زر تغيير الوضع
    const body = document.body;
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');
    const header = document.querySelector('.header');
    const main = document.querySelector('.main');
    const footer = document.querySelector('.footer');

    // الانتقال إلى صفحة البروفايل
    profileBtn.addEventListener('click', function() {
        window.location.href = '/profile'; // تأكد من أن هذا هو المسار الصحيح لصفحة البروفايل
    });

    // تغيير الوضع من الضوء إلى الظلام والعكس
    themeToggleBtn.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');
        header.classList.toggle('dark-mode');
        header.classList.toggle('light-mode');
        sidebar.classList.toggle('dark-mode');
        sidebar.classList.toggle('light-mode');
        footer.classList.toggle('dark-mode');
        footer.classList.toggle('light-mode');

         // تغيير الأيقونة بناءً على الوضع الحالي
         if (body.classList.contains('dark-mode')) {
            themeIcon.classList.remove('lni-sun');
            themeIcon.classList.add('lni-night');
        } else {
            themeIcon.classList.remove('lni-night');
            themeIcon.classList.add('lni-sun');
        }

        // حفظ الوضع في Local Storage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // تحميل الوضع المحفوظ من Local Storage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.add(savedTheme + '-mode');
        header.classList.add(savedTheme + '-mode');
        sidebar.classList.add(savedTheme + '-mode');
        footer.classList.add(savedTheme + '-mode');
        
        // تعيين الأيقونة بناءً على الوضع المحفوظ
        if (savedTheme === 'dark') {
            themeIcon.classList.remove('lni-sun');
            themeIcon.classList.add('lni-night');
        } else {
            themeIcon.classList.remove('lni-night');
            themeIcon.classList.add('lni-sun');
        }
    } else {
        body.classList.add('dark-mode'); // الوضع الافتراضي
        header.classList.add('dark-mode');
        sidebar.classList.add('dark-mode');
        footer.classList.add('dark-mode');
        themeIcon.classList.add('lni-night');
    }

    // توسيع وتضييق السايدبار والهيدر والمحتوى والفوتر
    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('expand');
        header.classList.toggle('expand');
        main.classList.toggle('expand');
        footer.classList.toggle('expand');
    });
});
