document.addEventListener('DOMContentLoaded', () => {

    const themeToggler = document.querySelector(".theme-toggler");
    const applySavedTheme = () => {
        const isDarkMode = localStorage.getItem('dark-theme') === 'true';
        if (isDarkMode) {
            document.body.classList.add('dark-theme');
            themeToggler.querySelector('span:nth-child(1)').classList.add('active');
            themeToggler.querySelector('span:nth-child(2)').classList.remove('active');
        } else {
            document.body.classList.remove('dark-theme');
            themeToggler.querySelector('span:nth-child(1)').classList.remove('active');
            themeToggler.querySelector('span:nth-child(2)').classList.add('active');
        }
    }

    applySavedTheme();
    themeToggler.onclick = function() {
        document.body.classList.toggle('dark-theme');
        themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
        themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
        localStorage.setItem('dark-theme', document.body.classList.contains('dark-theme'));
    }

});






/*display content info in admin page */

const sideLinks = document.querySelectorAll('.sidebar a');
const contentSections = document.querySelectorAll('.tab-content');

function showSection(sectionId) {
    if (!sectionId) return;
    const targetSection = document.getElementById(sectionId);
    if (!targetSection) return;

    sideLinks.forEach(item => item.classList.remove('active'));
    contentSections.forEach(section => section.style.display = 'none');

    const matchingLink = Array.from(sideLinks).find(link => link.getAttribute('data-target') === sectionId);
    if (matchingLink) {
        matchingLink.classList.add('active');
    }
    targetSection.style.display = 'block';
}

sideLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');
        showSection(targetId);
        window.location.hash = targetId;
    });
});

window.addEventListener('load', () => {
    const initialHash = window.location.hash ? window.location.hash.substring(1) : 'vulnerabilities-section';
    showSection(initialHash);
});












/*edit content info in admin page */
/* --- إعداد المتغيرات الأساسية --- */
const modal = document.getElementById('editModal');
const closeBtn = document.querySelector('.close-modal');
const modalTitle = document.getElementById('modalTitle');

/* --- 1. مستمع الأحداث لفتح النافذة عند الضغط على زر التعديل --- */
document.addEventListener('click', function (e) {
    // البحث عن أقرب عنصر يحمل كلاس edit-btn للتأكد من التقاط النقرة بشكل صحيح
    const btn = e.target.closest('.edit-btn');
    
    if (btn) {
        const row = btn.closest('tr'); // الحصول على الصف الذي يحتوي الزر
        const sectionId = btn.closest('.tab-content').id; // معرفة القسم (dashboard, academy, etc.)

        modal.style.display = 'flex'; // إظهار النافذة
        generateForm(sectionId, row); // استدعاء دالة تعبئة البيانات
    }
});

function generateForm(section, row) {
    // إخفاء جميع أقسام الفورم أولاً (Reset)
    document.querySelectorAll('.modal-form-section').forEach(s => s.style.display = 'none');

    // توزيع البيانات بناءً على القسم
    if (section === 'dashboard-section') {
        modalTitle.innerText = "Edit User";
        document.getElementById('form-dashboard').style.display = 'block';
        
        // تعبئة الحقول (ID في الخلية 0، الاسم 1، الإيميل 2، الرتبة 3)
        document.getElementById('updateIdUser').value = row.cells[0].innerText;
        document.getElementById('updateName').value    = row.cells[1].innerText;
        document.getElementById('updateEmail').value   = row.cells[2].innerText;
        document.getElementById('updateRole').value    = row.cells[3].innerText;
    } 
    
    else if (section === 'academy-section') {
        modalTitle.innerText = "Edit Bug";
        document.getElementById('form-academy').style.display = 'block';
        
        // تعبئة الحقول (ID في الخلية 0، الاسم 1، الفئة 2، النص 3)
        document.getElementById('updateIdBug').value      = row.cells[0].innerText;
        document.getElementById('updateBugName').value    = row.cells[1].innerText;
        document.getElementById('updateCategory').value   = row.cells[2].innerText;
        document.getElementById('updateBugText').value    = row.cells[3].innerText;
    }
    
    else if (section === 'vulnerabilities-section') {
        modalTitle.innerText = "Edit Vulnerability";
        document.getElementById('form-vulnerabilities').style.display = 'block';
        
        // تعبئة الحقول (ID في الخلية 0، الاسم 1، الـ Flag 2، الرتبة 3)
        document.getElementById('updateIdVlun').value   = row.cells[0].innerText;
        document.getElementById('updateVlunName').value = row.cells[1].innerText;
        document.getElementById('updateFlag').value     = row.cells[2].innerText;
        document.getElementById('updateRoleVlun').value = row.cells[3].innerText;
    }
}

/* --- 3. دوال إغلاق النافذة المنبثقة --- */
function closeModal() {
    modal.style.display = 'none';
}

// الإغلاق عند الضغط على زر X
closeBtn.onclick = closeModal;

// الإغلاق عند الضغط في المساحة الخارجية (خارج محتوى النافذة)
window.onclick = (e) => { 
    if (e.target == modal) {
        closeModal();
    }
};








/*user updata info */

const openProfileModal = document.getElementById('openProfileModal');
const fileInput = document.getElementById('file-input');
const modalPreviewImg = document.getElementById('modalPreviewImg');
const saveProfileBtn = document.getElementById('saveProfileBtn');

openProfileModal.addEventListener('click', () => {
    document.querySelectorAll('.modal-form-section').forEach(s => s.style.display = 'none');
    
    modalTitle.innerText = "Edit Profile";
    document.getElementById('form-profile').style.display = 'block';
    
    // جلب البيانات الحالية من الصفحة ووضعها في المودال
    const currentName = document.querySelector('.profile .info b').innerText;
    const currentImg = document.querySelector('.profile-photo img').src;
    
    document.getElementById('inputProfileName').value = currentName;
    modalPreviewImg.src = currentImg;

    modal.style.display = 'flex';
});

// 2. معالجة تغيير الصورة (Preview)
fileInput.onchange = () => {
    const [file] = fileInput.files;
    if (file) {
        modalPreviewImg.src = URL.createObjectURL(file);
    }
};


// saveProfileBtn.addEventListener('click', () => {
//     const newName = document.getElementById('inputProfileName').value;
//     const newImgSrc = modalPreviewImg.src;


//     document.querySelector('.profile .info b').innerText = newName;
//     document.querySelector('.profile-photo img').src = newImgSrc;

//     closeModal();
// });





///////nav class active

document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll('.navbar a');
    
    const currentPath = window.location.pathname.split('/').pop();

    const currentPage = currentPath === "" ? "index.php" : currentPath;

    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href');

        if (linkPage === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});




///acamdey extended screen

let placeholder = null;

function openPage() {
  const original = document.getElementById("original-div");
  const destination = document.getElementById("destination-container");

  if (original && destination) {
    placeholder = document.createElement("div");
    
    original.parentNode.insertBefore(placeholder, original);

    destination.appendChild(original);
  }

  document.getElementById('popupPage').style.display = 'block';
  document.body.style.overflow = 'hidden'; 
}

function closePage() {
  const original = document.getElementById("original-div");

  if (original && placeholder) {
    placeholder.parentNode.insertBefore(original, placeholder);
    
    placeholder.remove();
    placeholder = null;
  }

  document.getElementById('popupPage').style.display = 'none';
  document.body.style.overflow = 'auto';
}
