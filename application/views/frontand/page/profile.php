
            <!-- Hamburger -->
            <div onclick="toggleNavbar()" id="hamburger" class="fixed flex flex-col items-end gap-y-1 top-4 cursor-pointer nav-hidden right-4 z-30 w-9 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
            <!-- End of Hamburger -->
        </div>
    </nav>
    
    
    
    <style>
    *, *::before, *::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



.share-container {
  border-radius: 15px;
  display: flex;
  padding-right: 0;
  text-align: center;
  transition: width 0.5s;
  width: 80px;
  background-color: #eeeeee;
}

.share-container.active {
  width: 100%;
}

.share-btn {
  width: 90px;
  padding: 5px;
  font-size: 11px;
  font-weight: 800;
  color: #f50a0a;
  border-radius: 15px;
  background-color: #eeeeee;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.share-btn:hover {
  color: #343a40;
  cursor: pointer;
}

.share-btn.active {
  color: #ffffff;
  background-color: #dc3545;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding: 5px 5px 5px 12px;
}

.share-btn.active:hover {
  background-color: #cf2838;
}

.share-url {
  width: 0;
  text-align: center;
  overflow: hidden;
  white-space: nowrap;
  font-size: 10px;
  color: #eeeeee;
  transition: all 0.2s;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.share-url.active {
  width: 50%;
  color: #343a40;
  padding: 6px;
}

/*fade*/
.animate {
  opacity: 0;
  transition: all 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animate.active {
  opacity: 1;
  transform: translateX(-50%) translateY(-50%);
}

.slide-in-down {
  transform: translateY(-100%) translateX(-50%);
}

/*notification*/
.notification-button {
  position: fixed;
  top: 40px;
  left: 50%;
  padding: 10px 20px;
  background: #343a40;
  color: #eeeeee;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 800;
  box-shadow: 0 0 14px rgba(0, 0, 0, 0.05);
}
</style>
    <div class="pt-12">
      

        <div class="container px-5 mx-auto lg:px-20 mt-6 lg:mt-12">
            <div class="flex flex-col lg:flex-row gap-x-20">
                <div class="w-full lg:w-fit">
                    <div class="relative">
                    
                        <h1 class="font-darker-grotesque text-4xl text-red-primary font-bold mt-4 lg:mt-12"><?php echo $slug['title'];?></h1>
                          <p hidden id="apa"><?php echo base_url()?>profile/<?php echo $slug['slug_title'];?></p>

                        <div class="flex items-center justify-between mt-8 lg:mt-24">
                            <ul class="flex items-center gap-x-4 lg:gap-x-5 mt-3">
                                <li>    <!--button share -->
                                <div class="animate slide-in-down notification-button">
                                <i class="fa fa-files-o"></i> Link Copied to Clipboard
                                </div>

                                <div class="container">
                                <div class="share-container">
                                <div class="share-btn btn-danger">Share</div>
                                <div contenteditable="true" class="share-url"></div>
                                </div>
                                </div>

                                <!--end--></li>
                             
                            </ul>
                            <ul class="flex items-center gap-x-4">
                                <li><img class="h-4" src="<?php echo base_url()?>assets/new/images/bookmart-icon.png" alt=""></li>
                                <li><img class="h-4" src="<?php echo base_url()?>/assets/new/images/flag-icon.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="-mt-3 font-darker-grotesque">
                            <p class="mt-8"><?php echo $slug['description'];?>.</p>
                           
             
                           
                         

                    
                                      
                                           
                                        </div>
                                                                    </div>
                            </div>
                        </div>

                        <div class="flex justify-end bg-red-primary h-20 w-10 absolute top-0 rounded-3xl -left-16 translate-y-0" style="z-index: 1">
                            <span class="w-6/12 h-full bg-white"></span>
                        </div>
                        <div class="bg-red-primary h-32 w-24 absolute rounded-full -left-44 translate-y-20 top-0"></div>
                    </div>
                </div>
			
        </div>
