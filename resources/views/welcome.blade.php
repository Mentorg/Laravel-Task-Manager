@include('partials.head')
<body>
  <section class="grid grid-cols-2">
    <div class="px-40 flex place-content-center flex-col">
      <h1 class="text-[3rem] font-bold leading-[4rem] text-blue-900">Zhbllokoni produktivitetin tuaj, një detyrë përnjëherë.</h1>
      <h3 class="font-semibold text-3xl text-blue-800 mt-2">Ktheni çdo qëllim në një listë detyrash, dhe çdo listë detyrash në fitore</h3>
      <p class="mt-6 text-xl text-slate-700 font-semibold">Produktiviteti fillon me qartësi. Ne besojmë se mjetet e thjeshta mund të krijojnë ndikimin më të madh. Aplikacioni ynë i listës së detyrave ju ndihmon të organizoni ditën tuaj, të vendosni prioritete dhe të përqendroheni në atë që ka vërtet rëndësi—kështu që mund të bëni më shumë, pa u ndier i dërrmuar.</p>
      <ul class="mt-4 leading-8">
        <li><span class="font-semibold">Organizoni me lehtësi:</span> Kategorizoni detyrat tuaja, caktoni datat e duhura dhe mbani gjithçka të renditur mirë.</li>
        <li><span class="font-semibold">Ndiqni përparimin tuaj:</span> Kontrolloni detyrat e përfunduara dhe ndjeni kënaqësinë e arritjes së qëllimeve.</li>
        <li><span class="font-semibold">Prioritizimi i zgjuar:</span> Përqendrohuni në atë që ka më shumë rëndësi duke organizuar detyrat tuaja sipas urgjencës dhe rëndësisë.</li>
        <li><span class="font-semibold">Sinkronizim pa probleme:</span> Detyrat tuaja janë gjithmonë të sinkronizuara në të gjitha pajisjet, kështu që ju mund të qëndroni produktiv kudo që të jeni.</li>
        <li><span class="font-semibold">Vizualizoni ditën tuaj:</span> Me pamje të thjeshta dhe intuitive, planifikoni ditën tuaj dhe qëndroni në krye të gjithçkaje me lehtësi.</li>
      </ul>
      <div class="flex gap-4 mt-6">
        <a href="{{route('login')}}" class="py-2 px-6 bg-blue-700 text-white border-2 border-blue-700 hover:bg-blue-800 transition-all rounded-md">Kyçu</a>
        <a href="{{route('register')}}" class="py-2 px-6 bg-white text-blue-700 border-2 border-blue-700 hover:bg-slate-100 transition-all rounded-md">Regjistrohu</a>
      </div>
    </div>
    <div class="flex justify-end">
      <img src="https://images.pexels.com/photos/2528118/pexels-photo-2528118.jpeg" alt="Laptop image" class="max-h-dvh">
    </div>
  </section>
</body>
@include('partials.footer')