<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ph1-website</title>
    <style>
        .mainvisual{
            background-image: url('{{ asset('images/bg-mainvisual.jpg') }}');
            
        }
        .scroll-down{
            bottom: 3%;
            right: 2%;
        }
        .line-background{
            background-image: url('{{ asset('images/bg-cta.jpg') }}');
        }
    </style>
</head>
<body>
    <header class="flex justify-between p-5 fixed w-full z-50">
        <img src="{{ asset('images/logo.svg') }}" alt="POSSE">
        <div class="flex items-center gap-5">
            <ul class="flex gap-5 text-white font-bold">
                <li><a href="">POSSEとは</a></li>
                <li><a href="">イベント</a></li>
                <li><a href="">日常生活</a></li>
            </ul>
            <ul class="flex">
                <li><a href=""><img class="w-12 h-12" src="{{ asset('images/icon-instagram.png') }}" alt=""></a></li>
                <li><a href=""><img class="w-12 h-12" src="{{ asset('images/icon-twitter.png') }}" alt=""></a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="mainvisual w-screen h-screen bg-center bg-no-repeat bg-cover relative">
            <div class="absolute left-1/2 top-3/4">
                <p class="bg-white text-blue-600 text-xl">学生プログラミングコミュニティ　POSSE（ポッセ）</p>
                <p class="bg-white text-4xl">自分史上最高を仲間と。</p>
            </div>
            <p class="absolute text-white scroll-down">⚫︎SCROLL DOWN</p>
        </section>
        <section>
            <div class="text-center">
                <p class="font-bold text-3xl mt-40">POSSEとは</p>
                <p class="text-blue-600 mt-2">About POSSE</p>
            </div>
            <div class="flex gap-12 items-center justify-center mt-7">
                <img src="{{ asset('images/img-about.jpg') }}" alt="POSSEとは" class="rounded-3xl w-1/3">
                <p class="text-base">学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログ<br>ラミング、二つの面での成長をスローガンに活動しており、大学生だけ<br>が集まって学びを深めるコミュニティです。<br>
                    プログラミングだけではありません。オフラインでのイベントや、旅行<br>など様々な企画を行っています！<br>
                    それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もた<br>くさんいるほどメンバーとの仲が深まります。</p>
            </div>
            <div class="text-center mt-32">
                <p class="font-bold text-3xl mt-40">イベント</p>
                <p class="text-blue-600 mt-2">Event</p>
                <p class="mt-10">POSSEでは、年内に数多くのイベントを行っています。こちらに掲示してあるのはイベントの一部です。<br>
                    プログラミングだけでなく、これらのイベントを共に経験し、仲間との友情はより深まります。</p>
            </div>
            <div class="flex justify-around">
                <div class="bg-gray-100 w-80 h-80 rounded-xl mt-10">
                    <img src="{{ asset('images/img-event01.jpg') }}" alt="講演会" class="w-80 rounded-xl">
                    <div class="text-center ml-28 mt-2">
                        <p class="bg-blue-700 text-white w-24 rounded-xl">2021.April</p>
                    </div>
                    <div class="mt-2 font-bold ml-24">
                        <p>オープン講演会</p>
                    </div>
                </div>
                <div class="bg-gray-100 w-80 h-80 rounded-xl mt-10">
                    <img src="{{ asset('images/img-event02.jpg') }}" alt="チーム開発" class="w-80 rounded-xl">
                    <div class="text-center ml-24 mt-2">
                        <p class="bg-blue-700 text-white w-36 rounded-xl">2021.April - June</p>
                    </div>
                    <div class="mt-2 font-bold ml-28">
                        <p>チーム開発</p>
                    </div>
                </div>
                <div class="bg-gray-100 w-80 h-80 rounded-xl mt-10">
                    <img src="{{ asset('images/img-event03.jpg') }}" alt="入学式" class="w-80 rounded-xl">
                    <div class="text-center ml-28 mt-2">
                        <p class="bg-blue-700 text-white w-24 rounded-xl">2021.April</p>
                    </div>
                    <div class="mt-2 font-bold ml-32">
                        <p>入学式</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-32">
                <p class="font-bold text-3xl mt-40">日常生活</p>
                <p class="text-blue-600 mt-2">Daily Record</p>
                <p class="mt-10">様々な日々の活動について紹介します。<br>
                    POSSEでは、プログラミングを学んでいくにあたってメンバー同士が共に学習するような時間を数多く設けています。<br>
                    入会時期が半年毎にあるため、縦の繋がりから学べることは非常に多く、この繋がりを意識した班を構成したり、<br>
                    それとは別に同期のみの班を構成して共に学習するようなシステムを採用しています。</p>
            </div>
            <div class="relative bg-gray-100 w-2/3 h-72 rounded-xl mx-auto">
                <img src="{{ asset('images/img-daily01.jpg') }}" alt="ミートアップ" class="absolute w-96 rounded-xl right-12 -top-8">
                <div class="flex items-end gap-4 mb-6 ml-20 mt-24">
                    <p class="text-blue-600 text-7xl mt-8">01</p>
                    <p class="font-bold text-2xl mt-8">ミートアップ</p>
                </div>
                <div class="flex gap-2 ml-20">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>毎週月曜日 19:00～22:00</p>
                </div>
                <div class="flex gap-2 ml-20">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>全員参加</p>
                </div>
                <p class="ml-20 mt-3">全体ミーティングです。<br>各局からのお知らせや、講演会など目白押しです。</p>
            </div>
            <div class="relative bg-gray-100 w-2/3 h-72 rounded-xl mx-auto">
                <img src="{{ asset('images/img-daily02.jpg') }}" alt="ミートアップ" class="absolute w-96 rounded-xl left-12 -top-8">
                <div class="flex items-end gap-4 ml-[510px] mt-24">
                    <p class="text-blue-600 text-7xl mt-8">02</p>
                    <p class="font-bold text-2xl mt-8">縦もく</p>
                </div>
                <div class="flex gap-2 ml-[510px]">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>週2回 2時間</p>
                </div>
                <p class="ml-[510px] mt-3">期生関係なくzoomを繋ぎ、わからないところを先輩に質<br>問できます。わかるまで丁寧に教えてくれます。</p>
            </div>
            <div class="relative bg-gray-100 w-2/3 h-72 rounded-xl mx-auto">
                <img src="{{ asset('images/img-daily03.jpg') }}" alt="ミートアップ" class="absolute w-96 rounded-xl right-12 -top-8">
                <div class="flex items-end gap-4 mb-6 ml-20 mt-24">
                    <p class="text-blue-600 text-7xl mt-8">03</p>
                    <p class="font-bold text-2xl mt-8">横もく</p>
                </div>
                <div class="flex gap-2 ml-20">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>週1回 3時間</p>
                </div>
                <p class="ml-20 mt-3">同期と3～4人一組で学習しながら、わからないところを共<br>有、質問できます。オフラインで集合したり、共にハッカ<br>ソンに挑んだりします。</p>
            </div>
            <div class="relative bg-gray-100 w-2/3 h-72 rounded-xl mx-auto">
                <img src="{{ asset('images/img-daily04.jpg') }}" alt="ミートアップ" class="absolute w-96 rounded-xl left-12 -top-8">
                <div class="flex items-end gap-4 mb-6 ml-[510px] mt-24">
                    <p class="text-blue-600 text-7xl mt-8">04</p>
                    <p class="font-bold text-2xl mt-8">スペもく</p>
                </div>
                <div class="flex gap-2 ml-[510px]">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>週1回 1時間</p>
                </div>
                <div class="flex gap-2 ml-[510px]">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>自由参加</p>
                </div>
                <p class="ml-[510px] mt-3">メンターさんからのアドバイスを受けることができます。<br>毎回得る知識が多く、とてもありがたい機会です。</p>
            </div>
            <div class="relative bg-gray-100 w-2/3 h-72 rounded-xl mx-auto">
                <img src="{{ asset('images/img-daily05.jpg') }}" alt="ミートアップ" class="absolute w-96 rounded-xl right-12 -top-8">
                <div class="flex items-end gap-4 mb-6 ml-20 mt-24">
                    <p class="text-blue-600 text-7xl mt-8">05</p>
                    <p class="font-bold text-2xl mt-8">飯もく</p>
                </div>
                <div class="flex gap-2 ml-20">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>不定期 3時間</p>
                </div>
                <div class="flex gap-2 ml-20">
                    <img src="{{ asset('images/icon-check.svg') }}" alt="チェック">
                    <p>全員参加</p>
                </div>
                <p class="ml-20 mt-3">ご飯を食べながら作業をします。表参道の美味しいお店<br>をたくさん発見できることが楽しいです！</p>
            </div>
        </section>
        <section class="line-background w-screen h-96 bg-center bg-no-repeat bg-cover mt-36">
            <div class="flex items-center justify-center gap-3">
                <img class="w-12 h-12 mt-16" src="{{ asset('images/icon-line.svg') }}" alt="LINE">
                <p class="text-white font-bold text-2xl mt-16">POSSE 公式LINE</p>
            </div>
            <div class="text-center">
                <p class="text-white mt-5">公式LINEにてご質問を随時受け付けております。<br>詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>下記ボタンより友達追加をお願いします！</p>
            </div>
            <div class="justify-center items-center mx-auto">
                <div class="flex bg-white w-64 h-12 justify-center items-center mx-auto rounded-3xl mt-12">
                    <p class="text-blue-600 font-semibold">L I N E 追 加</p>
                    <a href=""><img src="{{ asset('images/icon-external-link-primary.svg') }}" alt="リンク"></a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img class="mx-auto mt-12" src="{{ asset('images/logo.svg') }}" alt="POSSE">
        <div class="flex bg-white w-64 h-12 justify-center items-center mx-auto rounded-3xl mt-2">
            <p class="text-gray-500">POSSE公式サイト</p>
            <a href=""><img src="{{ asset('images/icon-external-link.svg') }}" alt="リンク"></a>
        </div>
        <ul class="flex justify-center gap-5">
            <li><a href=""><img class="w-12 h-12" src="{{ asset('images/icon-twitter.png') }}" alt=""></a></li>
            <li><a href=""><img class="w-12 h-12" src="{{ asset('images/icon-instagram.png') }}" alt=""></a></li>
        </ul>
        <div class="w-full border-t-2 border-grey-500 my-6"></div>
        <p class="text-gray-400 text-center mb-6">©️ 2023 POSSE</p>
    </footer>
</body>
</html>