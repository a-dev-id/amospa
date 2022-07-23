@push('css')
<style>
    .masthead {
        height: 100vh;
        min-height: 500px;
        background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .slick-prev {
        left: 20px;
        z-index: 1;
    }

    .slick-next {
        right: 20px;
        z-index: 1;
    }

</style>
@endpush

@push('js')
<script>
    $('#readMore').click(function() {
            if ($(this).text() == 'Read Less') $(this).text('Read More');
            else $(this).text('Read Less');
        });
</script>
<script>
    $(document).ready(function() {
            $('.section').slick({
                dots: false,
                slidesToScroll: 1,
                autoplay: false,
                arrows: true,
            });
        });
</script>
@endpush

<x-guest-layout>

    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center mt-lg-5">
                <div class="col-12 text-center p-0">
                    <h1 class="fw-light bg-dark bg-opacity-25 py-5 text-uppercase fw-bold text-light-purple">amo café</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container pt-5">
        <h1 class="text-uppercase text-center fs-4">about us</h1>
        <hr class="text-black border-lg-2 opacity-75 mb-3">
        <p>
            AMO Spa Canggu celebrates a love of beauty combined with the worship of nature. Indulge both body and soul on a personal journey through healthy food with the finest home grown produce and beauty treatments using scrubs with natural products which are also made in house from AMO's own roof-top garden. Experience the sensational tastes of the café and stunning results of the spa treatments, following the produce from garden to plate or treatment.</p>
        <p>

            Inspired by neo-pagan ideology and the power of nature, AMO Canggu offers an unrivalled experience. Step through the doors into the best café in Canggu, where a range of cold press juices, teas and Go Green coffee as well as delicious salads are waiting to tempt your taste buds and enhance your health. Check in at reception, where you'll also see 1000 shades of nail polish - just one of the things that makes our nail salon Canggu stand out from the crowd. Revitalise yourself in the steam room, sauna and ice plunge pools as well as the Epsom salts hot salt bath.</p>
        <p>

            On the first floor, you'll be welcomed to our Social Spa, an area where custom engineered scrub beds, each with its own cleansing station. With our bar serving a full range of signature cocktails right beside you, this is the perfect place for a social experience; relax and be pampered with friends. Step through to the high performance treatment area and delight in AMO's simultaneous treatment philosophy where up to four therapists will provide you with the perfect mani, pedi and cream bath. Indulge yourself in the serenity of the massage rooms, and enjoy one of AMO's specially designed massages.</p>
        <p>

            You may be thinking of coming for a single treatment, but take the time to indulge and luxuriate in all that AMO has to offer as you travel through their gracefully refined world of fine food, health and beauty. If you're arriving on an early flight, or leaving the island late and night, come and spend your day with us at AMO Canggu, and start or finish your holiday in the best way possible.
        </p>
        <div class="collapse" id="collapseExample">
            <p>AMO Canggu is a complete lifestyle destination, where you can indulge in luxurious and indulgent massage and beauty treatments to make sure you are looking and feeling your best as well as taking care of your health by eating in our restaurant Canggu. For further health benefits, not to mention relaxation, spend time in the sauna, steam room cold plunge pool and Epsom salts Jacuzzi. If you've been enjoying all that Canggu and Bali has to offer after dark, then you'll be searching for a hearty yet healthy Canggu breakfast the next day. Choose from our All Day Breakfast Menu, which includes such delights as waffles, Benedict Eggs, Quinoa Vegged Out or our Breakfast chia panna cotta for the vegans amongst you. If eggs and bacon are your thing for breakfast, then you're sure to love The Breakfast Sandwich which comes packed full of goodness, including sautéed spinach, avicade, Amercan bacon and fresh avocado.</p>
            <p>

                Moving onto your Canggu dinner, or perhaps a lighter bite for lunch, deciding what to choose from the extensive and tempting menu at AMO's Canggu café may well mean that one visit just isn't enough. You'll find a full range of meals that cater for your dietary requirements if you are vegetarian, vegan or gluten free and all our products containing dairy products are also clearly labelled. Smoothie bowls are a healthy and refreshing snack at any time of day, whilst our salads are lovingly prepared with organic produce, fresh from our roof top garden, unlike any other Canggu restaurants. For meat lovers, we offer a wide range of burger and sandwiches, including My Big Burger and the Rib-Eye Steak Sandwich. Vegetarians will love the Bean Veggie Burger and Grilled Vegetable Sandwich. Other meals include the all time favourite Cheesy Chicken Parmigiana, Chicken Skewers and there's also a tempting selection of pasta dishes. For those of you with a sweet tooth, our desert menu is packed full of goodness suitable for vegetarians, vegans and many options are also gluten free.</p>
            <p>

                If you're looking for a massage canggu, there's no better place to visit than AMO. In our calming, private massage rooms, expert massage therapists, will sooth away your aches and pains, transporting you to state of purely relaxed bliss, enhanced by the soothing music and the aromatic aromas of our quality massage oils. Choose from a range of massage treatments, head and shoulders, hands, feet or full body. Depending on your wishes and what you want to achieve from your massage we have a range of massages for you to choose from on our treatments menu.</p>
            <p>

                Balinese massage is an ancient art form, and has been part of the culture on the island for generations. A massage not only soothes aches and pains in your muscles, other help benefits include increasing blood circulation with improves the flow of oxygen and vital nutrients to the vital organs and body tissue. Furthermore, massage stimulates the flow of nymphs - the natural defence system of the body. AMO's Rejuvenate Me massage was developed after consultation with an expert orthopaedic surgeon. It uses a combination of warm tones aligned along the body using long strokes, followed by a combination of deep tissue, pressure point and lomi lomi massage techniques. The Relax Me massage is a gentler alternative, without pressure point work and uses soft to medium pressure. It's AMOs version of the Balinese massage and perfect for complete relaxation.</p>
            <p>

                AMO Canngu day spa offers an experience like no other. AMO Canggu provides an indulgent experience of health, beauty and wellbeing. We offer our complete range of hair, beauty and massage services as in our Canggu Salon, but there's so much more for you to enjoy. And of course with one of the best restaurants in Canggu right here, day spa, really does mean day spa - you'll not want to leave.</p>
            <p>

                Allow your beauty treatments to be a social experience in our Social Spa area. Here, you'll find specially designed and engineered scrub beds, where you and your crew - be that family, friends, or a mixture of the both, can relax and be treated to the island's finest manicure and pedicures. While our therapists work their magic on your nails, and you have the opportunity to catch up, laugh and talk about the finer things in life, let our friendly bar staff serve you with a range of drinks from the bar - it's just steps away so don't worry about having to wait too long for a refill! This is just one of our features which makes us stand out as the best spa in Canggu. Making beauty treatments both fun and social as well as providing unrivalled quality, what better way to treat yourself on holiday, get ready for a night out, or include the AMO experience as part of your Hen's Do? And if you've had a big night out, head back to AMO because we'll even help you with your hangover with our IV Therapy hangover cures. We really are committed to making you look and feel your best.</p>
            <p>

                Over looking the lively street of Jalan Batu Bolong, you'll find our high performance area. Continuing the theme of loft inspired, functional yet relaxing interior décor, take a seat in one of the relaxing treatment chairs and experience AMO Spa's famous simultaneous treatment philosophy. It's a luxurious experience when one of AMOs fantastic therapists are dedicating themselves to your beauty and relaxation. Here in the high performance area, up to four therapists will provide simultaneous treatments including manicures, pedicures and cream baths.</p>
            <p>

                To round of your AMO experience, return to the ground floor, and enjoy a healthy juice, tea or coffee and maybe a snack, or why not stay for dinner. You'll find our café menu on line, as well as our full menu of treatments - you can also book online, so can be sure you AMO therapist will be ready to greet and welcome you the AMO Spa world of healthy and beautiful indulgence.</p>

        </div>

        <div class="text-center">
            <a id="readMore" class="text-purple text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Read More
            </a>
        </div>
    </section>

    <section class="container-fluid pt-5">
        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5">
                <h2 class="fs-4 fw-bold text-center">Our Story</h2>
                <p>AMO Café is a lifestyle destination, where delicious healthy food from our roof top garden is used for our scrumptious salads. And at AMO, we don't believe in waste - we also use our home grown products in many of our beauty treatments. With a full range of food, including a wide selection of vegetarian, vegan and gluten free options for breakfast, lunch and dinner, join us in Canggu's leading café.</p>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0 order-lg-2">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5 order-lg-1">
                <h2 class="fs-4 fw-bold text-center">Food</h2>
                <p>AMO Serves up healthy and wholesome food with the finest ingredients, many grown in house. Follow your food's journey from roof top garden to plate. Start your day the right way with a choice from our breakfast menu, and find an inviting variety of salads, main dishes, meats, pastas and more, perfect for lunch, dinner or a snack at anytime of day.</p>

                <a href="#" class="btn btn-purple btn-sm px-lg-3">Food Menu</a>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5">
                <h2 class="fs-4 fw-bold text-center">Drinks</h2>
                <p>Healthy cold pressed juices, teas, Go Green coffee and more, what ever tempts your taste buds to stay hydrated, you'll find it at AMO. Head to our Social Spa and enjoy your favourite alcoholic cocktail to compliment your manicure and pedicure. Beauty, food and beverages combine at AMO Canggu.</p>

                <a href="#" class="btn btn-purple btn-sm px-lg-3">Drinks Menu</a>
            </div>
        </div>

        <div class="row d-flex align-items-center bg-purple">
            <div class="col-lg-6 p-lg-0 order-lg-2">
                <div class="section">
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                    <div class="col-lg-12">
                        <img src="https://via.placeholder.com/700x380" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-lg-0 px-lg-5 order-lg-1">
                <h2 class="fs-4 fw-bold text-center">Venue</h2>
                <p>AMO Canggu is your complete lifestyle destination. AMO Café aims to be the best restaurant in Canggu, and is just part of the AMO experience. Indulge in the sauna, steam room and Epsom salt Jacuzzi, massage treatments, beauty treatments, our Social Spa, High Performance Treatment Area and even our special hangover cure therapies.</p>
            </div>
        </div>
    </section>

</x-guest-layout>