<div>
    <div class="bg-gray-50 pt-6 pb-12 rounded-t-[1.35rem] px-6">
        <span class="font-darker-grotesque">April 02, 2022</span>
        <a href="" class="text-red-primary font-darker-grotesque mt-3 block font-bold leading-7 text-[1.3rem]">
            <h4 class="h-20"><?= $news_obj['title'] ?></h4>
        </a>
        <span class="font-darker-grotesque mt-6 block">oleh <span class="font-bold">admin</span></span>
    </div>
    <div class="-mt-7">
        <img class="w-full h-48 rounded-[20px] object-cover object-center" src="./assets/images/<?= $news_obj['image'] ?>" alt="">
    </div>
    <div class="px-6 bg-gray-50 -mt-4 pt-10 pb-6 rounded-b-[1.35rem]">
        <p class="font-darker-grotesque h-24"><?= $news_obj['desc'] ?></p>
        <a href="" class="font-darker-grotesque font-bold block mt-10">Baca Selengkapnya <img src="chevron-right-icon.png" alt=""></a>
    </div>
</div>