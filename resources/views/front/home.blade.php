@push('css')
    <style>
        .text-transparent {
            background: rgba(0, 0, 0, 0.5);
        }

        .overlay-zoom {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(140, 93, 161, 0.5);
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }

        .zoom:hover .overlay-zoom {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .text-zoom {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .slick-prev {
            left: 10px;
            z-index: 1;
        }

        .slick-next {
            right: 10px;
            z-index: 1;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('.blog').slick({
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.review').slick({
                dots: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.category').slick({
                dots: false,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                pauseOnHover: false,
            });
        });
    </script>

    <script>
        $('#readMore').click(function() {
            if ($(this).text() == 'Read Less') $(this).text('Read More');
            else $(this).text('Read Less');
        });
    </script>
@endpush

<x-guest-layout>

    {{-- video header --}}
    <header>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://www.amospa.com/wp-content/uploads/2019/03/index.mp4" type="video/mp4">
        </video>
    </header>

    {{-- category --}}
    <section class="container mb-lg-5">
        <h1 class="text-uppercase text-center mt-5 fs-4">amo spa bali</h1>
        <hr class="text-black border-2 opacity-75 mb-5 mb-lg-4">

        <div class="row">
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class="position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-2 px-lg-2 mb-lg-3">
                <div class=" position-relative m-auto">
                    <div class="category">
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                        <div>
                            <img src="http://via.placeholder.com/400x470" class="w-100">
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center py-4">
                        <h2 class="p-0 m-0 fs-5">Heading</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- gofood --}}
    <section class="container-fluid bg-purple text-center">
        <div class="container row m-auto">
            <div class="col-lg-6">
                <h2 class="my-lg-5 pt-lg-5">We Deliver!</h2>
                <img src="{{ asset('images/gf-promo2.png') }}" class="m-auto">
                <p class="my-lg-4">
                    Our menu is stuffed full of superb, filling and healthy dishes – not to mention the creamiest, fruitiest, juiciest range of beverages in town.
                </p>
                <a href="#" class="btn btn-purple m-auto py-2 px-3 fw-bold text-uppercase">monthly promotions</a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative my-lg-5 zoom">
                    <img src="https://via.placeholder.com/400x270" alt="Avatar" class="w-100">
                    <div class="overlay-zoom">
                        <div class="text-zoom text-uppercase fs-4 fw-bold">see our full menu</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- news & information --}}
    <section class="container px-4 py-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row blog">
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="position-relative m-auto">
                            <img src="http://via.placeholder.com/400x250" class="w-100 align-middle">
                            <div class="position-absolute bottom-0 text-transparent w-100 text-white text-center text-lg-start px-lg-4 py-lg-3 py-4">
                                <h2 class="p-0 m-0 fs-5 fw-bold mb-lg-2">Heading</h2>
                                <div>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, itaque deserunt nesciunt...
                                </div>
                                <a href="#" class="btn btn-outline-light px-lg-3 btn-sm mt-lg-2 py-lg-1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ps-lg-5">
                <h2 class="my-4 my-lg-0 text-lg-center fs-4 mb-lg-3">Latest News and Information</h2>
                <p>
                    Stay up to date with our news and information section. Share in our spa philosophy and be the first to know about all of our latest treatments and any exciting news!
                </p>
                <p>
                    We also hope to answer some of your most pressing health and beauty questions, and keep you in the know about all the latest and greatest trends, products and features.
                </p>
            </div>
        </div>
    </section>

    {{-- reviews --}}
    <section class="container-fluid px-5 bg-purple py-5">
        <div class="container row m-auto">
            <div class="col-lg-12">
                <h1 class="text-uppercase text-center fs-4">customer reviews</h1>
                <hr class="text-black border-2 opacity-75 mb-5">
            </div>
            <div class="col-lg-6">
                <div class="review">
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                    <div>
                        <span class="fw-bold d-block">username</span>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <i class="fa-solid fa-star text-purple"></i>
                        <span class="fst-italic d-block">1 year ago - Google</span>
                        <p class="mt-4">
                            I got a month-long membership here. I come to do laps between the dry sauna and the cold pools. It's super relaxing and the crowd is quite friendly. Ginger tea is an also provided. It's nice to sip while I soak in the 15° cold pool.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center pt-4">
                    <span class="fw-bold mb-4 d-block">
                        Please review us on...
                    </span>
                    <div>
                        <img src="{{ asset('images/google_small_icon.png') }}">
                        <img src="{{ asset('images/facebook_small_icon.png') }}" class="mx-3">
                        <img src="{{ asset('images/tripadvisor_small_icon.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- instagram --}}
    <section class="mb-5 text-center">
        <a href="#" class="btn btn-purple m-auto py-2 px-3 mt-3 fw-bold text-uppercase" style="font-size: 14px;">follow us</a>
    </section>

    {{-- spa service --}}
    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">spa services in canggu - bali</h1>
        <hr class="text-black border-2 opacity-75 mb-3">
        <p>AMO spa invites you to indulge in an unbeatable selection of beauty and wellness treatments at our chic, multi-level facility in the heart of Canggu. Over the last decade, we've established ourselves as the premiere venue for receiving high-quality treatments and soothing therapies in a truly relaxing setting. Our sprawling wellness centre is the brainchild of ex-super model Navia Nguyen, whose holistic spa philosophy centers on promoting true wellness from within.</p>
        <p>Embark on a multi-sensory journey when you step into our urban space. You'll be delighted by the scents of orange blossom and patchouli that waft from our beauty lab, where our signature oils and scrubs are prepared daily from locally sourced ingredients. We believe in harvesting nature's goodness for natural healing, which is why all of our nourishing food and health shots are also prepared on-site, and from scratch.</p>
        <p>Make your way to our upscale social sauna and you'll find warm and cold plunge pools, a sauna, steam room, private showers, and a bubbling Jacuzzi that overlooks lush rice terraces. Between steam sessions, grab a cold-pressed juice, lay back on our sun loungers and work on that golden tan. Our sauna area is the ultimate chill out spot, and just what the doctor ordered for active bodies in need of recovery. For those after something more indulgent, opulent private treatment rooms and plush armchairs await upstairs.</p>


        <div class="collapse" id="collapseExample">
            <p>Sip a ginger tea and relax in the lap of luxury while you peruse our extensive treatment menu. Our massages were designed by orthopedic surgeons to leave you with lasting well-being, and you can select a custom blend of aromatherapy oils before your treatment begins. Our facial systems use only the finest Janssen's cosmetics range, applied with expert technique and state-of-the-art machinery to give real results. We also offer detoxifying, collagen-enhancing, and vitamin-rich IV therapies for anyone seeking complete rejuvenation.</p>
            <p>AMO's hair salon is staffed with a team of experienced stylists. We offer a range of hair services, including cuts, custom highlights, up-dos, blowouts, and silky-smooth keratin straightening. We're also no stranger to turning out perfect manicures and pedicures every time. Our well-appointed venue encourages simultaneous treatments, putting you at the pinnacle of a truly pampering experience.</p>
            <p>AMO Spa Canggu is the only Day Spa with in Bali with all one needs to truly experience the complete experience of health, wellness, and pampering at the highest and professional standards like no other establishment within Bali, Indonesia.</p>
            <p>The introduction of the simultaneous treatment philosophy was the next episode to unfold in the AMO story. Created for convenience or purely for the indulgent client? At AMO Spa you don't need an excuse to have multiple Therapists performing treatments whilst you relax comfortably in our recliner chairs, soaking in the ambience of soft lighting and smooth tunes. In fact, it's encouraged as our venues are designed spaciously to allow such delights to occur.</p>
            <p>The AMO Spa formula has borne a solid reputation for consistent and long lasting quality treatments at a price point that affords you to come back for more, as our reputation has grown so has the sheer volume of treatments performed annually, which has made for highly experienced staff who are well accustomed to our truly international clientele base.</p>
            <p>The success of the AMO Lifestyle brand largely influenced by repeat satisfied customers and word of mouth is now expanding into new areas. It is renowned on the Island for quality and style and is well established as one of the leaders.</p>
            <p>If you're looking for a <a href="https://www.amospa.com/massage-in-seminyak/">massage in Seminyak</a>, choose from AMO Spa's inviting range of treatments. Expert masseurs are waiting to work their magic to help you relax and de-stress after a hard day at the beach, a busy day shopping, or purely for some holiday indulgence. Aromatic oils will set a relaxing ambience as you enjoy your <a href="https://www.amospa.com/seminyak-massage/">Seminyak massage</a>. Massage has been a part of many cultures for hundreds of years, and the healing effects go beyond reducing your aches and pains. A <a href="https://www.amospa.com/massage-in-bali/">massage in Bali</a> is also a great way to relieve stress which is beneficial for your all round health and well being. Stress will often manifest itself with physical symptoms, so reducing stress can in turn lead to a reduction in these symptoms. At AMO Spa you can choose from a range of massages, including the Rejuvenate Massage, which was designed in consultation with an orthopedic surgeon and is ideal for those looking to sooth away the aches and pains after exercise. Alternatively, the Relax Me massage is AMO's very own version of the traditional <a href="https://www.amospa.com/balinese-massage/">Balinese massage</a> is perfect for those of you looking to relax for a <a href="https://www.amospa.com/massage-bali-seminyak/">massage Bali Seminyak</a>, you won't find better than an AMO massage.</p>
            <p>Committed to helping you look your best whilst you're on the island, we invite you to the <a href="https://www.amospa.com/best-hair-salon-in-bali/">best hair salon in Bali</a>. The tropical weather can make it difficult to look after your hair, with the combination of humid weather, strong sun and salty seawater. If you want to get your hair coloured, cut or styled, and are looking for a <a href="https://www.amospa.com/hair-salon-seminyak/">hair salon Seminyak</a>, AMO is here for you. Our hairdressers offer hair cuts for ladies and gents, as well as kids cuts a beard trims for men also. AMO <a href="https://www.amospa.com/hair-salon/">salon Bali</a> uses high quality international products, including L'Oreal, Alfaparf (Milano) and Wella for colouring and foils on all lengths of hair. You can rest assured that AMO hair stylists are skilled and experienced, and make you looking great and feel confident, so when you're looking for a <a href="https://www.amospa.com/hair-salon/">hair salon</a> Bali, look no further than AMO Spa, our aim is to be the best <a href="https://www.amospa.com/hair-salon-bali/">hair salon Bali</a> Seminyak.</p>
            <p><a href="https://www.amospa.com/nail-salon/">Nail salon</a> is where AMO Spa began, and it remains at the core of our beauty treatments. As the leading <a href="https://www.amospa.com/nail-salon/">nail salon Bali</a>, we offer unbeatable manicures and pedicures. An luxury and indulgent experience, your manicure or pedicure – or why not enjoy both? - will start with a hand or foot wash followed by conditioning and your cuticles being smartened up by either being removed or pushed back as appropriate. Nails are buffed and smoothed and hands or feet treated with soothing moisturizers. All of our beauty treatments are undertaken with the highest regard for hygiene standards by a friendly and highly skilled team of therapists. At AMO Spa, we offer a range of polishing treatments including French and designer polishes and even extras such as nail art.</p>
            <p>In our hair salon, or at your hotel or Villas through our AMO Mobile Spa, we're here to offer relaxing and indulgent treatments the ensure you're looking and feeling great, and being the very best you can be – who doesn't want to look fantastic for those all important holiday Instagram moments? The AMO experience is about spoiling yourself. Why just go to a <a href="https://www.amospa.com/hair-salon/">hair salon Seminyak Bali</a>, when you can visit AMO and indulge in a range of beauty, hair and massage treatments. Manicure, <a href="https://www.amospa.com/pedicure/">pedicure</a>, nail polishes and designs, beauty treatments, make-up so that you really stand out on at that big occasion, waxing and massage – we've got it all covered. When it comes to a <a href="https://www.amospa.com/massage-seminyak/">massage Seminyak</a>, we're confident to say we're one of the very best. Our stylish spas provide the setting, our therapists provide the expert care and friendly service while sit back, or lie back, relax and enjoy the <a href="https://www.amospa.com/best-spa-in-bali/">best spa in Bali</a>… what else are holidays for? We love what we do, and we'd love to share what we do with you in our <a href="https://www.amospa.com/spa-bali-canggu/">spa Bali Seminyak</a>.</p>
            <p>Visit AMO's stunning lifestyle destination in Canggu and experience a world of beauty, relaxation and health, in this <a href="https://www.amospa.com/rice-paddy-views/">spa with rice paddy views</a>. The roof top garden provides fresh, organic produce that is used in the healthy and tempting meals in the café, as well as forming the base in many of our <a href="https://www.amospa.com/body-scrubs/">body Scrubs</a>. Our commitment to nature and the environment is real – what may have been thought of as waste from the café forms the base of treatment products, providing beauty both internally and externally. We make our own eco friendly washing product using only natural products and have our own laundry, so you can be sure there are no harmful chemicals polluting the environment after your treatments.</p>
            <p>Walk through the cafe, and onto our rear veranda where you'll find our <a href="https://www.amospa.com/ice-pool/">ice pool</a>, <a href="https://www.amospa.com/sauna/">sauna</a>, <a href="https://www.amospa.com/steam-room/">steam room</a> and <a href="https://www.amospa.com/jacuzzi/">Jacuzzi</a>. Sweat out toxins in the wet and dry heat, combined with a plunge in the ice pool for maximum benefit. Then relax with a drink and socialise with friends in the Jacuzzi. Not only will you be having a great time, you'll being doing your body a favour too by stimulating circulation to provide a range of health bonuses.</p>
            <p>For those of you looking for a <a href="https://www.amospa.com/group-and-events-spa/">group and events spa</a>, our Canggu destination is perfect for you. With a complete range of massage, hair and beauty treatments, you'll also be sure to love our Social Spa area. Relax in specially designed treatment chairs as our therapists get to work, and you enjoy a drink from the bar and catch up with friends. Or if you're having such a great time in your villa that you really don't want to leave, allow our <a href="https://www.amospa.com/mobile-spa/">mobile spa</a> to come to you.</p>
            <p>Many people travel to Bali for their wedding. Experts at AMO Spa are ready to provide you with the perfect <a href="https://www.amospa.com/wedding-make-up/">wedding make up</a> and <a href="https://www.amospa.com/wedding-hair/">wedding hair</a>, ensuring you look stunning not only on the day, but picture perfect for the important wedding photos that you'll be looking at for years to come.</p>
            <p>AMO offer a wide range of beauty treatments, including <a href="https://www.amospa.com/facials/">facials</a> and <a href="https://www.amospa.com/microdermabrasion/">microdermabrasion</a>, all carried out by qualified experts and designed to make you look and feel younger, healthier and more vibrant. And don't forget to indulge in a massage treatment in one of our <a href="https://www.amospa.com/private-massage-rooms/">private massage rooms</a>. At AMO we work hard to take your relaxation seriously.</p>
            <p>After long days on the beach, or searching for that perfect outfit in Bali's stunning boutique stores, a <a href="https://www.amospa.com/bali-massage/">Bali massage</a> is sure to be a winner, helping you to unwind, relax and sooth away any aches and pains. If you're staying in Seminyak, allow the therapists in our Canggu spa to treat you with a <a href="https://www.amospa.com/bali-massage-seminyak/">Bali massage Seminyak</a>. It may be a foot massage, head and shoulder massage or one of our specially designed full body massages. Whichever you choose you can be sure of one thing; it's a decision you won't regret when you visit AMO Salon Bali</p>
            <p>Perhaps you've been spending the day exploring Canggu, riding through the rice paddies or catching the waves? If so then a <a href="https://www.amospa.com/massage-canggu/">massage Canggu</a> should be on the cards for you. Call into AMO Canggu, conveniently located on Batu Bolong, and you'll find one our team of expert masseuses ready to give you the very <a href="https://www.amospa.com/best-massage-canggu/">best massage Canggu</a>.</p>
            <p>AMO<a href="https://www.amospa.com/spa-canggu/"> Spa Canggu</a> is a lifestyle destination where healthy living, healthy eating and looking your best are combined with our love of nature and taking care of our customers. AMO <a href="https://www.amospa.com/canggu-cafe/">Canggu Café</a> is the place to visit to kick start your day with a healthy <a href="https://www.amospa.com/canggu-breakfast/">Canggu breakfast</a>, but if you're a late riser worry not as our delicious breakfast dishes are served all day. It may be time for your <a href="https://www.amospa.com/canggu-dinner/">Canggu dinner</a>. Vegetarian, gluten free or committed meat eater, you'll find a range of dishes to satisfy your stomach, from lighter bites to full meals to refuel after a day of exercise. With so many <a href="https://www.amospa.com/canggu-restaurants/">Canggu restaurants</a>, deciding where to eat can be difficult. If you call into AMO however, you'll be visiting the <a href="https://www.amospa.com/best-cafe-in-canggu/">best café in Canggu</a>, and when it comes to your evening meal, you'll be walking into one of the very <a href="https://www.amospa.com/best-restaurants-in-canggu/">best restaurants in Canggu</a>.</p>
            <p>AMO goes far beyond massage and food. With a full range of beauty services, not to mention the sauna, Jacuzzi, steam room and ice plunge pool, AMO is undoubtedly the <a href="https://www.amospa.com/best-spa-in-canggu/">best Spa in Canggu</a>. It is the <a href="https://www.amospa.com/canggu-day-spa/">Canggu day spa</a> of choice for those who are serious about looking after themselves, but know that having fun while you do so is all part of the package – round up your friends and spend time in the social spa area where your favourite cocktail is served alongside an unbeatable manicure or pedicure. And if you're looking or a <a href="https://www.amospa.com/nail-salon-canggu/">nail salon Canggu</a>, 1000 shades of nail polish are available at AMO; now there's something to be impressed by.</p>
        </div>

        <div class="text-center">
            <a id="readMore" class="text-purple text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
            </a>
        </div>

    </section>

    {{-- canggu map --}}
    <section class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-6 text-end bg-purple pt-lg-5 pe-lg-4">
                <h2 class="fs-4">AMO SPA - Canggu</h2>
                <p class="fw-bold my-lg-3">
                    Jl. Pantai Batu Bolong No. 69, Canggu, Badung, Bali - Indonesia 80361
                </p>
                <p>
                    AMO Spa Canggu is located at the heart of Jalan Batu Bolong - Canggu's most happening street.
                    As well as the excellent treatments for which AMO is famous, also enjoy healthy and delicious food from our cafe and revitalize yourself in our sauna, steam room and Epsom salt Jacuzzi.
                </p>
            </div>
            <div class="col-lg-6 p-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.422316402524!2d115.13229531478383!3d-8.651322993783419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238795caccdfb%3A0x5fda743ef00d1c2!2sAMO%20SPA%20-%20LIFE.%20STYLE.%20SPA.%20CAFE!5e0!3m2!1sen!2sid!4v1655908431235!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</x-guest-layout>
