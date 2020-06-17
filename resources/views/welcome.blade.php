<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('img/logo/Logo-2-100x100.png')}}" sizes="32x32">
  <title>TAYAFOOD</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Cormorant+Garamond:wght@400;500;600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
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
            <h1 class="slogan">CÔNG TY THỰC PHẨM TAYA VIỆT NAM</h1>
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
            <h3>Định hướng phát triển doanh nghiệp</h3>
            <p class="font-italic">
              Công ty tập trung trí tuệ và sức lực nắm bắt thời cơ, đổi mới nhận thức, khai thác tối đa các nguồn vốn, mạnh dạn đầu tư thiết bị, con người, ứng dụng công nghệ tiên tiến vào sản xuất kinh doanh; xây dựng Công ty trở thành một doanh nghiệp phát triển mạnh toàn diện.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Về sản phẩm.</li>
              <li><i class="icofont-check"></i> Về thị trường.</li>
              <li><i class="icofont-check"></i> Về khoa học công nghệ.</li>
              <li><i class="icofont-check"></i> Về đầu tư.</li>
              <li><i class="icofont-check"></i> Về tài chính.</li>
            </ul>
            <p>
              Quản lý chặt chẽ chi phí, đảm bảo sử dụng nguồn vốn có hiệu quả; nâng cao năng lực tài chính, đảm bảo phát triển liên tục, ổn định, vững chắc.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('img/details-2.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Trở thành đối tác tin cậy trong chuỗi cung ứng</h3>
            <p class="font-italic">
              Quản trị chuỗi cung ứng SCM có tác động rất lớn đến sự tín nhiệm của khách hàng, chiếm lĩnh thị trường, khả năng vươn xa của doanh nghiệp.
              Chuỗi cung ứng cũng là một trong các yếu tố quyết định khả năng cạnh tranh của một DN so với đối thủ cùng ngành.
            </p>
            <p>
              Chuỗi cung ứng của một công ty bắt đầu từ nhà máy sản xuất cho đến khi hàng hoá được giao đến tay khách hàng. Và chiến lược chuỗi cung ứng (Supply Chain Strategy) sẽ quyết định khi nào sản phẩm phải được chế tạo, vận chuyển đến các trung tâm phân phối và các kênh bán lẻ. Chiến lược nhắc tới ở đây chính là chiến lược “Kéo” và “Đẩy”, doanh nghiệp nên sử dụng hai chiến lược này như thế nào để có thể tối ưu hoá các nguồn lực đạt hiệu quả cao nhất
              Trước tiên chúng ta cần hiểu thế nào cho đúng về chiến lược “Đẩy” và “Kéo” trong hoạt động sản xuất.
            </p>
            <p>
              Trên thực tế khi nhìn vào cả chuỗi cung ứng, thì hầu hết doanh nghiệp sẽ kết hợp cả hai chiến lược Đẩy và Kéo để điều phối hoạt động sản xuất được diễn ra hiệu quả nhất. Điểm mà chuỗi cung ứng của bạn chuyển từ Đẩy sang Kéo hay ngược lại được gọi là Danh giới Đẩy, Kéo, hoặc Điểm Đẩy/Kéo. Đó là điểm mà bạn sản xuất hàng hóa của bạn dựa trên nhu cầu mà bạn hiện thực hóa nó thành nhu cầu thật sự. Ví dụ như một doanh nghiệp sẽ dự trữ sản phẩm tại các trung tâm phân phối của nó và chờ đến khi nhận được đơn đặt hàng từ khách hàng thì họ tiến hành giao sản phẩm.
              Và để có thể quản lý cả chuỗi cung ứng hoạt động hiệu quả thì cũng như việc tương tác thực hiện các chiến lược cung ứng sản xuất diễn ra tốt đẹp, TAYADOOD sử dụng thêm công cụ phần mềm quản lý cung ứng vào thực tế. Phần mềm quản lý chuỗi cung ứng của TAYA-SCM hỗ trợ rất tốt cho khâu quản lý cung ứng.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{asset('img/details-3.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Tận dụng xu hướng công nghệ </h3>
            <p>CMCN 4.0 với xu hướng phát triển dựa trên nền tảng tích hợp cao độ của hệ thống kết nối số hóa - vật lý - sinh học với sự đột phá của Internet vạn vật và Trí tuệ nhân tạo, đã và đang diễn ra với tốc độ khác nhau tại các quốc gia trên thế giới, tạo ra những tác động mạnh mẽ, ngày một gia tăng tới mọi mặt của đời sống kinh tế - xã hội, dẫn đến việc thay đổi phương thức và lực lượng sản xuất của xã hội.

              CMCN 4.0 có thể tạo ra lợi thế của những nước đi sau như Việt Nam so các nước phát triển do không bị hạn chế bởi quy mô cồng kềnh, quán tính lớn; tạo điều kiện cho Việt Nam bứt phá nhanh chóng, vượt qua các quốc gia khác cho dù xuất phát sau.</p>
            <ul>
              <li><i class="icofont-check"></i> Tập trung vào đào tạo nhân lực để bắt kịp công nghệ mới.</li>
              <li><i class="icofont-check"></i> Tận dụng sự phát triển của thị trường trực tuyến.</li>
              <li><i class="icofont-check"></i> Tận dụng sự phát triển các dịch vụ phần mềm, logictics...</li>
            </ul>
            <p>
              Tăng cường hợp tác công tư trong triển khai các dự án công nghệ quy mô lớn và hỗ trợ khởi nghiệp sáng tạo.
            </p>
            <p>
              Giữ tâm thế doanh nghiệp lúc nào cũng ở vị trí khởi nghiệp tinh gọn.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('img/details-4.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Sản phẩm chất lượng cao là động lực tăng trưởng</h3>
            <p class="font-italic">
              Trong 10 năm gần đây Việt Nam có những chuyển biến mạnh về xuất khẩu, từ nguyên liệu thô, nông sản thô san phát triển các ngành chế biến mạnh mẽ. Nhìn chung ngành chế biến Việt Nam đầu tư ít chất xám và chưa thật sự thấu hiểu thị trường.
            </p>
            <p>
              TAYADOOD quyết tâm mạnh mẽ tạo một sản phẩm làm thương hiệu quốc gia:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Luôn giữ vững, nâng cao chất lượng.</li>
              <li><i class="icofont-check"></i> Đổi mới sáng tạo qua từng sản phẩm.</li>
              <li><i class="icofont-check"></i> Luôn giữ sản phẩm ở mức đẹp và chất lượng.</li>
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
          <h2>Vài lời tâm quyết của ban lãnh đạo.</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>MTTA</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Lấy cảm hứng từ những lần đi du lịch nước ngoài. Được thưỡng thức các món ăn làm từ nguyên liệu của Việt Nam. Chúng tôi tự hỏi: "đã có nguyên liệu rồi chỉ cần đầu bếp mà thôi". Thế là TAYAFOOD ra đời.
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
                <p>276/3/66 Mã Lò,<br> Phường Bình Trị Đông, Quận Bình Tân, <br>TP. Hồ Chí Minh, Việt Nam</p>
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
              Phường Bình Trị Đông, Quận Bình Tân<br>
              TP.Hồ Chí Minh, Việt Nam <br><br>
              <strong>Phone:</strong> +84 989214800<br>
              <strong>Email:</strong> info@tayafood.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Liên Kết</h4>
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