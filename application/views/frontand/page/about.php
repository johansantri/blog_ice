
            <!-- Hamburger -->
            <div onclick="toggleNavbar()" id="hamburger" class="fixed flex flex-col items-end gap-y-1 top-4 cursor-pointer nav-hidden right-4 z-30 w-9 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
            <!-- End of Hamburger -->
        </div>
    </nav>
    <div class="pt-12">
     

        <div class="container px-5 mx-auto lg:px-20 mt-6 lg:mt-12">
            <div class="flex flex-col lg:flex-row gap-x-20">
                <div class="w-full lg:w-fit">
                    <div class="relative">
                        <div class="flex justify-between">
                            <span class="font-darker-grotesque"><?php echo $slug['create_ad'];?></span>
                           
                        </div>
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12"><?php echo $slug['title'];?></h1>

                        <div class="flex items-center justify-between mt-8 lg:mt-24">
                            <ul class="flex items-center gap-x-4 lg:gap-x-5 mt-3">
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-facebook"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-youtube-play"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl fa-brands fa-instagram"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-twitter"></i></a></li>
                                <li><a href=""><i class="text-red-primary text-xl lg:text-2xl zmdi zmdi-linkedin"></i></a></li>
                            </ul>
                            <ul class="flex items-center gap-x-4">
                                <li><img class="h-4" src="<?php echo base_url()?>assets/new/images/bookmart-icon.png" alt=""></li>
                                <li><img class="h-4" src="<?php echo base_url()?>/assets/new/images/flag-icon.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="-mt-3 font-darker-grotesque">
                            <p class="mt-8"><?php echo $slug['description'];?>.</p>
                           
             
                           
                         

                     <style>
                              iframe { width: 100%; height: 400px; }
                                 .tags {
  list-style: none;
  margin: 0;
  overflow: hidden; 
  padding: 0;
}

.tags li {
  float: left; 
}

.tag {
  background: #eee;
  border-radius: 3px 0 0 3px;
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}

.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #eee;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}

.tag:hover {
  background-color: crimson;
  color: white;
}

.tag:hover::after {
   border-left-color: crimson; 
   
}

                         </style>
                            <hr class="mt-12 lg:mt-24">
                            &nbsp;
                             <!-- <a href="#"><?php echo $slug['tags'];?></a>  -->
 <ul class="tags">
                  <?php
                        $str = $slug['tags'];
                        $people= (explode(",",$str));
                        for($i = 0; $i < count($people); ++$i) {?>
                
                    
               
                       
  <li><a href="/tags/<?php echo $people[$i] ?>" class="tag"><?php echo  $people[$i]?></a></li>


           <?php }   ?>   
           </ul>
                            </div>
                        </div>

                        <div class="flex justify-end bg-red-primary h-20 w-10 absolute top-0 rounded-3xl -left-16 translate-y-0" style="z-index: 1">
                            <span class="w-6/12 h-full bg-white"></span>
                        </div>
                        <div class="bg-red-primary h-32 w-24 absolute rounded-full -left-44 translate-y-20 top-0"></div>
                    </div>
                </div>
			
        </div>
