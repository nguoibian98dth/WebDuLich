<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
          * {
            box-sizing:border-box
          }

          /* Slideshow container */
          .slideshow-container {
            max-width: 1360px;
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
         
          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }

          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3s;
            animation-name: fade;
            animation-duration: 3s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
        </style>
    </head>
    <body> 
      <div class="slideshow-container">       
        <div class="mySlides fade">
          <img src="images/banner.jpg" style="width:100%">         
        </div>

        <div class="mySlides fade">
          <img src="images/vietnam.jpg" style="width:100%">          
        </div>

        <div class="mySlides fade">
          <img src="images/thegioi1.jpg" style="width:100%">          
        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
    </body>
    <script>
      //khai báo biến slideIndex đại diện cho slide hiện tại
      var slideIndex;
      // KHai bào hàm hiển thị slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 2000);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
</html>