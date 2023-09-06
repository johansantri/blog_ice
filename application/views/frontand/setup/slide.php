<div class="mb-5 lg:mb-8 my-8 hero-wrapper">
<picture>
<?php foreach ($slide as $key ) {?>
   <a href="">
        <div class="hero-slide h-40 lg:h-[45vh] rounded-[17px] lg:rounded-[25px] bg-cover mx-4 w-[90%]" style="background-image: url('<?php echo base_url()?>upload/slide/<?php echo $key->image;?>')"></div>
 </a>
    <?php };?>
    </picture>
</div>