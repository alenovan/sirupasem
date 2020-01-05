<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active">
                <a class="nav-item-hold" href="<?php echo base_url().index_page(); ?>dashboard">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" <?php if (\strpos(get_role()->role, '1') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?> >
                <a class="nav-item-hold" href="<?php echo base_url().index_page(); ?>admin">
                    <i class="nav-icon i-Add-User"></i>
                    <span class="nav-text">Admin</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" <?php if (\strpos(get_role()->role, '7') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?>>
                <a class="nav-item-hold" href="<?php echo base_url().index_page(); ?>member">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="nav-text">Customer</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item" <?php if (\strpos(get_role()->role, '3') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?>>
                <a class="nav-item-hold" href="<?php echo base_url().index_page(); ?>category">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Kategori</span>
                </a>
                <div class="triangle"></div>
            </li>

             <li class="nav-item" data-item="produk" <?php if (\strpos(get_role()->role, '4') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?>>
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="nav-text">Produk</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item" data-item="payment" <?php if (\strpos(get_role()->role, '5') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?>>
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="nav-text">Payment</span>
                </a>
                <div class="triangle"></div>
            </li>
           
            <li class="nav-item" data-item="others" " <?php if (\strpos(get_role()->role, '6') !== false) { echo 'style="display:block" '; }else{echo 'style="display:none"';}?>>
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Gear"></i>
                    <span class="nav-text">Setting</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
      
      
        <ul class="childNav" data-parent="produk">
            <li class="nav-item">
                  <a href="<?php echo base_url().index_page(); ?>product_type">
                    <i class="nav-icon i-Add-File"></i>
                    <span class="item-name">Produk Type</span>
                </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url().index_page(); ?>product">
                    <i class="nav-icon i-Email"></i>
                    <span class="item-name">Produk</span>
                </a>
            </li>
        </ul>

         <ul class="childNav" data-parent="payment">
            <li class="nav-item">
                <a href="<?php echo base_url().index_page(); ?>payment_method">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="item-name">Payment Method</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url().index_page(); ?>payment_account">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="item-name">Payment Account</span>
                </a>
            </li>
        </ul>



        <ul class="childNav" data-parent="others">

               <li class="nav-item">
                <a href="<?php echo base_url().index_page(); ?>level">
                    <i class="nav-icon i-Key"></i>
                    <span class="item-name">Hak Akses</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>