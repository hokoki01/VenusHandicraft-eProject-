
// AnimationEffect
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        } 
            // TH nếu muốn page khi kéo xuống mất content ở phía trên (phần comments) 
            // else {
            //     entry.target.classList.remove('show');
            // }
    });
});

  

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));



// ++++++++++++++++Nút Back to the top+++++++++++++++++++++++++++

//lấy dữ liệu từ nút
let mybutton = document.getElementById("btn-back-to-top");

//Khi người dùng kéo chuột xuống 20px từ đầu trang của docs => sẽ xuất hiện nút BACK TO THE TOP
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
//Khi người dùng ấn vào nút BTTT thì nó sẽ tự động đẩy về đầu trang
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}