<x-guest-layout>
    <div class="h-screen pb-14 bg-right bg-cover">
        <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-yellow-50">
            <!--左側-->
            <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden ">
                <h1 class="my-4 text-3xl md:text-5xl text-green-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">FIND_DOGS</h1>
                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">
                    新しい親友を探したい方♪<br>
                        OR<br>
                    保護犬登録の方♪
                </p>
            
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                    会員募集中。お気軽にひょっこりきてください。
                </p>
                <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                    {{-- ボタン設定 --}}
                    <a href="{{route('contact.create')}}">
                        {{-- <a href="{{url('/contact')}}"> --}}
                        <x-primary-button class="mr-4 myclassg bg-gray-600 font-bold text-base  text-center">お問い合わせ</x-primary-button>
                        {{-- </a> --}}
                    </a>
                    <a href="{{route('register')}}"><x-primary-button class="mr-4 myclasso font-bold text-base  text-center">ご登録はこちら</x-primary-button></a>
                    {{-- <a href="{{route('post')}}"><x-primary-button class="mr-4 myclasso font-bold text-base  text-center">閲覧はこちらへ</x-primary-button></a> --}}

                </div>
            </div>
            {{-- 右側 --}}
            <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
                <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl" src="{{asset('logo/topdogs.jpg')}}">
            </div>
        </div>
        <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="w-full text-sm md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
                <P　class="text-center my-4 text-3xl md:text-5xl"> 犬を引き取りたい方や犬を引き渡したい方犬好きが集まる投稿サイトです。</p>
            </div>
            <!--フッタ-->
            <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                <p class="text-gray-500 text-center">@2023 FIND_DOGS</p>
            </div>
        </div>
    </div>
</x-guest-layout>