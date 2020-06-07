<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('img/logo/Logo-2-100x100.png')}}" sizes="32x32">
  <title>Laravel</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Cormorant+Garamond:wght@400;500;600" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('lib/aos/aos.css')}}" rel="stylesheet">

  <!-- Theme Styles -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <div class="text-light"><img alt="Logo" src="{{asset('img/logo/Logo-2-100x100.png')}}">&nbsp;<a href="#" class="logo-text">TayaFood</a></div>
        <div class="slogan">ready to eat, ready to use</div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Trang Chủ</a></li>
          <li><a href="#features">Công Ty</a></li>
          <li><a href="#gallery">Sản Phẩm</a></li>
          <li><a href="#pricing">Báo Giá</a></li>
          <li><a href="#faq">Hỏi-Đáp</a></li>
          <li><a href="#contact">Liên Hệ</a></li>

          <li>
            <a href="#"><img alt="Vietnamese" src="{{asset('img/country-flags/vietnam-flag-icon-32.png')}}"></a>
          </li>
          <li>
            <a href="#"><img alt="English" src="{{asset('img/country-flags/united-states-of-america-flag-icon-32.png')}}"></a>
          </li>
          <li class="nav-item">
            <language-switcher locale="{{ app()->getLocale() }}" link-en="" link-fr=""></language-switcher>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1 class="slogan">Công Ty Thực Phẩm TAYA Việt Nam</h1>
            <h2>Từ khi bắt đầu thành lập, TAYAFOOD đã cam kết một sứ mệnh là: tạo mắc xích kết nối nhà nông và người tiêu dùng nhằm cung cấp và sử dụng thực phẩm xanh mang tầm quốc tế.</h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Về Công Ty</h2>
          <p>Với đội ngũ lãnh đạo trẻ, năng động. TAYAFOOD muốn đem những món ngon của việt nam giới thiệu cho bạn bè quốc tế.
            Đi cùng với thực phẩm ngon thì trên hết đó là thực phẩm phải sạch và an toàn cho sức khỏe.
            Vì thế TAYAFOOD luôn đầu tư công nghệ vào quản lý, sản xuất nhằm tạo ra thực phẩm sạch, an toàn.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-infinite"></i>
                  <h4>Mắc xích quan trọng</h4>
                  <p>Xem chế biến thực phẩm ngon và sạch là giúp kết nối người nông dân và người tiêu dùng tạo ra chuỗi giá trị.
                    Điều đó các bên cùng có lợi (win-win) là phương châm làm việc của chúng tôi. </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-atom"></i>
                  <h4>Nghiên cứu & phát triển</h4>
                  <p>Từ lúc có ý tưởng đến lúc nghiên cứu thực phẩm tạo ra món ngon phù hợp với sức khỏe của mọi người.
                    Đây cũng chính là bộ phận không thể thiếu để tạo ra sản phẩm mới.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bxs-ship"></i>
                  <h4>Vươn ra biển lớn</h4>
                  <p>Cùng với triết lý "Đại dương xanh". Chúng tôi muốn giới thiệu cho bạn bè 5 châu về nông sản Việt.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-donate-heart"></i>
                  <h4>Sức khỏe là trên hết</h4>
                  <p>Việc sử dụng nông sản sạch để đem lại dinh dưỡng và sức khỏe đã có từ hàng ngàn năm.
                    Hôm nay với các thiết bị công nghệ chúng tôi có thể theo dõi và kiểm soát.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-spa"></i>
                  <h4>Trách nhiệm xã hội</h4>
                  <p>Dù doanh nhiệp lớn hay nhỏ thì nhiệm vụ của nó không thể nào xa rời với xã hội được.
                    Chúng tôi nhận thấy rằng cung cấp những sản phẩm sạch, an toàn là một trách nhiệm của TAYAFOOD.
                    Đồng thời cũng là "bàn tay vô hình" đánh thức các doanh nghiệp khác.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Nhân Tố - Con Người</h4>
                  <p>"Con người là mấu chốt quyết định sự thành bại của một doanh nghiệp".
                    Hiểu rõ vấn đề trên TAYAFOOD luôn đảm bảo toàn bộ nhân viên phải đạt được kiến thức về an toàn vệ sinh thực phẩm.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('img/features.svg')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{asset('img/details-1.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
              <li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
            </ul>
            <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('img/details-2.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{asset('img/details-3.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('img/details-4.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="icofont-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="icofont-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Sản Phẩm</h2>
          <p>Những sản phẩm hiện tại chúng tôi cung cấp cho khách hàng trong nước và quốc tế.</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">
          <a href="{{asset('img/gallery/muoi_100g.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/muoi_100g.jpg')}}" alt=""></a>
          <a href="{{asset('img/gallery/ngot_thanh_100g.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/ngot_thanh_100g.jpg')}}" alt=""></a>
          <a href="{{asset('img/gallery/rong_bien_100g.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/rong_bien_100g.jpg')}}" alt=""></a>
          <a href="{{asset('img/gallery/toi_ot_100g.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/toi_ot_100g.jpg')}}" alt=""></a>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Báo giá</h2>
          <p>Quí khách vui lòng nhấn đặt hàng để chúng tôi cung cấp giá mới nhất.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Cỡ lô mini</h3>
            <h4>50-99 Kg<span>/ lô</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Phù hợp với đối tác bán lẻ</li>
              <li><i class="bx bx-check"></i> Giao hàng linh hoạt</li>
              <li><i class="bx bx-check"></i> Trên toàn lãnh thổ Việt Nam</li>
              <li><i class="bx bx-check"></i> <span>Phí ship tùy vào địa lý</span></li>
              <li><i class="bx bx-check"></i> <span>Hỗ trợ thanh toán </span></li>
            </ul>
            <a href="#" class="get-started-btn">Đặt hàng</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Cỡ lô medium</h3>
            <h4>100-299 Kg<span>/ lô</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Phù hợp với đối tác bán sỉ & lẻ</li>
              <li><i class="bx bx-check"></i> Giao hàng miễn phí 200 Km</li>
              <li><i class="bx bx-check"></i> Trên toàn lãnh thổ Việt Nam</li>
              <li><i class="bx bx-check"></i> Ship tất cả các nước Đông Nam Á</li>
            </ul>
            <a href="#" class="get-started-btn">Đặt hàng</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Cỡ lô maxi</h3>
            <h4>300-500 Kg<span>/ lô</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Phù hợp với đối tác bán sỉ</li>
              <li><i class="bx bx-check"></i> Giao hàng trong vòng 7-15 ngày làm việc</li>
              <li><i class="bx bx-check"></i> Ship tất cả các nước</li>
            </ul>
            <a href="#" class="get-started-btn">Đặt hàng</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Câu hỏi thường gặp</h2>
          <p>Hiện tại chúng tôi dành thời gian trả lời các câu hỏi định kỳ mỗi tuần làm việc. Để giúp các đối tác chủ động thời gian xem xét các câu hỏi đã có sẵn.</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">TAYAFOOD có bán hàng online hay không ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Trả lời: Trước đây chúng tôi có vận hành hệ thống bán hàng online. Bây giờ chúng tôi chuyển qua cho các đối tác. Để tập trung nâng cao chất lượng sản phẩm.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Nếu tôi đặt hàng cỡ lô maxi giao hàng qua Thái Lan TAYAFOOD có ship không ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Trả lời: Cảm ơn bạn đã tin tưởng. Trong điều kiện cỡ lô nhỏ xuất ra các nước Đông Nam Á quí khách vui lòng chịu chi phí hải quan. Chân thành cảm ơn.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Nếu tôi đặt hàng 500 Kg và yêu cầu TAYAFOOD làm theo khẩu vị của tôi có được không ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Trả lời: 500 Kg là cỡ lô maxi sẽ có giá ưu đãi cho đối tác bán sỉ. Còn về khẩu vị hiện chúng tôi chưa có chính sách để tùy khách hàng chọn. Vì một số yêu cầu đăng ký hàng hóa và thủ tục pháp lý. Nếu quí khách có yêu cầu về mặt khẩu vị vui lòng gửi mail góp ý cho chúng tôi tại support@tayafood.com. Chân thành cảm ơn.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Thủ tục đặt hàng của TAYAFOOD như thế nào? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                  Trả lời: Quý khách gửi mail đặt hàng. Bộ phận bán hàng của chúng tôi sẽ liên lạc sẽ xác nhận và tiến hành sản xuất từ 3 -7 ngày làm việc. Vì là hàng không có sẵn nên quá trình này có thể mất chút thời gian.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">TAYAFOOD có chi nhánh nào ở nước ngoài? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Trả lời: Hiện tại TAYAFOOD chưa thiết lập văn phòng đại diện tại nước ngoài. Chúng tôi cũng có kế hoạch trong tương lai. Và sẽ gửi qua mail thông báo cho khách hàng.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Liên Lạc</h2>
          <p>Để biết thêm nhiều thông tin đặt hàng, chính sách đại lý, đối tác vui lòng liên lạc theo địa chỉ chính thức của chúng tôi.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>Địa Chỉ</h4>
                <p>276/3/66 Mã Lò<br>TP. Hồ Chí Minh, Việt Nam</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-phone"></i>
                <h4>Điện Thoại</h4>
                <p>+84 989214800<br>+84 934040664</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email</h4>
                <p>contact@tayafood.com<br>info@tayafood.com</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Giờ Làm Việc</h4>
                <p>Thứ 2 - Thứ 6: 8AM to 5PM<br>Thứ 7: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Nhận thông báo từ TAYAFOOD</h4>
            <p>Thông tin về các sản phẩm, hoạt động của TAYAFOOD</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Đăng Ký">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>TayaFood</h3>
            <p>
              276/3/66 Mã Lò <br>
              Quận Tân Phú<br>
              TP.Hồ Chí Minh, Việt Nam <br><br>
              <strong>Phone:</strong> +84 989214800<br>
              <strong>Email:</strong> info@tayafood.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Công Ty</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dịch Vụ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Điều khoản dịch vụ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Chính sách bảo mật</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Dịch vụ</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sản Xuất</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Giao Vận</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kho Bãi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Phân Phối</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Thiết kế</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Mạng Xã Hội</h4>
            <p>Kết nối với TAYAFOOD qua các kênh của bạn</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>TAYAFOOD.COM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="#">TAYA-IT Department</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('lib/php-email-form/validate.js')}}"></script>
  <script src="{{asset('lib/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('lib/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>